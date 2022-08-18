@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $tarefa->tarefa }}</div>

                <div class="card-body">
                    <fieldset disable> @php /*desativando o input*/ @endphp
                        <div class="mb-3">
                            <label class="">Data limite conclusão</label>
                            <input type="date" value="{{ $tarefa->data_limite_conclusao }}">
                        </div>
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
