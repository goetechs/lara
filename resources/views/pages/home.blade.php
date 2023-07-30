@extends('base')



@section('content')

    <img style=" height:200px width: 200px" class="mt-12 rounded-full shadow-md h-32"src="{{ asset('/images/pic5.jpg') }} " alt="photo 5">


    <h2 class="mt-5 text-5xl  font-semibold text-indogo-600"> 
        Bienvenue sur mon Webapp
    </h2>

    <p class=" text-lg text-gray-800"> Il est actuellement : {{ date('H:i ')}}</p>

@endsection