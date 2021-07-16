<?php

namespace App\Http\Controllers; 

use App\Models\Birthday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BirthdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $cumpleanios = Birthday::all();
        return view('birthday.index',compact('cumpleanios'));
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
    public function edit($id)
    {
        $birthday = Birthday::findOrFail($id);
        return view('birthday.edit', compact('birthday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

        //return view('publication.index',compact('datos'));

        $datos_cumpleanio = $request->except(['_token', '_method']); 

        if($request->hasFile('foto')){
            $birthday = Birthday::findOrFail($id);

            Storage::delete('public/'.$birthday->foto);

            $validatedData = $request->validate([
                'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:6144',

            ]);

            $datos_cumpleanio['foto'] = request()->file('foto')->store('uploads', 'public');


        }
        Birthday::where('id', '=', $id)->update($datos_cumpleanio);

        $birthday = Birthday::findOrFail($id);
        //return view('publication.edit', compact('publication'));
        //$datos = Publication::paginate(5);
        return redirect('birthday')->with('mensaje','cumpleaños editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Birthday::destroy($id);

        return redirect('birthday')->with('mensaje','Cumpleaños borrado');
    }
}
