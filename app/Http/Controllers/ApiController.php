<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    // public function inicio()
    // {
    //     return view('inicio');
    // }

    public function getDragonball(){
        
        $cliente = new \GuzzleHttp\Client();
        $resource = $cliente->request('GET', "https://api-dragonball.herokuapp.com/api/character");
        $resultado = json_decode($resource-> getBody()->getContents(), true);
        
        $personajes = [];

        foreach ($resultado as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'name' => $personaje['name'],
                'description' => $personaje['description'],
                'avatar' => $personaje['avatar']
            ];
        }

        $resource2 = $cliente->request('GET', "https://api-dragonball.herokuapp.com/api/saga");
        $resultado2 = json_decode($resource2-> getBody()->getContents(), true);

        $sagas = [];

        foreach ($resultado2 as $saga) {
            $sagas[] = [
                'id' => $saga['id'],
                'name' => $saga['name'],
                'description' => $saga['description'],
                'image' => $saga['image']
            ];
        }
        return view('inicio', ['personajes' => $personajes, 'sagas' => $sagas]);
    }
}