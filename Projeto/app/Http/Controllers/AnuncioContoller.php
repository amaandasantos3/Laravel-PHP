<?php

namespace App\Http\Controllers;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;
Use App\Anuncio;
use FarhanWazir\GoogleMaps\GMaps;

class AnuncioContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anuncios = Anuncio::all();
        return view('welcome', compact(['anuncios']));
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
       
        $path = $request->file('arquivo')->store('imagens','public');

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
        $anuncio->arquivo      =  $path;
     
        $anuncio->save();
        
        return redirect('/');

    }


  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anuncios = Anuncio::where('id', $id)->get();

        return view('ver', compact(['anuncios']));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anuncios = Anuncio::where('id', $id)->get();
        return view('editar',compact('anuncios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, ImageRepository $repo)
    {
        $anuncio = Anuncio::findOrFail($id);
        $path = $request->file('arquivo')->store('imagens','public');
        $anuncio->titulo        = $request->titulo;
        $anuncio->descricao     = $request->descricao;
        $anuncio->valor         = $request->valor;
        $anuncio->rua           = $request->rua;
        $anuncio->bairro        = $request->bairro;
        $anuncio->cep           = $request->cep;
        $anuncio->cidade        = $request->cidade;
        $anuncio->estado        = $request->estado;
        $anuncio->telefone      = $request->telefone;
        $anuncio->arquivo      =  $path;
        $anuncio->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anuncio = Anuncio::find($id);
        $anuncio->delete();
        
        return redirect('/');
    }

    public function map($id, $cidade)
    {
        $anuncios = Anuncio::where('id', $id or 'cidade', $cidade)->get();
        
        $config['center'] = $cidade ;
        $config['zoom'] = '18';
        $config['map_height'] = '400px';

        $gmap = new GMaps();
        $gmap->initialize($config);

        $marker['position'] = $cidade;
        $marker['infowindow_content'] = $cidade;

        $gmap->add_marker($marker);
        $map = $gmap->create_map();
        return view('map',compact('map'));
     
    }
}
