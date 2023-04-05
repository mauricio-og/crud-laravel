@extends('layouts.master')
@section('main')

<div class="row">
    <div class="col-md-12">
        <h5 class="text-secondary">Usuário - {{ $user->name }}</h5>
        <hr>
    </div>
</div>

<div class="row">
    <div class="cool-md-12">
        <div class="card">
            <div class="card-body">

                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" value="{{ $user->name }}" disabled name="name" class="form-control" required >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" value="{{ $user->email }}" disabled name="email" class="form-control" required >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="created_at">Dt. Criação</label>
                            <input type="text" value="{{ date('d/m/Y H:i', strtotime($user->created_at)) }}" disabled name="created_at" class="form-control" required >
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="cool-md-12 d-flex justify-content-end">
                            <a href="{{ route('users.index', ['id' => $user->id]) }}"  class="btn btn-sm btn-primary">Voltar</a>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>

</div>




@endsection
