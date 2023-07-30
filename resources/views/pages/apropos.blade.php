@extends('base')

@section('title', env('APP_NAME') . ' | a propos ')



@section('content')

    <img style=" width: 10%" src="/images/pic3.jpg" alt="photo 3">

    <p>Creer avec &hearts; par Jean claude SASSOU</p>

    

    <a href=" {{ route('home') }}">Revenir a la page d'accueil</a>
    
    
    <h1> Dans a propos</h1>

@endsection