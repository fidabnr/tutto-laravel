@extends('base')

    @section('content')

    <img src="{{asset ('img/FlagTunisia.png')}}"alt="Tunisia Flag" class="mt-12 rounded shadow-md h-32">
    
        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello From Tunisia !!</h1>
        <p class="text-lg text-gray-800">it's currently {{date('h:i A')}} </p>
        
    @endsection


