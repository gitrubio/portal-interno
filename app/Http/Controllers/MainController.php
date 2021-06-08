<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicationController;
use App\Models\Publication;

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

        return view('principal.index', compact('anuncios', 'datos_slides', 'imagenes_slides', 'documentos'));
        //return response()->json($datos_slides);
    }
}
