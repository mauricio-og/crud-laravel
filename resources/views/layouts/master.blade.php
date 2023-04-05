<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Laravel</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row mb-2 mt-2">
        <div class="col-md-12 d-flex justify-content-end">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-outline-danger" type="submit">Sair</button>
            </form>
        </div>
    </div>
@yield('main')
</div>

<script src="{{ asset('js/boos=tstrap.js') }}"></script>
</body>
</html>

