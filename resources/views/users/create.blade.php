@extends('layouts.master')
@section('main')

<div class="row">
    <div class="col-md-12">
        <h5 class="text-secondary">Cadastrar Usuário</h5>
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

                <form action="{{ route('users.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nome">Nome*</label>
                                <input type="text" name="name" class="form-control" required placeholder="Digite um nome...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" name="email" class="form-control" required placeholder="Digite um email...">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="senha">Senha*</label>
                                <input type="password" name="password" class="form-control" required placeholder="Digite uma senha...">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="senha">Confirmar senha*</label>
                                <input type="password" name="confirm_password" class="form-control" required placeholder="Confirme sua senha...">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="cool-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>




@endsection
