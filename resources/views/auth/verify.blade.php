@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Quase lá! Verifique seu endereço de e-mail</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Enviamos novamente o e-mail de verificação
                        </div>
                    @endif

                    Antes de continuar, por segurança valide seu e-mail pelo link que enviamos 
                    <br>
                    Se você não recebeu o e-mail,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">click aqui para enviarmos outro</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
