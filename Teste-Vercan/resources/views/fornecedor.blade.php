@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <h1>formulario</h1>
@stop

@section('content')
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Cadastro de fornecedor</a>
     <a href="{{route('pfornecedor.create')}}"> <button type="button" class="btn btn-success">+ Cadastrar</button></a>
    </div>
  </nav>
    <div  class="row" style="background-color: #fff;">
        <div class="col-sm-10">
    <table class="table" >
        <thead>
          <tr>
            <th scope="col">Razão Social/nome</th>
            <th scope="col">NomeFantasia/Apelido</th>
            <th scope="col">CNPJ/CPF</th>
            <th scope="col">Ativo</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($fornecedores as $fornecedor)
          <tr>
            <th scope="row">{{$fornecedor->razaosocial}}</th>
            <td>{{$fornecedor->nome_fantasia}}</td>
            <td>{{$fornecedor->cnpj_cpf}}</td>
            <td>{{$fornecedor->ativo}}</td>

          </tr>
          @empty
          @endforelse
        </tbody>
      </table>
    </div>
@stop
@section('css')
   <link rel="stylesheet" href="/css/admin_custom.css">
<style>

</style>
   @stop

@section('js')

<script>


</script>
@stop
