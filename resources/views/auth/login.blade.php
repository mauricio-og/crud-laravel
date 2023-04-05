<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>

<body class="bg-dark container" style="margin-top: 15%;">

    @if(session()->get('messageError'))
    <div class="alert alert-danger" role="alert">
        {{session()->get('messageError')}}
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('post.login')}}">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label for="email">E-mail*</label>
                                    <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail...">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label for="password">Senha*</label>
                                    <input type="password" name="password" class="form-control" placeholder="Digte sua senha...">
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-end mt-3">
                                <button class="btn btn-outline-dark" type="submit">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/boos=tstrap.js') }}"></script>
</body>

</html>
