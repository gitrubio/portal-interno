<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicationController;
use App\Models\Publication;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index(){
        //
        $imagenes_slides = Publication::select('imagen')->orderBy('created_at')->take(3)->get();
        $datos_slides = Publication::select('id','titulo', 'descripcion')->orderBy('created_at')->take(3)->get();
        //$cumpleanios = Publication::where('id', '=', $id);
        $anuncios = Publication::where('tipo', 'anuncio')->orderBy('created_at', 'desc')->get();
        //$anuncios = Publication::paginate(5);
        $documentos = Publication::where('tipo', 'documento')->orderBy('created_at', 'desc')->get();
        
        //$cumpleanio = DB::connection('sqlsrv')->table('nEmpleados')->get();
        /*$cumpleanios = DB::connection('sqlsrv')->select("SELECT day(FechaNac) Dia , E.Nombre1 +' '+ E.Apellido1+' '+  E.Apellido2 AS Empleado
        FROM nEmpleados E
        JOIN nContratos C ON E.IdEmpleado=C.IdEmpleado
        WHERE MONTH(FechaNac)= '6' AND C.Activo='1'
        ORDER BY Dia");*/
        
        return view('principal.index', compact('anuncios', 'datos_slides', 'imagenes_slides', 'documentos'));
        //return response()->json($cumpleanio);
    }
}
