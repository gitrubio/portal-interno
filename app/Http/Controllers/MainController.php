<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicationController;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;
use DateTime;

class MainController extends Controller
{
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
        $mes_actual = date('m');
        $dia_actual = date('d');
        
        $imagenes_slides = Publication::select('imagen')
                                        ->where([['tipo','=','anuncio'],['fecha_inicio','<=',$fecha],['fecha_fin', '>',$fecha]])
                                        ->orderBy('created_at')
                                        ->take(3)
                                        ->get();
        
        $datos_slides = Publication::select('id','titulo', 'descripcion', 'link')
                                    ->where([['tipo','=','anuncio'],['fecha_inicio','<=',$fecha],['fecha_fin', '>',$fecha]])
                                    ->orderBy('created_at')
                                    ->take(3)
                                    ->get();
        
        $anuncios = Publication::where('tipo', 'anuncio')->orderBy('created_at')->get();
        
        $documentos = Publication::where('tipo', 'documento')->orderBy('created_at')->get();
        
        $consulta_cumpleanios = "SELECT day(FechaNac) Dia , E.Nombre1 +' '+ E.Apellido1+' '+  E.Apellido2 AS Empleado
            FROM nEmpleados E
            JOIN nContratos C ON E.IdEmpleado=C.IdEmpleado
            WHERE MONTH(FechaNac)= $mes_actual AND C.Activo='1'
            ORDER BY Dia";
              
        $cumpleanios = DB::connection('sqlsrv')->select($consulta_cumpleanios);
        $cumpleanieros_hoy = $this->buscarCumpleaniosHoy($cumpleanios);
        $cumpleaños_fotos = Publication::select('')->where('tipo','cumpleanios');
        //$numero = count($cumpleanieros);
        
        
        return view('principal.index', compact('anuncios', 'datos_slides', 'imagenes_slides', 'documentos', 'cumpleanieros_hoy', 'cumpleanios', 'mes'));
        //return response()->json($cumpleanieros);
    }

    public function show($id){

        $anuncio = Publication::select('titulo','descripcion','contenido','imagen','link', 'created_at')->where('id', $id)->first();
        return view('principal.anuncios.anuncio-detalle', compact('anuncio'));
        //return response()->json($anuncio);

    }

    public function buscarCumpleaniosHoy($todos_cumpleanios){

        $dia_actual = 12;
        $numero_cumpleanieros = 0;
        foreach($todos_cumpleanios as $cumpleanio){

            if ($cumpleanio->Dia == $dia_actual ){

                $cumpleanieros[$numero_cumpleanieros] = $cumpleanio->Empleado;
                $numero_cumpleanieros += 1;
            }

        }

        return $cumpleanieros;

    }

    
}
