<?php

namespace App\Http\Controllers; 

use App\Models\Birthday;
use Illuminate\Http\Request;

class BirthdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $datos_cumpleanios = $request->except('_token');
        
        $validatedData = $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:6144',
                
        ]);

        if($request->hasFile('foto')){ 
            $datos_cumpleanios['foto'] = request()->file('foto')->store('uploads', 'public');

        }
        
        //Publication::insert($datos_publicacion);
        Birthday::create($datos_cumpleanios);
      //  return response()->json($datos_cumpleanios);

        return redirect('publication')->with('mensaje', 'Cumpleaños creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Http\Response
     */
    public function show(Birthday $birthday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Http\Response
     */
    public function edit(Birthday $birthday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Birthday $birthday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Birthday $birthday)
    {
        //
    }
}
