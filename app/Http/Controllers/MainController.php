<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicationController;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;
use DateTime;

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

    public function obtenerNombreMesActual (){
            
        $mes_actual = date('F');

        switch ($mes_actual) {
            case 'January':
                $nombre_mes_actual = 'Enero';
                break;
            case 'February':
                $nombre_mes_actual = 'Febrero';
                break;    
            case 'March':
                $nombre_mes_actual = 'Marzo';
                break;    
            case 'April':
                $nombre_mes_actual = 'Abril';
                break;    
            case 'May':
                $nombre_mes_actual = 'Mayo';
                break;    
            case 'June':
                $nombre_mes_actual = 'Junio';
                break;    
            case 'July':
                $nombre_mes_actual = 'Julio';
                break;    
            case 'August':
                $nombre_mes_actual = 'Agosto';
                break;    
            case 'September':
                $nombre_mes_actual = 'Septiembre';
                break;    
            case 'October':
                $nombre_mes_actual = 'Octubre';
                break;    
            case 'November':
                $nombre_mes_actual = 'Noviembre';
                break;    
            case 'December':
                $nombre_mes_actual = 'Diciembre';
                break;    
                                                                                                                                                                                                                                                                                                 
            default:
                # code...
                break;
        }

        return $nombre_mes_actual;
    }


    public function index(){
        //
        $mes = $this->obtenerNombreMesActual();
        $date = new DateTime("now");
        $fecha = $date->format('Y-m-d');
        
        $imagenes_slides = Publication::select('imagen')
                                        ->where([['tipo','=','anuncio'],['fecha_inicio','<=',$fecha],['fecha_fin', '>',$fecha]])
                                        ->orderBy('created_at', 'desc')
                                        ->take(3)
                                        ->get();
        
        $datos_slides = Publication::select('id','titulo', 'descripcion', 'link')
                                    ->where([['tipo','=','anuncio'],['fecha_inicio','<=',$fecha],['fecha_fin', '>',$fecha]])
                                    ->orderBy('created_at', 'desc')
                                    ->take(3)
                                    ->get();
        
        $anuncios = Publication::where('tipo', 'anuncio')->orderBy('created_at', 'desc')->get();
        
        $documentos = Publication::where('tipo', 'documento')->orderBy('created_at', 'desc')->get();
        
        //$cumpleanios = DB::connection('sqlsrv')->table('nEmpleados')->get();
        
        $cumpleanios = $this->conectarSqlServer();
        return view('principal.index', compact('anuncios', 'datos_slides', 'imagenes_slides', 'documentos', 'cumpleanios', 'mes'));
        //return response()->json($datos_slides);
        //return response()->json($imagenes_slides);
    }

    public function show($id){

        $anuncio = Publication::select('titulo','descripcion','contenido','imagen','link', 'created_at')->where('id', $id)->first();
        return view('principal.anuncios.anuncio-detalle', compact('anuncio'));
        //return response()->json($anuncio);

    }

    
}
