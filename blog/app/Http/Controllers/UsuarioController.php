<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   

    {
    //    $dashboard = \App\Dashboard::all();

     //   return view("dashboard.index", compact('dashboard'));
    	  $usuario = \App\Usuario::all();

        return view("usuario.index", compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("usuario.create");
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Papers  $papers
     * @return \Illuminate\Http\Response
     */
  	 public function save(Request $request) {

        $a_result = ["error" => true, "msg" => "Categoria NO Guardada"];

        try{

            \App\Usuario::create([
                "num_publicaciones" => $request['num_publicaciones']
            ]);

            $a_result["msg"] = "Categoria guardada";
            $a_result["error"] = false;
        } catch (Exception $e) {
            
        }

        // return json_encode($a_result);
        return redirect("/usuario");
    }







    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Papers $papers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Papers $papers)
    {
        //
    }

       public function actualizar (Request $request) {
        $usuario = Usuario::find($request["id"]);
        $num_publicaciones->num_publicaciones = $request["num_publicaciones"];
        $num_publicaciones->save();

        return redirect("/usuario");
    }
}

