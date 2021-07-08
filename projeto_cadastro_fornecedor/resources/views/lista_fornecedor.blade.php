@extends('base')
@section('conteudo-principal')
<a href="{{route('fornecedor.create')}}"><button type="button" class="btn btn-primary">+ Cadastrar</button></a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">nome</th>
        <th scope="col">Fornecedor</th>
    </tr>
    </thead>
    <tbody>
        @forelse ($fornecedores as $fornecedor)
            <tr>
                <th scope="row">{{$fornecedor->id}}</th>
                <td>{{$fornecedor->nome_fantasia}}</td>
                <td>{{$fornecedor->ativo}}</td>
            </tr>
            @empty
        @endforelse
    </tbody>
</table>
@section('conteudo-Secudario')
@endsection


