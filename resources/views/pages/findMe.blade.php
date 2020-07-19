@extends('layouts.app')

@section('content')
<h1>{{$playerData->name}}</h1>
<h1>{{$playerData->clan->name}}</h1>
<h1>{{$playerData->clan->tag}}
<h1>{{$playerData->role}}</h1>
<h1>{{$playerData->wins}}</h1>
<h1>{{$playerData->losses}}</h1>
<h1>{{$playerData->expLevel}}</h1>
<h1>{{$playerData->threeCrownWins}}</h1>
<h1>{{$playerData->warDayWins}}</h1>

<h1>{{$playerData->battleCount}}</h1>
<!--this is to find past battle data for a player-->
<h1>{{$battlesData[0]->type}}</h1>

<!--this is to find the next chests that the player will obtain
    in the game -->

<h1>{{$chests->items[0]->name}}</h1>

@endsection