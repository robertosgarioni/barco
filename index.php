@extends('layout')

@section('cabecalho')
ALUGUEL DE BARCO
@endsection

@section('conteudo')
<a href="/barco/criar" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($barco as $barco)
    <li class="list-group-item">{{$barco ->nome }}

        <form method="post" action="/barco/{{ $barco->id }}"
                onsubmit="return confirm('Tem certeza?') ">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Excluir</button>
        </form>
    </li>
    @endforeach

</ul>
@endsection
