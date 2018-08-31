@extends('layouts.master')
@section('content')

<p>
    <a href="/disciplinas/create" class="btn btn-success"><h1>Cadastrar disciplina</h1></a>
</p>
    <ul>
<table class="table">
    <thead>
        <tr>
            <th>Nome da Disciplina</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($disciplinas as $disciplina)
        <tr>
            <td>
            <a href="/disciplinas/{{ $disciplina->id }}">
                {{ $disciplina->titulo }} 
            </a>
            </td>
            <td>
            <a href="/disciplinas/{{ $disciplina->id }}/edit">Editar</a>
            </td>
            <td>
            <form method="POST" action="/disciplinas/{{ $disciplina->id }}">
                {{ csrf_field() }} 
                {{ method_field('delete') }}
                <button type="submit">Apagar</button>
            </form>
        </td>
        </tr>
        @endforeach      
    </tbody>
</table>
@endsection
