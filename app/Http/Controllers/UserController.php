<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $usuarios = User::all();
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
           'username' => 'required',
           'email' => 'required',
           'password' =>'required',
           'password_confirmation' => 'required|same:password'
           ]); 
        //

        $datos_usuario = $request->except('_token');
       /*  $password_no_cript = $datos_usuario['password'];
        $datos_usuario['password'] = bcrypt($password_no_cript); */
        //User::insert($datos_usuario);
        User::create($datos_usuario);
        
        //return response()->json($datos_usuario);

        return redirect('user')->with('mensaje', 'Usuario creado correctamente.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario')); 
        //return response()->json($usuario);
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(
             [
            'username' => 'required',
            'email' => 'required',
            'password' =>'required',
            'password_confirmation' => 'required|same:password'
            ]); 
         

            $datos_usuario = $request->except(['_token', '_method','password_confirmation']);
           /*  $password_no_cript = $datos_usuario['password'];
            $datos_usuario['password'] = bcrypt($password_no_cript); */
            User::where('id', '=', $id)->update($datos_usuario);
            $usuario = User::findOrFail($id);
         
    
        
        //return view('publication.edit', compact('publication'));
        //$datos = Publication::paginate(5);
        return redirect('user')->with('mensaje','Usuario editado');;
   
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::destroy($id);

        return redirect('user')->with('mensaje','Usuario borrado');
    }
}
