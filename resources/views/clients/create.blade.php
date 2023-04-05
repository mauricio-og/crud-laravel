@extends('layouts.master')
@section('main')
<div class="row">
    <div class="col-md-12">
        <h5 class="text-secondary">Cadastrar Cliente</h5>
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

<form action="{{route('clients.store')}}" method="POST">

    @csrf

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">


                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">

                                <label for="nome">Nome*</label>
                                <input type="text" name="name" class="form-control text-uppercase " required placeholder="Digite um nome...">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">

                                <label for="email">Email*</label>
                                <input type="email" name="email" class="form-control" required placeholder="DIGITE UM EMAIL...">

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">

                                <label for="telefone">Telefone*</label>
                                <input type="number" name="phone" class="form-control" required placeholder="DIGITE UM NÉMERO DE TELEFONE...">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">

                                <label for="dt.nasc">Dt. Nascimento*</label>
                                <input type="date" name="date" class="form-control" required>

                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">

                                <label for="sexo">Sexo*</label>
                                <select name="sexo" class="form-control" required>
                                    <option>Selecione uma opção</option>
                                    <option value="masculino">MASCULINO</option>
                                    <option value="feminino">FEMININO</option>
                                </select>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-3">
            <h5 class="text-secondary">Endereço</h5>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">

                                <label for="cep">Cep*</label>
                                <input type="number" name="cep" class="form-control" required placeholder="DIGITE UM CEP...">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">

                                <label for="rua">Rua*</label>
                                <input type="text" name="rua" class="form-control  text-uppercase" required placeholder="DIGITE O NOME DA RUA...">

                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">

                                <label for="numero">Número*</label>
                                <input type="number" name="numero" class="form-control" required placeholder="NÚMERO DA RESIDÊNCIA...">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">

                                <label for="bairro">Bairro*</label>
                                <input type="text" name="bairro" class="form-control text-uppercase" required placeholder="DIGITE O NOME DO BAIRRO...">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <label for="cidade">Cidade*</label>
                                <input type="text" name="cidade" class="form-control text-uppercase" required placeholder="DIGITE O NOME DA CIDADE...">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">

                                <label for="estado">Estado*</label>
                                <input type="text" name="estado" class="form-control text-uppercase" required placeholder="DIGITE O NOME DO ESTADO...">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">

                                <label for="pais">País*</label>
                                <input type="text" name="pais" class="form-control text-uppercase" required placeholder="DIGITE O NOME DO PAÍS...">

                            </div>
                        </div>
                    </div>

                    <div class="row mb-4 mt-3">
                        <div class="cool-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



</form>

@endsection
