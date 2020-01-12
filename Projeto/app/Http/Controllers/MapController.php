<?php

namespace App\Http\Controllers;
Use App\Anuncio;
use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;

class MapController extends Controller
{   

public function map(Request $request, $id)
    {

        $anuncios = Anuncio::where('id', $id)->get();

        $config['center'] =  $anuncios->cidade;
        $config['zoom'] = '14';
        $config['map_height'] = '400px';

        $gmap = new GMaps();
        $gmap->initialize($config);
        $config->save();
     
        $map = $gmap->create_map();
        return view('map',compact('map'));
    }
}
