<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Matérias</title>
</head>

<body>
    <header>
        <nav>

            <a href="/sobrenos/logado" class="logo"><i class="ri-booklet-fill"></i><span>Organiza Aê</span></a>
            <a href="/calendario" class="btn"><i class="ri-calendar-fill"></i></a>
            <div class="main" id="divperfil">

                <a data-bs-toggle="offcanvas" id="perfilft" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="user"><img src="/storage/{{ session()->get('estudante')->foto_perfil }}" alt="" srcset="" width="40px" height="40px" style="margin-right: 5px"> <span> {{ session()->get('estudante')->nome }} </span></a>
                <!-- <a href="./cadastrar" class="user"><i class="ri-login-box-fill"></i><span>Registrar</span></a> -->
            </div>

        </nav>
    </header>
    <div class="offcanvas offcanvas-start sidebar" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header" style="padding-bottom: 0.3%; margin-bottom: 0.3%;">
          <h5 class="offcanvas-title logo" id="offcanvasExampleLabel"><i class="ri-booklet-fill"></i>Organiza Aê</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="padding-top: 0%; margin-top: 0%;">
          <div class="dropdown mt-3" id="espaco">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
              Usuário
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Editar dados</a></li>
              <li><a class="dropdown-item" href="#">#</a></li>
              <li><a class="dropdown-item" href="/deslogar">Deslogar</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="materias">
        <div class="container">
            <section class="main">
                <div class="content">
                    
                    @foreach(session()->get('estudante')->materias()->get() as $materia)
                    <!-- modelo do card -->
                
                    <div class="card">
                        <div class="icones-card-materia">
                            <form action="/materias/deletar/{{$materia->id}}" id="form_lixeira" method="post">
                                {{csrf_field()}}
                                @method('DELETE')
                                <button type="submit" id="iconelixeira"><i class="ri-delete-bin-7-fill"></i></button>
                                
                            </form>
                            
                            
                        </div>
                        <div class="icone-lapis" id="iconelapis">
                            <button class="butao_pencil" data-bs-toggle="modal" data-bs-target="#modal_pencil_{{ $materia->id }}"><i class="ri-pencil-fill" id="pencil"></i></button>
                        </div>
                        <div class="modal fade" id="modal_pencil_{{ $materia->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-black">Editar Matéria</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="/materias/editar/{{$materia->id}}" method="post">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    
                                    <div class="modal-body">
                                        <label for="novo_materia" style="color: black">Insira o novo nome da matéria:</label>
                                        <input type="text" class="form-control" id="novo_materia" name="nome_novo">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        <!-- conteúdo do card -->
                        <div class="card-content">
                            <!-- imagem do card -->
                            <div class="image">
                                <img src="./imagens/vecteezy_children-illustration_wk0321_generated.jpg" alt="">
                            </div>
                        </div>
    
                        <!-- nome do card matéria -->
                        <div class="nome-materia">
                            <div class="nome">{{ $materia->nome_da_materia }}</div>
                        </div>
                        <!-- botão do card matéria -->
                        <div class="botao">
                            <a class="btn-entrar" href="/materias/acessar/{{$materia->id}}">Acessar</a>
                        </div>
                    </div>
                    @endforeach
                    <div class="card" id="card-adicionar-materia">
                        <button type="button" id="botao-adicionar-materia" data-bs-toggle="modal" data-bs-target="#modal">
                            <!-- conteúdo do card -->
                            <div class="card-content">
                                <!-- imagem do card -->
                                <div class="image">
                                    <i class="ri-add-circle-fill"></i>
                                </div>
                            </div>
    
                            <!-- nome do card matéria -->
                            <div class="nome-materia">
                                <div class="nome">Adicionar Matéria</div>
                            </div>
                        </button>
                    </div>
                </div>
            </section>
            
        </div>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-black">Nova Matéria</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/materias/criar" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <label for="nome_materia" style="color: black">Insira o nome da nova matéria:</label>
                    <input type="text" class="form-control" id="nome_materia" name="nome">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Criar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>