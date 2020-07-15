@extends('layouts.app')

@section('content')
<h1>{{$playerData->name}}</h1>
<h1>{{$playerData->clan->name}}</h1>
<h1>{{$playerData->role}}</h1>
<h1>{{$playerData->wins}}</h1>
<h1>{{$playerData->losses}}</h1>
<h1>{{$playerData->expLevel}}</h1>
<h1>{{$playerData->threeCrownWins}}</h1>
<h1>{{$playerData->warDayWins}}</h1>

<h1>{{$playerData->battleCount}}</h1>


@endsection