<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Matérias</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>

            <a href="/sobrenos" class="logo"><i class="ri-booklet-fill"></i><span>Organiza Aê</span></a>
            <a href="#" class="btn"><i class="ri-calendar-fill"></i></a>
            <div class="main" id="divperfil">

                <a data-bs-toggle="offcanvas" id="perfilft" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="user"><img src="/storage/{{ session()->get('estudante')->foto_perfil }}" alt="" srcset="" width="40px" height="40px"><span> {{ session()->get('estudante')->nome }} </span></a>
                <!-- <a href="./cadastrar" class="user"><i class="ri-login-box-fill"></i><span>Registrar</span></a> -->
            </div>

        </nav>
    </header>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Organiza Aê</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
              Ações
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Editar dados</a></li>
              <li><a class="dropdown-item" href="#">#</a></li>
              <li><a class="dropdown-item" href="/deslogar">Deslogar</a></li>
            </ul>
          </div>
        </div>
      </div>
    <main id="slider">
        <section class="materias">

            <div class="container">
                <div class="content">
                    <div class="card">
                        <div class="card-content">
                            <div class="image">
                                <img src="../../imagens/vecteezy_children-illustration_wk0321_generated.jpg" alt="">
                            </div>
                        </div>
                        <div class="icons-materias">
                            <i class="ri-checkbox-circle-fill"></i>
                           
                        </div>
                        <div class="name-materia">
                            <div class="name">Português</div>
                        </div>
                        <div class="button">
                            <button class="entrar">Entrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>