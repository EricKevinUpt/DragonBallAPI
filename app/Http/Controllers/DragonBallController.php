<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saga;
use App\Models\Character;

class DragonBallController extends Controller
{
    public function index()
    {
        $data = [
            'character' => 'Se ingresa mediante /api/character y devuelve un json con el nombre de los personaje',
            'saga' => 'Se ingresa mediante /api/sagas y devuelve un json con el nombre de las sagas',
            'Buscar personaje' => 'Se ingresa mediante /api/character/{id} y devuelve un json con el nombre del personaje',
            'Buscar saga' => 'Se ingresa mediante /api/saga/{id} y devuelve un json con el nombre de la saga',
        ];
        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }
    public function character(){
        // obtener el id name description y avatar de cada personaje
        $characters = Character::all();
        return response()->json($characters, 200, [], JSON_PRETTY_PRINT);
    }

    public function saga(){
        // obtener el id name description e imagen de cada Saga
        $sagas = Saga::all();
        return response()->json($sagas, 200, [], JSON_PRETTY_PRINT);
    }

    //buscar un personaje por id
    public function findCharacter($id){
        $character = Character::find($id);
        if(!$character){
            return response()->json(['mensaje' => 'No se encontro el personaje'], 404);
        }
        return response()->json($character, 200, [], JSON_PRETTY_PRINT);
    }

    //buscar una saga por id
    public function findSaga($id){
        $saga = Saga::find($id);
        if(!$saga){
            return response()->json(['mensaje' => 'No se encontro la saga'], 404);
        }
        return response()->json($saga, 200, [], JSON_PRETTY_PRINT);
    }
}
