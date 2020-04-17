<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Editar Usuário</title>
</head>
<body>
    <form action="{{ route('users.edit', ['user' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome do Usuário:</label>
        <input type="text" name="name" value="{{ $user->name }}">

        <label for="">E-mail:</label>
        <input type="email" name="email" value="{{ $user->email }}">

        <label for="">Senha:</label>
        <input type="password" name="password">

        <input type="submit" value="Editar usuário">
    </form>
</body>
</html>