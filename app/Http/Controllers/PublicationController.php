<?php

namespace App\Http\Controllers; 

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Photo;

class PublicationController extends Controller 
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = Publication::paginate(5);
        return view('publication.index',compact('datos'));
        //$publications = Publication::latest()->paginate(5);

        //return view('publication.index', compact('publications'))
         //   ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('publication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datos_publicacion = $request->except('_token');
        
        $validatedData = $request->validate([
            'imagen' => 'image|mimes:jpg,png,jpeg,gif,svg|max:6144',
            'video' => 'mimes:mp4,mov,ogg,qt|max:204800',
            'documento' => 'mimes:txt,doc,docx,xls,xlsx,pdf|max:20480',
    
        ]);

        if($request->hasFile('imagen')){ 
            $datos_publicacion['imagen'] = request()->file('imagen')->store('uploads', 'public');

        }
        if($request->hasFile('video')){
            $datos_publicacion['video'] = request()->file('video')->store('uploads', 'public');

        }
        if($request->hasFile('documento')){
            $datos_publicacion['documento'] = request()->file('documento')->store('uploads', 'public');

        }
        //Publication::insert($datos_publicacion);
        Publication::create($datos_publicacion);
        //return response()->json($datos_publicacion);

        return redirect('publication')->with('mensaje', 'Publicación creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $anuncio = Publication::select('titulo','descripcion', 'contenido','imagen','link', 'created_at')->where('id', $id)->first();
        return view('principal.anuncios.anuncio-detalle', compact('anuncio'));
        //return response()->json($anuncio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $publication = Publication::findOrFail($id);
        return view('publication.edit', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return view('publication.index',compact('datos'));

        $datos_publicacion = $request->except(['_token', '_method']);

        if($request->hasFile('imagen')){
            $publication = Publication::findOrFail($id);
            
            Storage::delete('public/'.$publication->imagen);
            
            $validatedData = $request->validate([
                'imagen' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:6144',
        
            ]);
            
            $datos_publicacion['imagen'] = request()->file('imagen')->store('uploads', 'public');
            

        }
        Publication::where('id', '=', $id)->update($datos_publicacion);

        $publication = Publication::findOrFail($id);
        //return view('publication.edit', compact('publication'));
        //$datos = Publication::paginate(5);
        return view('publication.edit', compact('publication'))->with('mensaje','Publicación editada');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Publication::destroy($id);

        return redirect('publication')->with('mensaje','Publicación borrada');
    }
}
