@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Tarefa</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data Limite</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarefas as $key => $tarefa)
                                <tr>
                                    <td>{{ $tarefa['id'] }}</td>
                                    <td>{{ $tarefa['tarefa'] }}</td>
                                    <td>{{ date('d/m/Y', strtotime( $tarefa['data_limite_conclusao'] )) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
