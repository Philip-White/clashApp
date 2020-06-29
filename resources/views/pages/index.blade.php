@extends('layouts.app')

@section('content')
<h1>{{$playerData->name}}</h1>
<h1>{{$playerData->clan->name}}</h1>
@endsection