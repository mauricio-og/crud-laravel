@extends('layouts.master')
@section('main')

<div class="row">
    <div class="col-md-12">
        <h5 class="text-secondary">Clientes</h5>
        <hr>
    </div>
</div>

<div class="row mb-4">
    <div class="cool-md-12 d-flex justify-content-end">
        <a href="{{ route('clients.create') }}" class="btn btn-sm btn-success">+ Novo Cliente</a>
    </div>
</div>

@if(session()->get('message'))
<div class="alert alert-success" role="alert">
    {{session()->get('message')}}
</div>
@endif
@if(session()->get('messageError'))
<div class="alert alert-danger" role="alert">
    {{session()->get('messageError')}}
</div>
@endif

<div class="row">
    <div class="cool-md-12">
        <table class="table table-light">
            <thead>
                <tr class="thead-light">
                    <th>Código Cliente</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Dt. Nascimento</th>
                    <th>Sexo</th>
                    <th>Dt. Criação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td class="text-uppercase">{{ $client->nome }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->telefone }}</td>
                    <td>{{ $client->data_nascimento }}</td>
                    <td class="text-uppercase">{{ $client->sexo }}</td>
                    <td>{{ $client->created_at }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Ver</a>
                        <a href="#" class="btn btn-sm btn-warning">Editar</a>
                        <a href="#" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
