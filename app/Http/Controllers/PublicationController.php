<?php

namespace App\Http\Controllers; 

use App\Models\Publication;
use Illuminate\Http\Request;

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
        $datos_publicacion = request()->except('_token');
        
        if($request->hasFile('imagen')){
            $datos_publicacion['imagen'] = $request()->file('imagen')->store('uploads', 'public');

        }
        Publication::insert($datos_publicacion);
        return response()->json($datos_publicacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        //
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
        //

        $datos_publicacion = $request->except(['_token', '_method']);
        Publication::where('id', '=', $id)->update($datos_publicacion);

        $publication = Publication::findOrFail($id);
        return view('publication.edit', compact('publication'));
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

        return redirect('publication');
    }
}
