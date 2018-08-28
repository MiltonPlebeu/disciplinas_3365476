<a href="/disciplinas/create"><h1>Cadastrar disciplina</h1></a>
    <ul>
    @foreach ($disciplinas as $disciplina)
        <li>
            <a href="/disciplinas/{{ $disciplina->id }}">
                {{ $disciplina->titulo }} 
            </a>
            <br>
            <a href="/disciplinas/{{ $disciplina->id }}/edit"> Editar </a>
        </li>
    @endforeach
    </ul>
