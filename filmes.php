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
                <img src="img/logocerta.png" alt="Logo" width="60" height="50" />
                <ul class="navbar-nav me-auto">
                    <li class="nav-item ms-5">
                        <a class="navbar-brand cont myButton text-light" href="site.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand cont myButton text-light" href="oscar.php">Oscar</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand cont myButton  text-light" href="filmes.php">Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand cont myButton  text-light" href="#Series">Séries</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn text-dark btn-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="w-75 m-auto">

        <div class="text-center pt-5 mb-4">
            <h1 class="fw-bold display-1">Filmes</h1>
            <div class="linha"></div>
        </div>

        <section class="row g-3 pt-5 m-5 pb-5">
            <h1 class="fw-bold bi bi-film"> INFANTIL </h1>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/desenhosINF/mine.jpg" class="card-img-top card imgcard" alt="Minecraft" />
                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Minecraft</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Jared Hess</small>
                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop36">Ver mais</a>

                    </div>
                </div>

                <!-- Modal 36-->
                <div class="modal fade " id="staticBackdrop36" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Um portal misterioso atrai quatro desajustados para o Overworld, uma terra das
                                maravilhas bizarras e
                                cúbicas que prospera com a imaginação. Para voltar para casa, eles têm que dominar o
                                terreno enquanto
                                embarcam em uma missão mágica com um construtor inesperado chamado Steve.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">

                    <img src="/img/desenhosINF/lilo.jpg" class="card-img-top card imgcard" alt="Lilo & Stitch" />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Lilo & Stitch</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Chris Sanders e Dean DeBlois</small>
                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop37">Ver mais</a>
                    </div>
                </div>
                <!-- Modal 37-->
                <div class="modal fade " id="staticBackdrop37" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Lilo é uma garota que adora cuidar de animais menos favorecidos. Lilo tem o costume de
                                coletar lixo
                                reciclável nas praias para, com o dinheiro recebido, comprar comida para peixes. Até
                                que, em um belo
                                dia, ela encontra um cachorro e decide adotá-lo. Entretanto, este cachorro na verdade é
                                Stitch, um ser
                                alienígena que é um dos criminosos mais perigosos da galáxia.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">

                    <img src="/img/desenhosINF/elio.jpg" class="card-img-top card imgcard" alt="Elio" />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Elio</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Domee Shi e Madeline Sharafian</small>
                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop38">Ver mais</a>
                    </div>
                </div>
                <!-- Modal 38-->
                <div class="modal fade " id="staticBackdrop38" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Elio se vê transportado pela galáxia e é confundido com o embaixador intergaláctico da
                                Terra.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">

                    <img src="/img/desenhosINF/homemcao.jpg" class="card-img-top card imgcard" alt="O homem-cão" />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">O homem-cão</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Peter Hastings</small>
                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop39">Ver mais</a>
                    </div>
                </div>
                <!-- Modal 39-->
                <div class="modal fade " id="staticBackdrop39" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Dois irmãos agentes do FBI, Marcus e Kevin Copeland, acidentalmente evitam que bandidos
                                sejam presos em
                                uma apreensão de drogas. Como castigo, eles são forçados a escoltar um par de socialites
                                nos Hamptons.
                                Quando as meninas descobrem o plano da agência, elas se recusam a ir. Sem opções, Marcus
                                e Kevin, dois
                                homens negros, decidem fingir que são as irmãs e se transformam em um par de loiras.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">

                    <img src="/img/desenhosINF/toy4.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Toy Story 4 </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Josh Cooley</small>
                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop98">Ver mais</a>
                    </div>
                </div>

                <!-- Modal 98 -->
                <div class="modal fade " id="staticBackdrop98" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Toy Story 4 </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/desenhosINF/toy4.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Woody, Buzz Lightyear e os outros brinquedos embarcam em uma nova aventura com a adição
                                de Forky, um brinquedo improvisado que tem problemas em entender seu propósito. Eles
                                enfrentam desafios e descobrem a importância da amizade.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">

                    <img src="/img/desenhosINF/rei.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> O Rei Leão (2019) </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Jon Favreau</small>
                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop99">Ver mais</a>
                    </div>
                </div>

                <!-- Modal 99 -->
                <div class="modal fade " id="staticBackdrop99" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> O Rei Leão (2019) </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/desenhosINF/rei.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                A história clássica de Simba, um jovem leão que precisa assumir seu destino como rei. O
                                filme é uma versão live-action do icônico filme de animação da Disney, com efeitos
                                especiais impressionantes e uma trilha sonora emocionante.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">

                    <img src="/img/desenhosINF/sh.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Shrek </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Andrew Adamson, Vicky Jenson</small>
                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop100">Ver mais</a>
                    </div>
                </div>

                <!-- Modal 100 -->
                <div class="modal fade " id="staticBackdrop100" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Shrek </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/desenhosINF/sh.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Shrek, um ogro recluso, é forçado a sair de sua casa quando seu refúgio é invadido por
                                uma série de personagens de contos de fadas. Junto com seu amigo Burro, ele embarca em
                                uma jornada para salvar a princesa Fiona e encontrar o amor verdadeiro.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/desenhosINF/elsa.jpg" class="card-img-top card imgcard" alt="..." />
                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Frozen: Uma Aventura Congelante </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Chris Buck, Jennifer Lee</small>
                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop101">Ver mais</a>
                    </div>
                </div>

                <!-- Modal 101 -->
                <div class="modal fade " id="staticBackdrop101" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Frozen: Uma Aventura
                                    Congelante </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/desenhosINF/elsa.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Quando o reino de Arendelle é atingido por um inverno eterno, Anna parte em uma jornada
                                épica com o montanhista Kristoff e sua rena Sven para encontrar sua irmã Elsa e acabar
                                com a maldição de gelo.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/desenhosINF/sa.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Monstros S.A. </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Pete Docter, David Silverman, Lee Unkrich</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop102">
                            Ver mais</a>
                    </div>
                </div>

                <!-- Modal 102 -->
                <div class="modal fade " id="staticBackdrop102" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Monstros S.A. </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/desenhosINF/sa.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Em Monstros S.A., os monstros que assustam crianças para gerar energia se vêem em apuros
                                quando uma criança consegue entrar no mundo dos monstros. Sulley e Mike tentam devolver
                                a criança para casa e lidar com o caos que ela causa.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/desenhosINF/up.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Up: Altas Aventuras </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Pete Docter, Bob Peterson</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop103">Ver mais</a>
                    </div>
                </div>

                <!-- Modal 103 -->
                <div class="modal fade " id="staticBackdrop103" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Up: Altas Aventuras </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/desenhosINF/up.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Carl Fredricksen, um idoso que realiza o sonho de sua falecida esposa, amarrando
                                milhares de balões à sua casa e voando para a América do Sul. No entanto, ele descobre
                                que um jovem chamado Russell se tornou seu inesperado companheiro de viagem.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/desenhosINF/era.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> A Era do Gelo 4 </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Chris Wedge, Carlos Saldanha</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop104">
                            Ver Mais</a>
                    </div>
                </div>

                <!-- Modal 104 -->
                <div class="modal fade " id="staticBackdrop104" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> A Era do Gelo 4</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/desenhosINF/era.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Um mamute, um tigre-dente-de-sabre e um preguiça unem forças para devolver um bebê
                                humano perdido para sua tribo, enfrentando inúmeros desafios e perigos em um mundo
                                pré-histórico repleto de animais.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/desenhosINF/inc.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Os Incríveis </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Brad Bird</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop105">
                            Ver mais</a>
                    </div>
                </div>

                <!-- Modal 105 -->
                <div class="modal fade " id="staticBackdrop105" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Os Incríveis </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/desenhosINF/inc.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                A história da família Parr, composta por super-heróis disfarçados de cidadãos comuns,
                                tentando conciliar suas vidas familiares com suas habilidades extraordinárias, enquanto
                                enfrentam uma nova ameaça que coloca todos em risco.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>












            <h1 class="fw-bold pt-5">| TERROR</h1>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/tele.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Telefone Preto</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Scott Derrickson</small>
                        </p>
                        <div class="estrela"> ★★★★☆</div>


                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop40">
                            Ver mais</a>
                    </div>
                </div>
                <!-- Modal 20-->

                <div class="modal fade " id="staticBackdrop40" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Finney Shaw, de 13 anos, é sequestrado por um sádico assassino mascarado e mantido em um
                                porão à prova
                                de som. Até que um telefone desconectado na parede começa a tocar, e ele logo descobre
                                que pode ouvir as
                                vozes das vítimas anteriores do maníaco.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/macaco.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">O Macaco</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Oz Perkins</small>
                        </p>
                        <div class="estrela"> ★☆☆☆☆</div>

                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop41">Ver mais</a>
                    </div>
                </div>
                <!-- Modal 41-->

                <div class="modal fade " id="staticBackdrop41" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Irmãos gêmeos encontram um misterioso macaco de corda. Após a descoberta, uma série de
                                mortes absurdas
                                destroça a família. Muitos anos depois, o macaco inicia uma nova onda de assassinatos,
                                forçando os
                                irmãos a enfrentar o brinquedo amaldiçoado.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/sorria.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Sorria 2</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Parker Finn</small>
                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop42">
                            Ver mais</a>
                    </div>
                </div>
                <!-- Modal 42-->

                <div class="modal fade " id="staticBackdrop42" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Skye Riley começa a experimentar eventos cada vez mais aterrorizantes e inexplicáveis.
                                Sobrecarregada
                                pelos horrores crescentes e pelas pressões da fama, ela precisa enfrentar seu passado
                                sombrio para
                                recuperar o controle de sua vida.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/premo.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Premonição 6</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Zach Lipovsky e Adam B. Stein</small>
                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop43">
                            Ver mais</a>
                    </div>
                </div>
                <!-- Modal 43-->

                <div class="modal fade " id="staticBackdrop43" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Atormentada por um pesadelo violento e recorrente, uma estudante universitária volta
                                para casa em busca
                                da única pessoa que pode ser capaz de quebrar o ciclo de morte e salvar sua família do
                                terrível destino
                                que inevitavelmente os aguarda.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/exor.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> O Exorcista </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> William Friedkin</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop89"> Ver Mais</a>
                    </div>
                </div>

                <!-- Modal 89 -->
                <div class="modal fade " id="staticBackdrop89" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> O Exorcista </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesTerror/exor.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Uma jovem garota é possuída por uma entidade demoníaca, e uma luta desesperada para
                                salvá-la se inicia com a ajuda de dois padres. Um dos filmes mais assustadores de todos
                                os tempos, baseado em um caso real de possessão.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/ilu.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> O Iluminado </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Stanley Kubrick</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto " data-bs-toggle= "modal" data-bs-target="#staticBackdrop90">Ver mais</a>
                    </div>
                </div>

                <!-- Modal 90 -->
                <div class="modal fade " id="staticBackdrop90" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> O Iluminado </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesTerror/ilu.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Jack Torrance, um escritor, se muda com sua família para um hotel isolado durante o
                                inverno. À medida que sua sanidade se deteriora, ele começa a ser influenciado por
                                forças sobrenaturais perigosas.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/bru.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> A Bruxa </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Robert Eggers</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal" data-bs-target="#staticBackdrop91">Ver mais</a>
                    </div>
                </div>

                <!-- Modal 91 -->
                <div class="modal fade " id="staticBackdrop91" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> A Bruxa </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesTerror/bru.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                No século XVII, uma família puritana vive isolada em uma fazenda na Nova Inglaterra e
                                começa a desmoronar quando começam a suspeitar que algo maligno está à espreita na
                                floresta próxima.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/here.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Hereditary – O Legado </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Ari Aster</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop92">Ver mais</a>
                    </div>
                </div>

                <!-- Modal 92 -->
                <div class="modal fade " id="staticBackdrop92" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Hereditary – O Legado
                                </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesTerror/here.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Após a morte da matriarca de uma família, membros de sua casa começam a descobrir
                                segredos sombrios de seu passado e enfrentam forças sobrenaturais que ameaçam
                                destruí-los.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/baba.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> O Babadook </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Jennifer Kent</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop93"> Ver mais</a>
                    </div>
                </div>

                <!-- Modal 93 -->
                <div class="modal fade " id="staticBackdrop93" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> O Babadook </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesTerror/baba.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Uma mãe viúva e seu filho se tornam aterrorizados por uma figura monstruosa, o Babadook,
                                que emerge de um livro infantil. O filme explora temas de luto, trauma e o sobrenatural.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/it.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> It: A Coisa </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Andrés Muschietti</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop94">
                            Ver Mais</a>
                    </div>
                </div>

                <!-- Modal 94 -->
                <div class="modal fade " id="staticBackdrop94" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> It: A Coisa </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesTerror/it.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Um grupo de crianças enfrenta o temido Pennywise, um palhaço demoníaco que se alimenta
                                dos medos das pessoas. Baseado no romance de Stephen King, o filme mistura terror
                                psicológico com elementos sobrenaturais.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/wic.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> O Estranho no Caminho </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Robin Hardy</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop95">
                            Ver Mais</a>
                    </div>
                </div>

                <!-- Modal 95 -->
                <div class="modal fade " id="staticBackdrop95" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> O Estranho no Caminho
                                </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesTerror/wic.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Um policial investiga o desaparecimento de uma jovem em uma ilha isolada, apenas para
                                descobrir que os moradores locais praticam um culto pagão que envolve sacrifícios
                                humanos.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesTerror/atividade.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Atividade Paranormal </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> Oren Peli</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop96">
                            Ver Mais</a>
                    </div>
                </div>

                <!-- Modal 96 -->
                <div class="modal fade " id="staticBackdrop96" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Atividade Paranormal
                                </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesTerror/atividade.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Um casal começa a filmar os eventos misteriosos e aterrorizantes que ocorrem em sua casa
                                à noite, descobrindo que algo sobrenatural está assombrando o local de maneira cada vez
                                mais perigosa.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
















































            <h1 class="fw-bold pt-5">| DRAMA</h1>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/espera.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">À Espera de um Milagre </h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Frank Darabont</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>


                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop44">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 44-->

                <div class="modal fade " id="staticBackdrop44" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">À Espera de um Milagre
                                </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesDrama/espera.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                m carcereiro tem um relacionamento incomum e comovente com um preso que está no corredor
                                na morte:
                                Coffey, um negro enorme, condenado por ter matado brutalmente duas gêmeas de nove anos.
                                Ele tem tamanho
                                e força para matar qualquer um, mas seu comportamento é completamente oposto à sua
                                aparência.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/como.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Como eu era antes de Você</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Thea Sharrock</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>

                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop45">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 45-->

                <div class="modal fade " id="staticBackdrop45" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Como eu era antes de Você
                                </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesDrama/como.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                De origem modesta e sem grandes aspirações, a peculiar Louisa Clark é contratada para
                                ser cuidadora de
                                Will, um jovem tetraplégico depressivo e cínico.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/extra.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Extraordinário</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Stephen Chbosky</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop46">
                            Ver Mais</a>
                    </div>
                </div>

                <div class="modal fade " id="staticBackdrop46" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Auggie Pullman é um garoto que nasceu com uma deformidade facial e precisou passar por
                                27 cirurgias
                                plásticas. Aos 10 anos, ele finalmente começa a frequentar uma escola regular, como
                                qualquer outra
                                criança, pela primeira vez. No quinto ano, ele precisa se esforçar para conseguir se
                                encaixar em sua
                                nova realidade.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/jardim.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">O Jardim Secreto</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Agnieszka Holland</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop47">
                            Ver Mais</a>
                    </div>
                </div>

                <div class="modal fade " id="staticBackdrop47" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Mary Lennox é uma órfã enviada para viver com seu tio em sua mansão, que é cheia de
                                segredos. Ela
                                descobre um primo doente que ela nunca soube que tinha e um jardim abandonado, o qual
                                está determinada a
                                trazer de volta para a vida.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/bele.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Beleza Americana</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Sam Mendes</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop81">
                            Ver Mais</a>
                    </div>
                </div>

                <!--- modal 81--->

                <div class="modal fade " id="staticBackdrop81" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Beleza Americana</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesDrama/bele.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Um homem em crise de meia-idade começa a questionar seu estilo de vida e desejos
                                reprimidos, revelando o vazio por trás da fachada da classe média americana.


                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/filha.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">A filha perdida</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Maggie Gyllenhaal</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop82">
                            Ver Mais</a>
                    </div>
                </div>

                <!--- modal 82--->

                <div class="modal fade " id="staticBackdrop82" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Beleza Americana</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesDrama/filha.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Durante férias na Grécia, uma professora universitária começa a confrontar memórias
                                dolorosas de sua maternidade ao observar uma jovem mãe e sua filha. Um retrato intenso
                                da culpa, do instinto materno e da ambiguidade emocional.


                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/her.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Her</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Spike Jonze</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop83">
                            Ver Mais</a>
                    </div>
                </div>

                <!--- modal 83--->

                <div class="modal fade " id="staticBackdrop83" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Her</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesDrama/her.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Um homem solitário se apaixona por uma inteligência artificial, iniciando uma relação
                                profunda e inesperada que questiona os limites do amor e da tecnologia.


                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/kevin.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Precisamos Falar Sobre o Kevin</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Lynne Ramsay</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop84">
                            Ver Mais</a>
                    </div>
                </div>

                <!--- modal 84--->

                <div class="modal fade " id="staticBackdrop84" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Precisamos Falar Sobre o
                                    Kevin</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesDrama/kevin.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Uma mãe luta para lidar com as consequências dos atos violentos de seu filho. O filme
                                explora culpa, maternidade e a natureza do mal.

                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/lista.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> A Lista de Schindler</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Steven Spielberg</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop85">
                            Ver Mais</a>
                    </div>
                </div>

                <!--- modal 85--->

                <div class="modal fade " id="staticBackdrop85" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> A Lista de Schindler</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesDrama/lista.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Baseado em fatos reais, narra a história de Oskar Schindler, um empresário alemão que
                                salvou mais de mil judeus durante o Holocausto.

                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/piano.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> O pianista</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Roman Polanski</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop86">
                            Ver Mais</a>
                    </div>
                </div>

                <!--- modal 86--->

                <div class="modal fade " id="staticBackdrop86" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> O pianista</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesDrama/piano.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Durante a ocupação nazista na Polônia, um talentoso pianista judeu luta para sobreviver
                                em meio à destruição de Varsóvia e à perseguição ao seu povo.

                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/re.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Réquiem para um Sonho </h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Darren Aronofsky</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop87">
                            Ver Mais</a>
                    </div>
                </div>

                <!--- modal 87--->

                <div class="modal fade " id="staticBackdrop87" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Réquiem para um Sonho
                                </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesDrama/piano.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Quatro personagens descem em uma espiral de vício e destruição, mostrando de forma
                                visceral os efeitos devastadores das drogas e da obsessão por sonhos inalcançáveis.

                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesDrama/teoria.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> A Teoria de Tudo </h5>
                        <p class="card-text">
                            <small class="text-body-secondary"> James Marsh</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop88">
                            Ver Mais</a>
                    </div>
                </div>

                <!--- modal 88-->

                <div class="modal fade " id="staticBackdrop88" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> A Teoria de Tudo </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesDrama/teoria.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Baseado na vida do físico Stephen Hawking, o filme acompanha sua luta contra a esclerose
                                lateral amiotrófica (ELA) e seu brilhante trabalho científico, além de explorar sua
                                relação com sua esposa, Jane.

                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>













            <h1 class="fw-bold pt-5">| SUSPENSE</h1>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/clube.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Clube da Luta </h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: David Fincher</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>


                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop48">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 48-->

                <div class="modal fade " id="staticBackdrop48" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Clube da Luta é uma reflexão crítica acerca da sociedade de consumo na qual vivemos e os
                                efeitos que ela
                                provoca nos indivíduos. O filme começa nos mostrando várias marcas famosas e o modo como
                                o protagonista
                                e os demais consomem esses produtos com o objetivo de preencher um vazio interior.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/corra.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Corra!</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Jordan Peele</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>

                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop49">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 49-->

                <div class="modal fade " id="staticBackdrop49" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Com Daniel Kaluuya e Allison Williams no elenco principal, a obra fala sobre um jovem
                                apaixonado que vai
                                viajar para conhecer a família da namorada. Depois do lançamento em 4017, o longa se
                                tornou um enorme
                                sucesso internacional, tendo sido um dos filmes mais comentados e aclamados dos últimos
                                anos.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/ilha.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Ilha do Medo</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Martin Scorsese</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop50">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 50-->

                <div class="modal fade " id="staticBackdrop50" data-bs-backdrop="static" data-bs-keyboard="false"
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
                                Nos anos 1950, a fuga de uma assassina leva o detetive Teddy Daniels e seu parceiro a
                                investigarem o seu
                                desaparecimento de um quarto trancado em um hospital psiquiátrico. Lá, uma rebelião se
                                inicia e o agente
                                terá que enfrentar seus próprios medos.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/seven.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Seven</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: David Fincher</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop51">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 51-->

                <div class="modal fade " id="staticBackdrop51" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                recém-transferido David Mills. Juntos, descobrem uma série de assassinatos e logo
                                percebem que estão
                                lidando com um assassino que tem como alvo pessoas que ele acredita representar os sete
                                pecados
                                capitais.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/garota.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Garota Exemplar</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: David Fincher</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop73">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 73-->

                <div class="modal fade " id="staticBackdrop73" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Garota Exemplar</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesSus/garota.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Quando sua esposa desaparece, Nick Dunne se torna o principal suspeito. O filme segue a
                                busca por respostas, enquanto segredos e mentiras vão sendo revelados.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/invi.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">O Homem Invisível</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Leigh Whannell</small>
                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop74">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 74-->

                <div class="modal fade " id="staticBackdrop74" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">O Homem Invisível</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesSus/invi.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Quando sua ex-namorada morre, Cecilia começa a acreditar que ele ainda está vivo e
                                manipulando sua vida de maneiras assustadoras. Uma história de suspense psicológico com
                                toques de terror.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/olhos.png" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">O Segredo dos Seus Olhos</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Juan José Campanella</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop75">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 75-->

                <div class="modal fade " id="staticBackdrop75" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">O Segredo dos Seus Olhos
                                </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesSus/olhos.png" alt="">
                            </div>
                            <div class="modal-body ">
                                Um oficial de justiça aposentado revisita um caso de assassinato não resolvido de 25
                                anos atrás. O filme mistura elementos de mistério e suspense, enquanto ele se aproxima
                                da verdade.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/cisne.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Cisne Negro</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Darren Aronofsky</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop76">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 76-->

                <div class="modal fade " id="staticBackdrop76" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Cisne Negro</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesSus/cisne.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Uma bailarina ganha o papel principal em uma produção de "O Lago dos Cisnes" e começa a
                                perder o controle sobre sua sanidade enquanto tenta interpretar a complexa personagem.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/frag.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Fragmentado</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: M. Night Shyamalan</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop77">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 77 ufa-->

                <div class="modal fade " id="staticBackdrop77" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Fragmentado</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesSus/frag.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Kevin, um homem com múltiplas personalidades, sequestra três adolescentes. À medida que
                                elas tentam escapar, descobrem que uma das personalidades de Kevin é perigosa e pode ser
                                uma ameaça mortal. O filme é uma mistura de suspense psicológico com elementos de
                                terror.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/pele.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">A pele em que habito</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Pedro Almodóvar</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop78">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 78 nn-->

                <div class="modal fade " id="staticBackdrop78" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">A pele em que habito</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesSus/pele.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Um cirurgião plástico se envolve em um projeto secreto para criar uma pele artificial
                                após perder sua esposa em um acidente. O filme mistura mistério, thriller psicológico e
                                temas perturbadores.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/sile.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">O Silêncio dos Inocentes</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Jonathan Demme</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop79">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 79 nn-->

                <div class="modal fade " id="staticBackdrop79" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">O Silêncio dos Inocentes
                                </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesSus/sile.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Uma jovem agente do FBI recorre a um brilhante e perigoso psiquiatra preso, Hannibal
                                Lecter, para capturar um assassino em série que flutua impune.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesSus/sus.jpg" class="card-img-top card imgcard" alt="..." />


                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Os suspeitos</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Denis Villeneuve</small>
                        </p>
                        <div class="estrela"> ★★★★★</div>
                        <a href="#" class="btn btn-danger btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop80">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 80 nn-->

                <div class="modal fade " id="staticBackdrop80" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Os suspeitos </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesSus/sus.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Quando duas meninas desaparecem, um pai desesperado (Hugh Jackman) decide fazer justiça
                                com as próprias mãos enquanto um detetive (Jake Gyllenhaal) segue pistas complexas em
                                busca da verdade.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h1 class="fw-bold pt-5">| COMÉDIA</h1>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/branca.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">As Branquelas</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Keenen Ivory Wayans</small>

                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop52">Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 52-->
                <div class="modal fade " id="staticBackdrop52" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">As Branquelas</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/branca.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Dois irmãos agentes do FBI, Marcus e Kevin Copeland, acidentalmente evitam que bandidos
                                sejam presos em
                                uma apreensão de drogas. Como castigo, eles são forçados a escoltar um par de socialites
                                nos Hamptons.
                                Quando as meninas descobrem o plano da agência, elas se recusam a ir. Sem opções, Marcus
                                e Kevin, dois
                                homens negros, decidem fingir que são as irmãs e se transformam em um par de loiras.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/beber.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Se Beber, Não Case!</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Todd Phillips</small>
                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop53">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 53-->
                <div class="modal fade " id="staticBackdrop53" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Se beber, não case! </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/beber.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Dois dias antes de seu casamento, Doug e três amigos vão de carro até Las Vegas para uma
                                louca e
                                memorável despedida de solteiro. Quando os três padrinhos acordam na manhã seguinte,
                                eles não conseguem
                                se lembrar de nada e notam que Doug desapareceu. Com pouco tempo de sobra, os amigos
                                tentam refazer a
                                noite anterior e encontrar Doug para que possam levá-lo de volta a Los Angeles a tempo
                                de chegar ao
                                altar.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/escola.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Escola de Rock</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Richard Linklater</small>

                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop54">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 54-->
                <div class="modal fade " id="staticBackdrop54" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Escola de Rock</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/escola.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Depois que o guitarrista Dewey é expulso de sua banda, ele se faz passar por professor
                                de música em uma
                                escola particular. Quando ouve seus alunos tocarem, ele se dá conta de que podem formar
                                uma banda e
                                participar da Batalha das Bandas, na qual ele finalmente terá a chance de se tornar o
                                astro de rock que
                                sempre soube que estava destinado a ser.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/panico.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Todo Mundo em Pânico</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Keenen Ivory Wayans </small>

                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop55">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 55-->
                <div class="modal fade " id="staticBackdrop55" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Todo mundo em pânico </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/panico.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Depois do assassinato de uma bela colega de classe, um grupo de adolescentes
                                desorientados descobre que
                                há um assassino entre eles. A heroína Cindy Campbell e
                                a sua turma de amigos tentam se proteger do perigo, mas Gail Hailstorm, uma repórter
                                irritante,
                                simplesmente não os deixa em paz.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/autocerto.png" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Auto da Compadecida</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Guel Arraes </small>

                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop65">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 65-->
                <div class="modal fade " id="staticBackdrop65" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">O Auto da Compadecida</h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/autocerto.png" alt="">
                            </div>
                            <div class="modal-body ">
                                Baseado na obra de Ariano Suassuna, esse filme mistura comédia e drama e conta a
                                história de João Grilo e Chicó, dois nordestinos que vivem aventuras inusitadas no
                                sertão. Eles enfrentam diversos desafios, incluindo um encontro com a morte e com a
                                Compadecida, que acaba ajudando-os.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/certocerto.png" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Vai que dá certo</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Maurício Farias </small>

                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop66">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 66-->
                <div class="modal fade " id="staticBackdrop66" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Vai que dá certo </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/certocerto.png" alt="">
                            </div>
                            <div class="modal-body ">
                                Um grupo de amigos, todos em situações financeiras complicadas, decide organizar um
                                grande golpe para enriquecer rapidamente. No entanto, a trama vira um verdadeiro caos,
                                com muitos momentos hilários, enquanto os amigos tentam resolver seus próprios problemas
                                de forma inusitada.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/parçacerto.png" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Os Parças 2</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Filippo Nigro </small>

                        </p>
                        <div class="estrela"> ★☆☆☆☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop67">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 67-->
                <div class="modal fade " id="staticBackdrop67" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Os Parças 2 </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/parçacerto.png" alt="">
                            </div>
                            <div class="modal-body ">
                                Na sequência de Os Parças, um grupo de amigos se envolve em uma nova confusão e tenta
                                resolver problemas financeiros de maneira nada convencional. Com muito humor e situações
                                inesperadas, a trama foca em amizade, solidariedade e trapalhadas.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/falaserio.png" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Fala Sério, Mãe! </h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Pedro Vasconcelos </small>

                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop68">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 68-->
                <div class="modal fade " id="staticBackdrop68" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Fala Sério, Mãe! </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/falaserio.png" alt="">
                            </div>
                            <div class="modal-body ">
                                Uma adaptação cinematográfica do livro homônimo de Thalita Rebouças, o filme conta a
                                história de uma adolescente que, em plena fase de rebeldia, se vê lidando com a
                                superproteção de sua mãe, que gera muitas situações engraçadas e tensões familiares.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/mask.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">O Máskara </h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Chuck Russell </small>

                        </p>
                        <div class="estrela"> ★★★★☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop69">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 69-->
                <div class="modal fade " id="staticBackdrop69" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">O Máskara </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/mask.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Stanley Ipkiss, interpretado por Jim Carrey, é um homem comum que encontra uma máscara
                                mágica que o transforma em um personagem irreverente e incontrolável, cheio de
                                superpoderes. Ele utiliza a máscara para lidar com suas frustrações, mas os problemas
                                aumentam quando se mete em confusões com criminosos.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/noiva.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">O Melhor Amigo da Noiva</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Paul Weitz </small>

                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop70">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 70-->
                <div class="modal fade " id="staticBackdrop70" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">O Melhor Amigo da Noiva
                                </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/noiva.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Um homem percebe que está apaixonado pela melhor amiga, justo no momento em que ela está
                                prestes a se casar. Ele tenta impedir o casamento de maneira desajeitada, mas acaba se
                                metendo em diversas situações engraçadas.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/loira.jpg" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold"> Legalmente Loira</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Robert Luketic </small>

                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop71">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 71-->
                <div class="modal fade " id="staticBackdrop71" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel"> Legalmente Loira </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/panico.jpg" alt="">
                            </div>
                            <div class="modal-body ">
                                Elle Woods, uma jovem e vaidosa estudante de moda, decide se inscrever na faculdade de
                                direito de Harvard para reconquistar seu ex-namorado. Contudo, ela acaba descobrindo que
                                tem talento para o direito e surpreende a todos com sua inteligência e determinação.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-3 h-100">
                <div class="card pula h-100 d-flex flex-column">
                    <img src="/img/filmesCom/peçacerto.png" class="card-img-top card imgcard" alt="..." />

                    <div class="card-body text-center flex-grow-1 d-flex flex-column">
                        <h5 class="card-title fw-bold">Minha Mãe é Uma Peça</h5>
                        <p class="card-text">
                            <small class="text-body-secondary">De: Anderson Salles</small>

                        </p>
                        <div class="estrela"> ★★★☆☆</div>
                        <a href="#" class="btn btn-danger fw-bold btn-lg mt-auto" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop72">
                            Ver Mais</a>
                    </div>
                </div>
                <!-- Modal 72-->
                <div class="modal fade " id="staticBackdrop72" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content text-center align-items-center">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Minha Mãe é Uma Peça </h1>
                            </div>
                            <div>
                                <img class="fotomodal" src="/img/filmesCom/peçacerto.png" alt="">
                            </div>
                            <div class="modal-body ">
                                Dona Hermínia, interpretada por Paulo Gustavo, é uma mãe superprotetora e sarcástica que
                                vive com seus filhos. A comédia gira em torno dos problemas familiares e das situações
                                engraçadas que surgem a partir da convivência dessa mãe engraçada e exasperante.
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</html>