<?php

namespace App\Http\Controllers;

use App\Papers;
use Illuminate\Http\Request;

class PapersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $papers = \App\Papers::where('creado_por_id', \Auth::user()->id)->get();

        return view("papers.index", compact('papers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("papers.create");
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

            $paper = new \App\Papers([
                "titulo" => $request['titulo'],
                "link_investigacion" => $request['link_investigacion']
            ]);

            $paper->creado_por_id = \Auth::user()->id;

            $paper->save();

            $a_result["msg"] = "Categoria guardada";
            $a_result["error"] = false;
        } catch (Exception $e) {
            
        }

        // return json_encode($a_result);
        return redirect("/dashboard");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */

    public function show(Papers $papers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function edit(Papers $papers)
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
        $papers = Categoria::find($request["id"]);
        $papers->titulo = $request["titulo"];
        $papers->save();

        return redirect("/papers");
    }
}
