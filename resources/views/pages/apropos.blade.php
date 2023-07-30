@extends('base')

@section('title', env('APP_NAME') . ' | a propos ')



@section('content')

    <p>Creer avec &hearts; par Jean claude SASSOU</p>

    <a href=" {{ route('home') }}">Revenir a la page d'accueil</a>
    <h1> Dans a propos</h1>

@endsection