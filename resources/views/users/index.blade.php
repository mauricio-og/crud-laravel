@extends('layouts.master')
@section('main')

<div class="row">
    <div class="col-md-12">
        <h5 class="text-secondary">Usuários</h5>
        <hr>
    </div>
</div>

<div class="row mb-4">
    <div class="cool-md-12 d-flex justify-content-end">
        <a href="{{ route('users.create') }}" class="btn btn-sm btn-success">+ Novo Usuário</a>
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
                    <th>Código Usuário</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Dt. Cadastro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="{{ route('users.show', ['id' => $user->id]) }}" class="btn btn-sm btn-primary">Ver</a>
                        <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="{{ route('users.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
