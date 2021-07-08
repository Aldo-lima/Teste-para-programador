@extends('base')
@section('conteudo-principal')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">


        <form action="{{route('filtrar')}}" class="d-flex">
            @csrf
          <input class="form-control me-2" type="text" name="filter" placeholder="Nome Fornecedor" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">filtrar</button>
        </form>
      </div>
    </div>
  </nav>
<a href="{{route('fornecedor.create')}}"><button type="button" class="btn btn-primary">+ Cadastrar</button></a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Razão Social/Nome</th>
        <th scope="col">Fantasia/Apelido</th>
        <th scope="col">CNPJ/CEP</th>
        <th scope="col">Ativo</th>
    </tr>
    </thead>
    <tbody>
        @forelse ($fornecedores as $fornecedor)
            <tr>
                <th scope="row">{{$fornecedor->nome_fantasia}}</th>
                <td>{{$fornecedor->apelido}}</td>
                <td>{{$fornecedor->cnpj_cpf}}</td>
                <td>{{$fornecedor->ativo}}</td>
            </tr>
            @empty
        @endforelse
    </tbody>
</table>
@section('conteudo-Secudario')
@endsection


