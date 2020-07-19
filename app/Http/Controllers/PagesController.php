<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Edbizarro\ClashRoyale\Player;
use Edbizarro\ClashRoyale\Api;
use Edbizarro\ClashRoyale\Clan;



class PagesController extends Controller
{
    //

    public function index(){
       return view('pages.index');
    }

    public function findMe(){
         //This is the api token taken from the app.php file
        //Where the token is made into a constant...
        $apiToken = config('app.apiToken');

        Api::setApiToken($apiToken);

        //$player = new Player('YOUR_TAG_HERE');
        //$player = $player->get();

        //This is where we decode the the json data so we can use it
        //$playerData = json_decode($player); // decode the JSON feed

        $playerSearch = $_POST['playerSearch'];


        //general player data
        $player = new Player($playerSearch);
        $player = $player->get();
        $playerData = json_decode($player);

        //player's next/"upcoming" chests
        $playerChest = new Player($playerSearch);
        $upcomingChests = $playerChest->upcomingChests();
        $chests = json_decode($upcomingChests);

        //player's battles info
        $playerBattles = new Player($playerSearch);
        $battles = $playerBattles->battles();
        $battlesData = json_decode($battles);



        
        
        
        return view('pages.findMe',['playerData' => $playerData, 'chests' => $chests, 'battlesData' => $battlesData]);
        

    }
}
