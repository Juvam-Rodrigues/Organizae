<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar estudante</h1>
    <form action="/estudantes" method="post">
        {{ csrf_field() }}
        email
        <input id="email" name="email" type="email">

        nome
        <input id="name" name="name" type="text">

        senha
        <input id="password" name="password" type="password">

        confirmar senha
        <input id="confirm_password" name="confirm_password" type="password">
        <input type="submit">
    </form>
</body>
</html>