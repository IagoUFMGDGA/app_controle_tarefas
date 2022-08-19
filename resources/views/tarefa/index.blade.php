@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Adicionar Tarefa 
                    <a href="{{ route('tarefa.create')}} " class="float-right"> Novo </a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data Limite</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarefas as $key => $tarefa)
                                <tr>
                                    <td>{{ $tarefa['id'] }}</td>
                                    <td>{{ $tarefa['tarefa'] }}</td>
                                    <td>{{ date('d/m/Y', strtotime( $tarefa['data_limite_conclusao'] )) }}</td>
                                    <td><a href="{{ route('tarefa.edit', $tarefa['id']) }}"> Editar </a></td>
                                    <td>
                                        <form id="form_{{$tarefa->id}}" 
                                            method="post"
                                            action="{{ route('tarefa.destroy', ['tarefa' => $tarefa->id]) }}"
                                        > 
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <a href="#" onclick="document.getElementById('form_{{$tarefa->id}}').submit()"> Excluir </a>
                                    </td>
                                </tr>
                            @endforeach
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $tarefas->previousPageUrl()}}"> Voltar </a>    
                                    </li>
                                    
                                    @for( $i = 1; $i <= $tarefas->lastPage(); $i++ )
                                        <li class="page-item {{ $tarefas->currentPage() == $i? 'active' : ''}} ">
                                            <a class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    <li class="page-item">
                                        <a class="page-link" href="{{ $tarefas->nextPageUrl() }}">  Avançar </a>
                                    </li>
                                </ul>
                            </nav>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection