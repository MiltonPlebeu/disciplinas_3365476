<ul>
@foreach ($disciplinas as $disciplina)
	<li><a href="/disciplinas/{{$disciplina->id}}"><h1>{{ $disciplina->titulo }}</h1></a></li>
@endforeach
</ul>
