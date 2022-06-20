@extends('base')

 @section('title' , 'About us | '.env('APP_NAME'))

    @section('content')

    <img src="/img/logo.png"alt="logo" class="my-12 rounded-full shadow-md">
        <h2 class="mb-5 text-gray-700">Built by <span class="text-pink-500">&hearts;</span> 
        Fida Bannour</h2>
     
        <p >
            <a href="{{route ('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">
                Revenir à la page d'aceuil</a>
            </p>

            
    @endsection


