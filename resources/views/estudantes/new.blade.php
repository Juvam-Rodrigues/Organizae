<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

            <a href="/sobrenos" class="logo"><i class="ri-booklet-fill"></i><span>Organiza Aê</span></a>

            <div class="main">
                <a href="/" class="user"><i class="ri-user-3-fill"></i><span>Login</span></a>
                <a href="/registro" class="user"><i class="ri-login-box-fill"></i><span>Registrar</span></a>
            </div>
        </nav>
    </header>
    <main>
        <div class="content">
            @if (session()->has('msg'))
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                Dados inseridos incorretamente!
                <button type="button" class="btn-close p-1 m-0" data-bs-dismiss="alert" aria-label="Close" style="margin-top: 2px"></button>
              </div>
            @endif
            <form action="/registro" method="post" id="form-login" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1>Registro</h1>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                <input type="email" name="email" id="email" placeholder="Digite seu email">
                <input type="file" name="foto_perfil" id="foto-perfil" placeholder="Insira a foto de perfil" accept="image/*">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>