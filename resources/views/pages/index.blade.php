@extends('layouts.app')

@section('content')
<h1>Search for a Player</h1>
{!! Form::open(['action' => 'PagesController@findMe', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('playerTag', 'Enter Player Tag')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => '', 'name' => 'playerSearch'])}}

    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}



@endsection