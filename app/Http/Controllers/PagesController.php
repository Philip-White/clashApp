<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Edbizarro\ClashRoyale\Player;
use Edbizarro\ClashRoyale\Api;


class PagesController extends Controller
{
    //

    public function index(){
        //This is the api token taken from the app.php file
        //Where the token is made into a constant...
        $apiToken = config('app.apiToken');

        Api::setApiToken($apiToken);

        $player = new Player('#P0RUVLG82');
        $player = $player->get();

        //This is where we decode the the json data so we can use it
        $playerData = json_decode($player); // decode the JSON feed


        

        
        return view('pages.index')->with('playerData', $playerData);
    }
}
