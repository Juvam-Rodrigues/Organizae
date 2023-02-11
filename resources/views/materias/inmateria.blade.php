<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylemateria.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Matérias</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/stylemateria.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

    <header>
        <nav>

            <a href="/sobrenos/logado" class="logo"><i class="ri-booklet-fill"></i><span>Organiza Aê</span></a>

            <div class="main">
                <a data-bs-toggle="offcanvas" id="perfilft" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="user"><img src="/storage/{{ session()->get('estudante')->foto_perfil }}" alt="" srcset="" width="40px" height="40px" style="margin-right: 5px"> <span> {{ session()->get('estudante')->nome }} </span></a>                
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
        
            <ul class="dropdown menu" style="list-style: none;">
              <li><a class="btn" style="background-color:#0D6EFD; margin-top:8px;" href="#">Editar dados</a></li>
              <li><a class="btn" style="background-color:#0D6EFD; margin-top:8px;" href="#">#</a></li>
              <li><a class="btn" style="background-color:#0D6EFD; margin-top:8px;" href="/deslogar">Deslogar</a></li>
            </ul>
          </div>
        </div>
      </div>

    <nav id="nav2">
        <div class="logo" id="nomemateria"> {{ $materia->nome_da_materia }} </div>
    </nav>

    

    <div class="card-anotacao">
        <div class="conteudo esquerda">
            <form action="/metas/criar" method="POST">
                {{ csrf_field() }}
                <div class="topo">
                    <input type="text" 
                        id="inputNovaTarefa"
                        placeholder="Adicione uma nova meta" name="nome_da_meta"
                        >
                        <input type="hidden" name="materia_id" value="{{ $materia->id }}">
    
                    <button type="submit" id="btnAddTarefa">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </form>
           
            @foreach($materia->metas()-> get() as $metas)
            <div class="card-anotacao-conteudo">
                <div class="titulo text-cemter">
                    <a class="btn" style="background-color: #0D6EFD; color:white;">{{ $metas->nome_da_meta }}</a>
                </div>
            </div>

            @endforeach
        </div>
        <div class="conteudo margin-left direita">
            <div >
                <!-- <div> -->
                    <button id="btnAddAnotacao" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Adicionar anotação
                    </button>
                <!-- </div> -->
            </div>
            @foreach($materia->anotacaos()-> get() as $anotacoes)
            <div class="card-anotacao-conteudo">
                <div class="titulo text-center">
                    <h1>{{ $anotacoes->titulo }}</h1>
                </div>
                <div class="texto text">
                    <p>{{ $anotacoes->corpo }}</p>
                </div>
            </div>
            
            @endforeach
        <div id="janelaEdicao">
            <button id="janelaEdicaoBtnFechar">
                <i class="fa fa-remove fa-2x"></i>
            </button>
            <h2 id="idTarefaEdicao">#1021</h2>
            <hr>
            <form>
                <div class="frm-linha">
                    <label for="nome">Nome</label>
                    <input type="text" id="inputTarefaNomeEdicao">
                </div>
                <div class="frm-linha">
                    <button id="btnAtualizarTarefa">Salvar</button>
                </div>
            </form>
        </div>
        <div id="janelaEdicaoFundo"></div>
    
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Matérias</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

</head>

<body>
        
        <div id="janelaEdicao">
            <button id="janelaEdicaoBtnFechar">
                <i class="fa fa-remove fa-2x"></i>
            </button>
            <h2 id="idTarefaEdicao">#1021</h2>
            <hr>
            <form>
                <div class="frm-linha">
                    <label for="nome">Nome</label>
                    <input type="text" id="inputTarefaNomeEdicao">
                </div>
                <div class="frm-linha">
                    <button id="btnAtualizarTarefa">Salvar</button>
                </div>
            </form>
        </div>
        <div id="janelaEdicaoFundo"></div>
    
        <!-- Scrollable modal -->
        <!-- Scrollable modal -->
        
    
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nome da anotação</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/anotacoes/criar" method="POST">
                            {{ csrf_field() }}
                        <div class="anotacao" id="ant">
                            <input type="hidden" name="materia_id" value="{{ $materia->id }}">
                            <label for="titulo" style="color: black">Insira o título da anotação:</label>
                            <input type="text" name="titulo" id="titulo">
                            <br>
                            <label for="corpo" style="color: black">Insira o corpo da anotação:</label>
                            <textarea name="corpo" id="ant" cols="50" rows="20" id="corpo"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>

</html>