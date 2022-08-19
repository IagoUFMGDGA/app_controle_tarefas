@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @auth
                <h1> Usuário autenticado </h1>
                <p> ID: {{ Auth::user()->id }} </p>
                <p> Nome: {{ Auth::user()->name }} </p>
                <p> E-mail: {{ Auth::user()->email }} </p>
            @endauth

            @guest
                <h1> Bem-vindo, visitante </h1>
                <p>...</p>
                <p>...</p>
                <p>...</p>
            @endguest
                    
        </div>
    </div>
</div>
@endsection
