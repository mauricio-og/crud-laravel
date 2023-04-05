@extends('layouts.master')
@section('main')

<div class="row">
    <div class="col-md-12">
        <h5 class="text-secondary">Editar Usuário - {{ $user->name }}</h5>
        <hr>
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
        <div class="card">
            <div class="card-body">

                <form action="{{ route('users.update', ['id' => $user->id])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Nome*</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" required >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" required >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="senha">Senha*</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="cool-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-success">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>




@endsection
