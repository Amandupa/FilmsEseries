<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Films&Serie</title>
  <link rel="icon" type="image/png" href="img/logocerta.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.css" />

</head>

<body class="m-auto back naoseleciona">
  <nav class="navbar bg-dark navbar-expand-lg text-light fixa z-3">
    <div class="container-fluid w-75">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a href="site.php">
        <img src="img/logocerta.png" alt="Logo" width="60" height="50" />  
        </a>
        
        <ul class="navbar-nav me-auto">
          <li class="nav-item ms-5">
            <a class="navbar-brand cont myButton text-light" href="site.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand cont myButton text-light" href="oscar.php">Oscar</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand cont myButton  text-light" href="#filmes">Filmes</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand cont myButton  text-light" href="#series">Séries</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn text-dark btn-danger" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="img/filmescarrossel/callby.jpg" class="d-block w-100 h-100 imgcarousel img-fluid"
          alt="Call Me by Your Name">
        <div
          class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 p-5 custom-caption">
          <h1 class="fw-bold">Call Me by Your Name</h1>
          <p class="lead">Um romance arrebatador entre Elio e Oliver no verão italiano. Descubra essa história
            emocionante.</p>
          <a href="https://www.netflix.com/br/title/80169498?source=35" target="_blank" class="btn btn-danger btn-lg mt-2">Assistir Agora</a>
        </div>
      </div>

      <div class="carousel-item ">
        <img src="img/filmescarrossel/shrek2.webp" class="d-block w-100 h-100 imgcarousel img-fluid" alt="Shrek 2">
        <div
          class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 p-5 custom-caption">
          <h1 class="fw-bold">Shrek 2</h1>
          <p class="lead">Shrek e Fiona visitam os pais dela e enfrentam a Fada Madrinha e o Príncipe Encantado
            para provar que o amor verdadeiro vence qualquer aparência.</p>
          <a href="https://www.netflix.com/br/title/60034572?source=35" target="_blank" class=" btn btn-danger btn-lg mt-2">Assistir Agora</a>
        </div>
      </div>

      <div class="carousel-item ">
        <img src="img/filmescarrossel/horton.jpg" class="d-block w-100 h-100 imgcarousel img-fluid"
          alt="Horton e o Mundo dos Quem!">
        <div
          class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 p-5 custom-caption">
          <h1 class="fw-bold">Horton e o Mundo dos Quem!</h1>
          <p class="lead">Horton, um elefante gentil, descobre um minúsculo mundo habitado pelos Quem em um grão de
            pó e faz de tudo para protegê-lo.
            </p>
          <a href="https://www.disneyplus.com/pt-br/browse/entity-50a24b09-a5b6-49d1-b16a-a5af21c19f9d?distributionPartner=google" target="_blank" class=" btn btn-danger btn-lg mt-2">Assistir Agora</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/filmescarrossel/comoperder.jpg" class="d-block w-100 h-100 imgcarousel img-fluid"
          alt="Como Perder um Homem em 10 Dias">
        <div
          class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100  p-5 custom-caption">
          <h1 class=" fw-bold">Como Perder um Homem em 10 Dias</h1>
          <p class="lead">Uma comédia romântica divertida entre uma jornalista e um publicitário. Prepare-se para
            rir!</p>
          <a href="https://www.primevideo.com/dp/amzn1.dv.gti.baa9f663-73a4-7d25-5556-37a53c45d1fc?autoplay=0&ref_=atv_cf_strg_wb" target="_blank"   class=" btn btn-danger btn-lg mt-2">Assistir Agora</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/filmescarrossel/escolhaperfeita2.jpg" class="d-block w-100 h-100 imgcarousel img-fluid"
          alt="A Escolha Perfeita">
        <div
          class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100  p-5 custom-caption">
          <h1 class=" fw-bold">A Escolha Perfeita</h1>
          <p class="lead">As Bellas estão de volta com mais músicas e desafios em competições de tirar o fôlego!</p>
          <a href="https://www.netflix.com/br/title/70244166?source=35" target="_blank" class=" btn btn-danger btn-lg mt-2">Assistir Agora</a>
        </div>
      </div>
    </div>
  </div>
  <main class="w-75 m-auto pt-3">
    <div class="row">




      <div id="filmes" class="text-center pt-5">
        <h1 class="fw-bold display-1">Filmes</h1>
        <div class="linha"></div>
      </div>

      <section class="row g-3 pt-5 m-5 pb-5 pe-5">
        <h1 class="fw-bold">| INFANTIL </h1>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/desenhosINF/mine.jpg" class="card-img-top card imgcard w-100" alt="Minecraft" />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Minecraft</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Jared Hess</small>
              </p>
              <div class="estrela"> ★★★★☆</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop24">Assistir Agora</a>
            </div>
          </div>







          <!-- Modal 24-->
          <div class="modal fade " id="staticBackdrop24" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Minecraft</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/desenhosINF/mine.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Um portal misterioso atrai quatro desajustados para o Overworld, uma terra das maravilhas bizarras e
                  cúbicas que prospera com a imaginação. Para voltar para casa, eles têm que dominar o terreno enquanto
                  embarcam em uma missão mágica com um construtor inesperado chamado Steve.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/desenhosINF/lilo.jpg" class="card-img-top card imgcard img-fluid w-100"
              alt="Lilo & Stitch" />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Lilo & Stitch</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Chris Sanders</small>
              </p>
              <div class="estrela"> ★★★★☆</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop23">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 23-->
          <div class="modal fade " id="staticBackdrop23" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Lilo & Stitch</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/desenhosINF/lilo.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Lilo é uma garota que adora cuidar de animais menos favorecidos. Lilo tem o costume de coletar lixo
                  reciclável nas praias para, com o dinheiro recebido, comprar comida para peixes. Até que, em um belo
                  dia, ela encontra um cachorro e decide adotá-lo. Entretanto, este cachorro na verdade é Stitch, um ser
                  alienígena que é um dos criminosos mais perigosos da galáxia.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="ccol-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/desenhosINF/elio.jpg" class="card-img-top card imgcard img-fluid w-100" alt="Elio" />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Elio</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Domee Shi</small>
              </p>
              <div class="estrela"> ★★★☆☆</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop22">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 22-->
          <div class="modal fade " id="staticBackdrop22" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">As Branquelas</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/desenhosINF/elio.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Elio se vê transportado pela galáxia e é confundido com o embaixador intergaláctico da Terra.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/desenhosINF/homemcao.jpg" class="card-img-top card imgcard img-fluid w-100"
              alt="O homem-cão" />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">O homem-cão</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Peter Hastings</small>
              </p>
              <div class="estrela"> ★★★★☆</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop21">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 21-->
          <div class="modal fade " id="staticBackdrop21" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">homem-cão</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/desenhosINF/homemcao.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Dois irmãos agentes do FBI, Marcus e Kevin Copeland, acidentalmente evitam que bandidos sejam presos
                  em
                  uma apreensão de drogas. Como castigo, eles são forçados a escoltar um par de socialites nos Hamptons.
                  Quando as meninas descobrem o plano da agência, elas se recusam a ir. Sem opções, Marcus e Kevin, dois
                  homens negros, decidem fingir que são as irmãs e se transformam em um par de loiras.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <h1 class="fw-bold pt-5">| TERROR</h1>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesTerror/tele.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Telefone Preto</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Scott Derrickson</small>
              </p>
              <div class="estrela"> ★★★★☆</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop20">Assistir Agora</a>
            </div>
          </div>

          <!-- Modal 20-->

          <div class="modal fade " id="staticBackdrop20" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Telefone Preto</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesTerror/tele.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Finney Shaw, de 13 anos, é sequestrado por um sádico assassino mascarado e mantido em um porão à prova
                  de som. Até que um telefone desconectado na parede começa a tocar, e ele logo descobre que pode ouvir
                  as
                  vozes das vítimas anteriores do maníaco.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesTerror/macaco.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">O Macaco</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Oz Perkins</small>
              </p>
              <div class="estrela"> ★☆☆☆☆</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop19">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 19-->

          <div class="modal fade " id="staticBackdrop19" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">O Macaco</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesTerror/macaco.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Irmãos gêmeos encontram um misterioso macaco de corda. Após a descoberta, uma série de mortes absurdas
                  destroça a família. Muitos anos depois, o macaco inicia uma nova onda de assassinatos, forçando os
                  irmãos a enfrentar o brinquedo amaldiçoado.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesTerror/sorria.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Sorria 2</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Parker Finn</small>
              </p>
              <div class="estrela"> ★★★☆☆</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop18">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 18-->

          <div class="modal fade " id="staticBackdrop18" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Sorria 2</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesTerror/sorria.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Skye Riley começa a experimentar eventos cada vez mais aterrorizantes e inexplicáveis. Sobrecarregada
                  pelos horrores crescentes e pelas pressões da fama, ela precisa enfrentar seu passado sombrio para
                  recuperar o controle de sua vida.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesTerror/premo.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Premonição 6</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Zach Lipovsky</small>
              </p>
              <div class="estrela"> ★★★☆☆</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop17">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 17-->

          <div class="modal fade " id="staticBackdrop17" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Premonição 6</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesTerror/premo.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Atormentada por um pesadelo violento e recorrente, uma estudante universitária volta para casa em
                  busca
                  da única pessoa que pode ser capaz de quebrar o ciclo de morte e salvar sua família do terrível
                  destino
                  que inevitavelmente os aguarda.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <h1 class="fw-bold pt-5">| DRAMA</h1>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesDrama/espera.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">À Espera de um Milagre </h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Frank Darabont</small>
              </p>
              <div class="estrela"> ★★★★★</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop16">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 16-->

          <div class="modal fade " id="staticBackdrop16" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">À Espera de um Milagre </h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesDrama/espera.jpg" alt="">
                </div>
                <div class="modal-body ">
                  m carcereiro tem um relacionamento incomum e comovente com um preso que está no corredor na morte:
                  Coffey, um negro enorme, condenado por ter matado brutalmente duas gêmeas de nove anos. Ele tem
                  tamanho
                  e força para matar qualquer um, mas seu comportamento é completamente oposto à sua aparência.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesDrama/como.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Como eu era antes de Você</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Thea Sharrock</small>
              </p>
              <div class="estrela"> ★★★★★</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop15">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 15-->

          <div class="modal fade " id="staticBackdrop15" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Como eu era antes de Você</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesDrama/como.jpg" alt="">
                </div>
                <div class="modal-body ">
                  De origem modesta e sem grandes aspirações, a peculiar Louisa Clark é contratada para ser cuidadora de
                  Will, um jovem tetraplégico depressivo e cínico.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesDrama/extra.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Extraordinário</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Stephen Chbosky</small>
              </p>
              <div class="estrela"> ★★★★★</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop14">Assistir Agora</a>
            </div>
          </div>

          <div class="modal fade " id="staticBackdrop14" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Extraordinário</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesDrama/extra.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Auggie Pullman é um garoto que nasceu com uma deformidade facial e precisou passar por 27 cirurgias
                  plásticas. Aos 10 anos, ele finalmente começa a frequentar uma escola regular, como qualquer outra
                  criança, pela primeira vez. No quinto ano, ele precisa se esforçar para conseguir se encaixar em sua
                  nova realidade.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesDrama/jardim.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">O Jardim Secreto</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Agnieszka Holland</small>
              </p>
              <div class="estrela"> ★★★★★</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop13">Assistir Agora</a>
            </div>
          </div>

          <div class="modal fade " id="staticBackdrop13" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">O Jardim Secreto</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesDrama/jardim.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Mary Lennox é uma órfã enviada para viver com seu tio em sua mansão, que é cheia de segredos. Ela
                  descobre um primo doente que ela nunca soube que tinha e um jardim abandonado, o qual está determinada
                  a
                  trazer de volta para a vida.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <h1 class="fw-bold pt-5">| SUSPENSE</h1>



        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesSus/clube.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Clube da Luta </h5>
              <p class="card-text">
                <small class="text-body-secondary">De: David Fincher</small>
              </p>
              <div class="estrela"> ★★★★★</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop12">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 12-->

          <div class="modal fade " id="staticBackdrop12" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Clube da Luta</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesSus/clube.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Clube da Luta é uma reflexão crítica acerca da sociedade de consumo na qual vivemos e os efeitos que
                  ela
                  provoca nos indivíduos. O filme começa nos mostrando várias marcas famosas e o modo como o
                  protagonista
                  e os demais consomem esses produtos com o objetivo de preencher um vazio interior.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesSus/corra.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Corra!</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Jordan Peele</small>
              </p>
              <div class="estrela"> ★★★★★</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop11">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 11-->

          <div class="modal fade " id="staticBackdrop11" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Corra!</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesSus/corra.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Com Daniel Kaluuya e Allison Williams no elenco principal, a obra fala sobre um jovem apaixonado que
                  vai
                  viajar para conhecer a família da namorada. Depois do lançamento em 2017, o longa se tornou um enorme
                  sucesso internacional, tendo sido um dos filmes mais comentados e aclamados dos últimos anos.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesSus/ilha.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Ilha do Medo</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: Martin Scorsese</small>
              </p>
              <div class="estrela"> ★★★★★</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop10">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 10-->

          <div class="modal fade " id="staticBackdrop10" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Ilha do Medo</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesSus/ilha.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Nos anos 1950, a fuga de uma assassina leva o detetive Teddy Daniels e seu parceiro a investigarem o
                  seu
                  desaparecimento de um quarto trancado em um hospital psiquiátrico. Lá, uma rebelião se inicia e o
                  agente
                  terá que enfrentar seus próprios medos.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesSus/seven.jpg" class="card-img-top card imgcard" alt="..." />
            </a>
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Seven</h5>
              <p class="card-text">
                <small class="text-body-secondary">De: David Fincher</small>
              </p>
              <div class="estrela"> ★★★★★</div>
              <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop9"> >Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 9-->

          <div class="modal fade " id="staticBackdrop9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Seven</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesSus/seven.jpg" alt="">
                </div>
                <div class="modal-body ">
                  A ponto de se aposentar, o detetive William Somerset pega um último caso, com a ajuda do
                  recém-transferido David Mills. Juntos, descobrem uma série de assassinatos e logo percebem que estão
                  lidando com um assassino que tem como alvo pessoas que ele acredita representar os sete pecados
                  capitais.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <h1 class="fw-bold pt-5">| COMÉDIA</h1>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesCom/branca.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">As Branquelas <p class="card-text">
                  <small class="text-body-secondary">De: Keenen Ivory Wayans</small>
                  </p>
                  <div class="estrela"> ★★★★☆</div>
                  <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop8">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 8-->
          <div class="modal fade " id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">As Branquelas</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesCom/branca.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Dois irmãos agentes do FBI, Marcus e Kevin Copeland, acidentalmente evitam que bandidos sejam presos
                  em
                  uma apreensão de drogas. Como castigo, eles são forçados a escoltar um par de socialites nos Hamptons.
                  Quando as meninas descobrem o plano da agência, elas se recusam a ir. Sem opções, Marcus e Kevin, dois
                  homens negros, decidem fingir que são as irmãs e se transformam em um par de loiras.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesCom/beber.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Se Beber, Não Case! <p class="card-text">
                  <small class="text-body-secondary">De: Todd Phillips</small>
                  </p>
                  <div class="estrela"> ★★★★☆</div>
                  <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop7"> >Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 7-->
          <div class="modal fade " id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Se beber, não case! </h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesCom/beber.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Dois dias antes de seu casamento, Doug e três amigos vão de carro até Las Vegas para uma louca e
                  memorável despedida de solteiro. Quando os três padrinhos acordam na manhã seguinte, eles não
                  conseguem
                  se lembrar de nada e notam que Doug desapareceu. Com pouco tempo de sobra, os amigos tentam refazer a
                  noite anterior e encontrar Doug para que possam levá-lo de volta a Los Angeles a tempo de chegar ao
                  altar.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesCom/escola.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Escola de Rock <p class="card-text">
                  <small class="text-body-secondary">De: Richard Linklater</small>
                  </p>
                  <div class="estrela"> ★★★★☆</div>
                  <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop6">Assistir Agora</a>
            </div>
          </div>
          <!-- Modal 6-->
          <div class="modal fade " id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Escola de Rock</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesCom/escola.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Depois que o guitarrista Dewey é expulso de sua banda, ele se faz passar por professor de música em
                  uma
                  escola particular. Quando ouve seus alunos tocarem, ele se dá conta de que podem formar uma banda e
                  participar da Batalha das Bandas, na qual ele finalmente terá a chance de se tornar o astro de rock
                  que
                  sempre soube que estava destinado a ser.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/filmesCom/panico.jpg" class="card-img-top card imgcard img-fluid w-100" alt="..." />
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Todo Mundo em Pânico <p class="card-text">
                  <small class="text-body-secondary">De: Keenen Ivory Wayans </small>
                  </p>
                  <div class="estrela"> ★★★☆☆</div>
                  <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop5">Assistir Agora</a>
            </div>
          </div>
          <div class="modal fade " id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Todo mundo em pânico </h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/filmesCom/panico.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Depois do assassinato de uma bela colega de classe, um grupo de adolescentes desorientados descobre
                  que
                  há um assassino entre eles. A heroína Cindy Campbell e
                  a sua turma de amigos tentam se proteger do perigo, mas Gail Hailstorm, uma repórter irritante,
                  simplesmente não os deixa em paz.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <div class="text-center">
        <a href="filmes.php" class="btn btn-outline-danger fw-bold fs-1 d-grid gap-2 col-6 mx-auto">
          Exibir Tudo
        </a>
      </div>

      <div class="text-center pt-5">
        <h1 class="fw-bold display-1 ">Acabou de Sair</h1>
        <div class="linha"></div>
      </div>

      <section class="bloco-transparente pe-5 ps-5">
        <div class="border rounded ps-5 ">

          <div class="  d-flex align-items-center ">
            <div class="card mb-3  " style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-4">
                  <img src="/img/lancamentos/monstro1.jpg" class="img-fluid w-100 rounded-start" alt="...">
                </div>
                <div class="col-8 text-light">
                  <div class="card-body text-light">
                    <h5 class="card-title fw-bold">Monstro Adolescente</h5>
                    <p class="card-text  ">This is a wider card with supporting text below as a natural lead-in to
                      additional
                      content. This content is a little bit longer.</p>

                  </div>
                </div>
              </div>
            </div>
            <h1 class="ms-3 prime display-5 fw-bold ">Estreia 22/05 Quinta-Feira</h1>
          </div>

          <div class="d-flex align-items-center">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-4">
                  <img src="img/lancamentos/main.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-8 text-light">
                  <div class="card-body text-light">
                    <h5 class="card-title fw-bold">Má Influência</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                      additional
                      content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
            <h1 class="ms-3 prime display-5 fw-bold text-light">Estreia 22/05 Quinta-Feira</h1>
          </div>

          <div class=" d-flex align-items-center">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-4">
                  <img src="img/lancamentos/vini.webp" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-8 text-light">
                  <div class="card-body text-light">
                    <h5 class="card-title fw-bold">Baila, Vini</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                      additional
                      content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>

            <h1 class="ms-3 prime display-5 fw-bold text-light ">Estreia 22/05 Quinta-Feira</h1>

          </div>
      </section>

      <div class="text-center pt-5">
        <h1 class="fw-bold display-1 ">| Series</h1>
        <div class="linha"></div>
      </div>

      <section id="series" class="row g-3  pt-5 m-5  pb-5">
        <h1 class="text-white fw-bold">| POPULARES</h1>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">

            <img src="/img/seriespopulares/youteste.jpg" class="card-img-top card imgcard" alt="..." />
            </a>
            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">YOU</h5>

              <div class="bg-dark mb-2 text-light fw-bold fs-5 m-auto">+18</div>
              <a href="#" class="btn btn-danger  fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop57">Ver Mais</a>
            </div>
          </div>
          <!-- Modal 57-->
          <div class="modal fade " id="staticBackdrop57" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">YOU</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/seriespopulares/youteste.jpg" alt="">
                </div>
                <div class="modal-body ">
                  A série acompanha Joe Goldberg, um homem aparentemente comum que se apaixona obsessivamente por
                  mulheres
                  e faz de tudo para se aproximar delas — inclusive espionar, manipular e matar. Ele justifica suas
                  ações
                  como gestos de amor, mas seus relacionamentos acabam se tornando perigosos e tóxicos. A cada
                  temporada,
                  Joe assume novas identidades e tenta começar de novo, mas seu comportamento obsessivo sempre volta à
                  tona.

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/seriespopulares/breakingbad.jpg" class="card-img-top card imgcard" alt="..." />

            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Breaking Bad</h5>

              <div class="bg-dark mb-2 text-light fw-bold fs-5 m-auto"> +18</div>
              <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" target="_blank" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop58">Ver Mais</a>
            </div>
          </div>
          <!-- Modal 58-->
          <div class="modal fade " id="staticBackdrop58" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Breaking Bad</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/seriespopulares/breakingbad.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Breaking Bad conta a história de Walter White, um professor de química que descobre que tem câncer e
                  começa a produzir metanfetamina para sustentar a família. Com a ajuda de seu ex-aluno Jesse Pinkman,
                  ele entra no mundo do crime e se transforma em um dos maiores traficantes da região, enfrentando
                  diversos inimigos e colocando sua família em risco.

                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">

            <img src="/img/seriespopulares/lacasa.jpg" class="card-img-top card imgcard" alt="..." />

            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">La Casa de Papel</h5>

              <div class="bg-dark mb-2 text-light fw-bold fs-5 m-auto"> +18 </div>
              <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" target="_blank" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop59">Ver Mais</a>
            </div>
          </div>
          <!-- Modal 59-->
          <div class="modal fade " id="staticBackdrop59" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">La Casa de Papel</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/seriespopulares/lacasa.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Um homem chamado Professor reúne um grupo de criminosos para realizar o maior assalto da história:
                  invadir a Casa da Moeda da Espanha e imprimir bilhões de euros. Cada membro da equipe usa o nome de
                  uma cidade como codinome e veste um macacão vermelho com máscara de Dalí. O plano, cheio de
                  reviravoltas, envolve manter reféns, lidar com a polícia e seguir uma estratégia minuciosa. Ao longo
                  da série, surgem conflitos, romances e desafios que colocam tudo em risco.

                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">

            <img src="/img/seriespopulares/chi.jpg" class="card-img-top card imgcard" alt="..." />

            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Chiquititas</h5>
              <div class="bg-success mb-2 text-light fw-bold fs-5 m-auto ps-2 pe-2"> L </div>
              <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" target="_blank" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop60">Ver Mais</a>
            </div>
          </div>
          <!-- Modal 60-->
          <div class="modal fade " id="staticBackdrop60" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Chiquititas</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/seriespopulares/chi.jpg" alt="">
                </div>
                <div class="modal-body ">
                  É uma novela infantojuvenil sobre um grupo de crianças que vivem em um orfanato chamado Raio de
                  Luz. Elas enfrentam desafios, criam laços de amizade e vivem aventuras, sempre com muita música,
                  alegria e esperança. A história destaca valores como amor, união e superação, mesmo diante das
                  dificuldades.

                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">

            <img src="/img/seriespopulares/safe.jpg" class="card-img-top card imgcard" alt="..." />

            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Safe</h5>
              <div class="bg-danger mb-2 text-light fw-bold fs-5 m-auto"> +16 </div>
              <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" target="_blank" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop61">Ver Mais</a>
            </div>
          </div>
          <!-- Modal 61-->
          <div class="modal fade " id="staticBackdrop61" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Safe</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/seriespopulares/safe.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Safe é uma série de suspense que segue Tom Delaney, um viúvo e pai de duas filhas, que mora em um
                  condomínio fechado e aparentemente seguro. Quando sua filha mais nova desaparece, ele começa a
                  investigar, descobrindo segredos obscuros sobre as pessoas ao seu redor, incluindo amigos e vizinhos.
                  À
                  medida que ele desenterra mais mistérios, Tom se vê em uma teia de mentiras e conspirações, enquanto
                  tenta proteger sua família.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">

            <img src="/img/seriespopulares/last.jpg" class="card-img-top card imgcard" alt="..." />

            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">The Last Of Us</h5>
              <div class="bg-danger mb-2 text-light fw-bold fs-5 m-auto"> +16 </div>
              <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" target="_blank" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop62">Ver Mais</a>
            </div>
          </div>
          <!-- Modal 62-->
          <div class="modal fade " id="staticBackdrop62" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">The Last Of Us</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/seriespopulares/last.jpg" alt="">
                </div>
                <div class="modal-body ">
                  The Last of Us é uma série pós-apocalíptica baseada no famoso videogame. A história segue Joel, um
                  homem
                  endurecido pela tragédia, e Ellie, uma adolescente imune ao fungo parasitário que transformou a
                  maioria
                  da população em monstros. Juntos, eles atravessam os Estados Unidos, enfrentando perigos tanto de
                  infectados quanto de humanos sobreviventes. Ao longo da jornada, eles desenvolvem uma forte relação de
                  proteção e afeto, enquanto lutam pela sobrevivência em um mundo devastado.

                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">

            <img src="/img/seriespopulares/vanda.jpg" class="card-img-top card imgcard" alt="..." />

            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Wandinha</h5>
              <div class="bg-primary mb-2 text-light fw-bold fs-5 m-auto"> +10 </div>
              <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" target="_blank" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop63">Ver Mais</a>
            </div>
          </div>
          <!-- Modal 63-->
          <div class="modal fade " id="staticBackdrop63" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Wandinha</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/seriespopulares/vanda.jpg" alt="">
                </div>
                <div class="modal-body ">
                  é uma série de mistério e comédia sombria centrada em Wandinha Addams, a filha dos Addams. A história
                  acompanha sua vida na escola Nevermore Academy, onde ela tenta controlar seus poderes psíquicos
                  enquanto
                  investiga uma série de assassinatos misteriosos na cidade. Além de enfrentar os desafios típicos da
                  adolescência, ela lida com suas peculiaridades familiares e tenta desvendar segredos antigos, tudo com
                  sua personalidade irreverente e cheia de sarcasmo.
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
          <div class="card pula h-100 w-100 d-flex flex-column">
            <img src="/img/seriespopulares/elite.jpg" class="card-img-top card imgcard" alt="..." />

            <div class="card-body text-center flex-grow-1 d-flex flex-column">
              <h5 class="card-title fw-bold">Elite</h5>
              <div class="bg-dark mb-2 text-light fw-bold fs-5 m-auto"> +18 </div>
              <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" target="_blank" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop64">Ver Mais</a>
            </div>
          </div>
          <!-- Modal 64-->
          <div class="modal fade " id="staticBackdrop64" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
              <div class="modal-content text-center align-items-center">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Elite</h1>
                </div>
                <div>
                  <img class="fotomodal" src="/img/seriespopulares/elite.jpg" alt="">
                </div>
                <div class="modal-body ">
                  Elite é uma série espanhola que segue um grupo de adolescentes de diferentes classes sociais em uma
                  escola de elite chamada Las Encinas. Quando três estudantes de origens humildes entram na escola,
                  conflitos entre os alunos ricos e os novos começam a surgir, levando a intrigas, traições, segredos e
                  mistérios. A série mistura drama adolescente com mistério, abordando temas como identidade,
                  sexualidade,
                  classe social, amizade e crime, com o foco em um assassinato que muda a vida de todos.

                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center pt-5">
          <a href="filmes.php" class="btn btn-outline-danger fw-bold  fs-1 d-grid gap-2 col-6 mx-auto">
            Exibir Tudo
          </a>
        </div>
      </section>

      <section id="seriesfam" class="row g-3  pt-5 m-5  pb-5">
        <h1 class="text-white">| PARA VER COM A FAMÍLIA</h1>
        <div id="carouselExampleCaptions" class="carousel slide">

          <div class="carousel-inner carrofamilia  m-auto">
            <div class="carousel-item active">
              <a href="https://www.netflix.com/watch/70155618?source=35" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop28">
                <img src="img/seriesfam/fullerco.jpg" class="d-block w-100  imglanca img-fluid" alt="...">
              </a>
              <div class="modal fade " id="staticBackdrop28" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content text-center align-items-center">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Fuller House </h1>
                    </div>
                    <div>
                      <img class="fotomodal" src="/img/seriesfam/fullerco.jpg" alt="">
                    </div>
                    <div class="modal-body ">
                      Fuller House é uma comédia que acompanha D.J. Tanner, agora viúva, criando seus três filhos com a
                      ajuda da irmã Stephanie e da melhor amiga Kimmy,
                      revivendo a nostalgia de Full House com novas aventuras familiares e muito humor.
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop29">
                <img src="img/seriesfam/modern.jpg" class="d-block w-100  imglanca img-fluid img-fluid" alt="...">
              </a>
              <div class="modal fade " id="staticBackdrop29" data-bskdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content text-center align-items-center">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Modern Family </h1>
                    </div>
                    <div>
                      <img class="fotomodal" src="/img/seriesfam/modern.jpg" alt="">
                    </div>
                    <div class="modal-body ">
                      Modern Family: Série de comédia que acompanha o cotidiano caótico e divertido de uma
                      família moderna, composta por três núcleos interligados — um casal tradicional, um casal gay e um
                      casal com grande diferença de idade
                      — mostrando os altos e baixos da vida familiar com muito humor.
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop30">
                <img src="/img/seriesfam/moddle.jpeg" class="d-block w-100  imglanca img-fluid" alt="...">

              </a>
              </a>
              <div class="modal fade" id="staticBackdrop30" data-bs-drop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content text-center align-items-center">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">The Middle </h1>
                    </div>
                    <div>
                      <img class="fotomodal" src="/img/seriesfam/moddle.jpeg" alt="">
                    </div>
                    <div class="modal-body ">
                      Uma comédia sobre a família Heck, que vive em uma cidade pequena no interior dos EUA. A mãe
                      Frankie tenta equilibrar o trabalho, o marido desajeitado e os três filhos com personalidades bem
                      diferentes.
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <a href=""              data-bs-toggle="modal" data-bs-target="#staticBackdrop31">
                <img src="/img/seriesfam/todo.jpg" class="d-block w-100  imglanca img-fluid" alt="...">
              </a>

              <div class="modal fade" id="staticBackdrop31" data-bs-drop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content text-center align-items-center">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Todo Mundo odeia o Chris </h1>
                    </div>
                    <div>
                      <img class="fotomodal" src="/img/seriesfam/todo.jpg" alt="">
                    </div>
                    <div class="modal-body ">
                      Inspirada na infância do comediante Chris Rock, essa série mostra com muito humor os desafios de
                      crescer como um adolescente negro no Brooklyn dos anos 80.
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop32">
                <img src="img/seriesfam/good.jpg" class="d-block w-100  imglanca img-fluid" alt="...">
              </a>
              </a>
              <div class="modal fade" id="staticBackdrop32" data-bs-drop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content text-center align-items-center">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">The Good Place </h1>
                    </div>
                    <div>
                      <img class="fotomodal" src="/img/seriesfam/good.jpg" alt="">
                    </div>
                    <div class="modal-body ">
                      Eleanor Shellstrop acorda no "Lugar Bom" após sua morte, mas percebe que houve um erro. A série
                      mistura comédia e filosofia, explorando o que significa ser uma boa pessoa.
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop33">
                <img src="/img/seriesfam/cobra.webp" class="d-block w-100  imglanca img-fluid" alt="...">

              </a>
              </a>
              <div class="modal fade" id="staticBackdrop33" data-bs-drop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content text-center align-items-center">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Cobra Kai </h1>
                    </div>
                    <div>
                      <img class="fotomodal" src="/img/seriesfam/cobra.webp" alt="">
                    </div>
                    <div class="modal-body ">
                      Continuação da franquia Karatê Kid, mostra Johnny Lawrence e Daniel LaRusso adultos, revivendo sua
                      rivalidade. Mistura drama, ação e humor com foco nos alunos adolescentes e suas jornadas pessoais.
                      Ótima para fãs de luta e histórias de superação. </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop34">
                <img src="img/seriesfam/anne.png" class="d-block w-100  imglanca img-fluid" alt="...">
              </a>
              </a>
              <div class="modal fade" id="staticBackdrop34" data-bs-drop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content text-center align-items-center">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Anne With an E </h1>
                    </div>
                    <div>
                      <img class="fotomodal" src="img/seriesfam/anne.png" alt="">
                    </div>
                    <div class="modal-body ">
                      Baseada nos livros de “Anne de Green Gables”, conta a história de Anne Shirley, uma órfã sonhadora
                      e inteligente que transforma a vida de todos ao seu redor ao ser adotada por engano por dois
                      irmãos em uma fazenda. Sensível, inspiradora e cheia de lições de vida. </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop35">
                <img src="/img/seriesfam/nien.jpg" class="d-block w-100  imglanca img-fluid" alt="...">

              </a>
              </a>
              <div class="modal fade" id="staticBackdrop35" data-bs-drop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content text-center align-items-center">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Brooklyn Nine-Nine </h1>
                    </div>
                    <div>
                      <img class="fotomodal" src="/img/seriesfam/nien.jpg" alt="">
                    </div>
                    <div class="modal-body ">
                      Uma comédia policial que segue Jake Peralta, um detetive talentoso, mas imaturo, e sua equipe
                      hilária na delegacia 99 do Brooklyn. Mistura mistério com muito humor e personagens carismáticos.
                      Boa para rir em família (ideal para maiores de 12 anos).
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </section>
  </main>
  <footer class="text-center text-white bg-dark">
    <div class="container p-4">
      <div class="container d-flex flex-column flex-sm-row justify-content-between align-items-center">
        <p class="mb-2 mb-sm-0">&copy; 2025 Films&Series, Inc</p>

        <img src="img/logocerta.png" alt="Logo do site" height="30">

        <ul class="nav">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
      </div>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white">Amanda e Leticia</a>

    </div>
  </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</html>