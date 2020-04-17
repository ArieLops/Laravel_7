<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="">Nome do Usuário:</label>
        <input type="text" name="name">

        <label for="">E-mail:</label>
        <input type="email" name="email">

        <label for="">Senha:</label>
        <input type="password" name="password">

        <input type="submit" value="Cadastrar usuário">
    </form>
</body>
</html>