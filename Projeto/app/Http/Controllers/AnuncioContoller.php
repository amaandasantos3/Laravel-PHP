<?php

namespace App\Http\Controllers;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;
Use App\Anuncio;

class AnuncioContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
    public function store(Request $request, ImageRepository $repo)
    {
        $anuncio = new Anuncio;
        $anuncio->titulo        = $request->titulo;
        $anuncio->descricao     = $request->descricao;
        $anuncio->valor         = $request->valor;
        $anuncio->rua           = $request->rua;
        $anuncio->bairro        = $request->bairro;
        $anuncio->cep           = $request->cep;
        $anuncio->cidade        = $request->cidade;
        $anuncio->estado        = $request->estado;
        $anuncio->telefone      = $request->telefone;
     
        $anuncio->save();

        $anuncio = Anuncio::create($request->except('primaryImage'));

        if ($request->hasFile('primaryImage')) {
            $product->path_image = $repo->saveImage($request->primaryImage, $product->id, 'anuncios', 250);
         }
         
         return redirect()->route('anuncio.home')->with('message', 'Anúncio salvo com sucesso!');
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
    }
}
