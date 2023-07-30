@extends('base')

@section('title', env('APP_NAME') . ' | a propos ')



@section('content')

    <img style="height:200px width: 200px" class="my-12 rounded-full shadow-md h-32"  src="  {{ asset('/images/pic3.jpg') }}  " alt="photo 3">

    <p class="mb-5 text-gray-700">
        Creer avec <span class="text-pink-500">&hearts;</span> par Jean claude SASSOU</p>

    

    <a class="text-indigo-500 hover:text-indigo-600 underline" href=" {{ route('home') }}">
        Revenir a la page d'accueil
    </a>
    
    

@endsection