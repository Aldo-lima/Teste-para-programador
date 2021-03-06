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
        <th scope="col">detales</th>
    </tr>
    </thead>
    <tbody>
        @forelse ($fornecedores as $fornecedor)
            <tr>
                <th scope="row">{{$fornecedor->nome_fantasia}}</th>
                <td>{{$fornecedor->apelido}}</td>
                <td>{{$fornecedor->cnpj_cpf}}</td>
                <td>{{$fornecedor->ativo}}</td>
               
                <td>
                    <form action="{{route('fornecedor.edit', $fornecedor->id)}}"  method="post">
                        @csrf
                        @method('GET')
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                        </button>
                    </form>
               </td>
               <td>
                 <form action="{{route('fornecedor.destroy',$fornecedor->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg>
                </button>
            </form>
               
               
               
               
                

            </tr>
            @empty
        @endforelse
    </tbody>
</table>
@section('conteudo-Secudario')
@endsection


