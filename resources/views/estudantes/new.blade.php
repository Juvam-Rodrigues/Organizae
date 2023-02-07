<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Registro</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>

            <a href="/index.html" class="logo"><i class="ri-booklet-fill"></i><span>Organiza Aê</span></a>

            <div class="main">
                <a href="/" class="user"><i class="ri-user-3-fill"></i><span>Login</span></a>
                <a href="/registro" class="user"><i class="ri-login-box-fill"></i><span>Registrar</span></a>
            </div>
        </nav>
    </header>
    <main>
        <div class="content">

            <form action="/registro" method="post" id="form-login">
                {{ csrf_field() }}
                <h1>Registro</h1>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                <input type="email" name="email" id="email" placeholder="Digite seu email">
                <input type="file" name="foto-perfil" id="foto-perfil" placeholder="Insira a foto de perfil">
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                <input type="password" name="confirmacao" id="senha-novamente" placeholder="Digite sua senha novamente">
                <button type="submit">Cadastrar</button>
            </form>

        </div>
        <div class="logo-user">
            <div class="icon-box"><i class="ri-booklet-fill"></i></div>
            <div class="titulo">

                <h2>Agenda do Estudante</h2>
                <div class="row">
                    <h3>Organiza-Aê</h3>

                </div>
            </div>
    </main>
</body>

</html>