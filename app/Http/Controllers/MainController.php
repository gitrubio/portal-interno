<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicationController;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function conectarSqlServer(){

        $serverName = "192.168.1.95"; //serverName\instanceName
        $connectionInfo = array( "Database"=>"nomina", "UID"=>"sa", "PWD"=>"sa1_xxxx");

        try
        {
            if ($connection =  sqlsrv_connect($serverName, $connectionInfo))
            {
                //echo 'cnexion establecida';
            }
            else
            {
                die( print_r( sqlsrv_errors(), true));
                throw new Exception('no se pudo conectar');
            }
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }

        $mes = date('m');
        $consulta = "SELECT day(FechaNac) Dia , E.Nombre1 +' '+ E.Apellido1+' '+  E.Apellido2 AS Empleado
            FROM nEmpleados E
            JOIN nContratos C ON E.IdEmpleado=C.IdEmpleado
            WHERE MONTH(FechaNac)= $mes AND C.Activo='1'
            ORDER BY Dia";


        $resultado =  sqlsrv_query($connection, $consulta, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
        if(!$resultado){
            echo "No se ha podido realizar la consulta";
        }

        $indice = 0;
        while($registro = sqlsrv_fetch_array($resultado))
        {
            $nombre = $registro['Empleado'];
            $dia =  $registro['Dia'];
            $cumpleanios[$indice] = array('dia' => $dia, 'nombre' => $nombre);
            $indice += 1; 
        }

        return $cumpleanios;
    }

    public function index(){
        //
        $imagenes_slides = Publication::select('imagen')->where('tipo' , 'anuncio')->orderBy('created_at', 'desc')->take(3)->get();
        $datos_slides = Publication::select('id','titulo', 'descripcion')->where('tipo' , 'anuncio')->orderBy('created_at', 'desc')->take(3)->get();
        //$cumpleanios = Publication::where('id', '=', $id);
        $anuncios = Publication::where('tipo', 'anuncio')->orderBy('created_at', 'desc')->get();
        //$anuncios = Publication::paginate(5);
        $documentos = Publication::where('tipo', 'documento')->orderBy('created_at', 'desc')->get();

        //$cumpleanios = DB::connection('sqlsrv')->table('nEmpleados')->get();
        /*$cumpleanios2 = DB::connection('sqlsrv')->select("SELECT day(FechaNac) Dia , E.Nombre1 +' '+ E.Apellido1+' '+  E.Apellido2 AS Empleado
        FROM nEmpleados E
        JOIN nContratos C ON E.IdEmpleado=C.IdEmpleado
        WHERE MONTH(FechaNac)= '06' AND C.Activo='1'
        ORDER BY Dia");*/
        $cumpleanios = $this->conectarSqlServer();
        return view('principal.index', compact('anuncios', 'datos_slides', 'imagenes_slides', 'documentos', 'cumpleanios'));
        //return response()->json($cumpleanios);
    }

    public function show($id){

        $anuncio = Publication::where('id', $id)->get();
        return view('principal.anuncios.anuncio-detalle', compact('anuncio'));


    }

}
