<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farm</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">   
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <section class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xl-1 verde-1 element hidden-xs">
                
                    <nav id="menu" class="nav-sidebar">
                        <ul class="nav">
                            <li style="margin:40px 0"><a href="#"><img class="img-center" src="img/detalhe-menu-topo.png" height="21" width="20"></a></li>
                            <li><a href="institucional.php" rel="tooltip" data-placement="right" title="INSTITUCIONAL"><img class="img-center" src="img/icon-home.png" height="26" width="26"></a></li>
                            <li><a href="nossos-servicos.php" rel="tooltip" data-placement="right" title="NOSSOS SERVIÇOS"><img class="img-center" src="img/icon-nossoservico.png" height="26" width="26"></a></li>
                            <li><a href="onde-estamos.php" rel="tooltip" data-placement="right" title="ONDE ESTAMOS"><img class="img-center"src="img/icon-oportunidades.png" height="26" width="26"></a></li>
                            <li><a href="Oportunidades.php" rel="tooltip" data-placement="right" title="Oportunidades"><img class="img-center" src="img/icon-ondeestamos.png" height="26" width="26"></a></li>   
                        </ul>
                    </nav>

                    <nav id="nav-social" class="nav-sidebar">
                        <ul class="nav">
                            <li><a href="planos-faren.php" rel="tooltip" data-placement="right" title="Farem"><img class="img-center" src="img/icon-faren.png" height="26" width="26"></a></li>
                            <li><a href="#" rel="tooltip" data-placement="right" title="LINKEDIN"><img class="img-center" src="img/icon-likedin.png" height="26" width="26"></a></li>
                            <li><a href="contato.php" rel="tooltip" data-placement="right" title="CONTATO"><img class="img-center" src="img/icon-contato.png" height="26" width="26"></a></li> 
                        </ul>
                    </nav>
                
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 element pleft0 pright0">

                    <div id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for Slides -->
                        <div class="carousel-inner">
                            <div class="item item-slider active">
                                <!-- Set the first background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&amp;text=Slide One');"></div>
                                
                            </div>
                            <div class="item item-slider">
                                <!-- Set the second background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&amp;text=Slide Two');"></div>
                                
                            </div>
                            <div class="item item-slider">
                                <!-- Set the third background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&amp;text=Slide Three');"></div>
                                
                            </div>
                        </div>

                    </div>
                    <?php
                        include 'linguagens.php';  // Works.
                    ?>
                    <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://placehold.it/1900x1080/3498db/2980b9" alt="First slide">
                                
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1900x1080/9b59b6/8e44ad" alt="Second slide">
                                
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/1900x1080/34495e/2c3e50" alt="Third slide">
                                
                            </div>
                        </div>
                        
                    </div> -->
                    <div class="main-text hidden-xs">
                        <div id="texto-banner" class="col-lg-4 col-md-6 col-sm-6 col-xl-9 center-block">
                            <h2>Static Headline And Content</h2>
                            <p class="txt-slide">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="clearfix"></div>
                            <div id="icon-down" class="center-block"><a href="#oportunidades" class="scroll"><img src="img/icon-content-banner.png" height="20" width="21"></a></div>
                        </div>    
                    </div>
                    <div id="login">
                     <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="img/icon-login.png" rel="tooltip" data-placement="left" title="ASSINANTES"></a>
                     <ul class="dropdown-menu" style="padding: 15px 0px 15px 15px;min-width: 245px;margin-left:-195px;">
                        <li>
                           <div class="row">
                              <div class="col-md-13">
                                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="form-login">
                                    <h2 class="txt-center">LOGIN</h2>
                                    <div class="form-group">
                                       <label class="sr-only" for="exampleInputEmail2">USUÁRIO</label>
                                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                    </div>
                                    <div class="form-group">
                                       <label class="sr-only" for="exampleInputPassword2">SENHA</label>
                                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success btn-block btn-login">ENVIAR</button>
                                    </div>
                                    <p id="esqueceu-senha" class="txt-center"><a href="#">Esqueci minha Senha</a></p>
                                 </form>



                                 <section id="menu-usuario">
                                    <h2 class="txt-center">EMPRESA</h2>
                                    <p class="dados-usuarios">meuemail@email.com</p>
                                    <p class="dados-usuarios">Plano adquirirdo: FAREM Consulting</p>
                                    <ul  class="nav nav-pills nav-stacked">
                                      <li role="presentation" class="divider"></li>
                                      <li role="presentation"><a href="#">MEU PERFIL</a></li>
                                      <li role="presentation"><a href="#">GED</a></li>
                                      <li role="presentation"><a href="#">RISCO BRASIL</a></li>
                                      <li role="presentation"><a href="#">NETWORK BRASIL</a></li>
                                      <li role="presentation"><a href="#">SAIR</a></li>
                                    </ul>
                                 </section>
                              </div>
                           </div>
                        </li>
                     </ul>
                    </div>
                </div>
            </div>
        </section>
            <nav id="menu-mobile" class="navbar navbar-default visible-xs">
                <div>
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                  </div>
                </div><!--/.container-fluid -->
            </nav>
        <section class="container-fluid">
            <!-- <div id="ancora" class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xl-1 sombra-topo linha-verdeclaro-lateral verde-2 hidden-xs"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 sombra-interna bg-cinza-claro boxex">
                    <h2 class="tit-verde1"><span class="barra1"></span>Portunidades</h2>

                        <section class="vagas">
                            <a class="ver-vagas-disponiveis" data-toggle="modal" data-target="#myModal" href="#"><img src="img/icone-leia-mais-vagas.png" height="22" width="21"></a>
                            <div class="col-md-12 col-xl-12 pleft0">
                                <span class="data-vagas-disponiveis">Sed ut perspiciatis</span>
                                <h3 class="tit-vagas-disponiveis">Lorem ipsum dolor sit amet  </h3>
                                <p class="font14 mbottom0">Rio de Janeiro – RJ – Brasil</p>
                                <p class="font14">agora | Freelancer </p>
                            </div>
                            <div class="clearfix"></div>
                        </section>

                        <section class="vagas">
                            <a class="ver-vagas-disponiveis" data-toggle="modal" data-target="#myModal"><img src="img/icone-leia-mais-vagas.png" height="22" width="21"></a>
                            <div class="col-md-12 col-xl-12 pleft0">
                                <span class="data-vagas-disponiveis">Sed ut perspiciatis</span>
                                <h3 class="tit-vagas-disponiveis">Lorem ipsum dolor sit amet  </h3>
                                <p class="font14 mbottom0">Rio de Janeiro – RJ – Brasil</p>
                                <p class="font14">agora | Freelancer </p>
                            </div>
                            <div class="clearfix"></div>
                        </section>

                        <section class="vagas">
                            <a class="ver-vagas-disponiveis" data-toggle="modal" data-target="#myModal" href="#"><img src="img/icone-leia-mais-vagas.png" height="22" width="21"></a>
                            <div class="col-md-12 col-xl-12 pleft0">
                                <span class="data-vagas-disponiveis">Sed ut perspiciatis</span>
                                <h3 class="tit-vagas-disponiveis">Lorem ipsum dolor sit amet  </h3>
                                <p class="font14 mbottom0">Rio de Janeiro – RJ – Brasil</p>
                                <p class="font14">agora | Freelancer </p>
                            </div>
                            <div class="clearfix"></div>
                        </section>

                        <section class="vagas">
                            <a class="ver-vagas-disponiveis" data-toggle="modal" data-target="#myModal" href="#"><img src="img/icone-leia-mais-vagas.png" height="22" width="21"></a>
                            <div class="col-md-12 col-xl-12 pleft0">
                                <span class="data-vagas-disponiveis">Sed ut perspiciatis</span>
                                <h3 class="tit-vagas-disponiveis">Lorem ipsum dolor sit amet  </h3>
                                <p class="font14 mbottom0">Rio de Janeiro – RJ – Brasil</p>
                                <p class="font14">agora | Freelancer </p>
                            </div>
                            <div class="clearfix"></div>
                        </section>

                        <section class="vagas">
                            <a class="ver-vagas-disponiveis" data-toggle="modal" data-target="#myModal" href="#"><img src="img/icone-leia-mais-vagas.png" height="22" width="21"></a>
                            <div class="col-md-12 col-xl-12 pleft0">
                                <span class="data-vagas-disponiveis">Sed ut perspiciatis</span>
                                <h3 class="tit-vagas-disponiveis">Lorem ipsum dolor sit amet  </h3>
                                <p class="font14 mbottom0">Rio de Janeiro – RJ – Brasil</p>
                                <p class="font14">agora | Freelancer </p>
                            </div>
                            <div class="clearfix"></div>
                        </section>


                        <div class="text-center">
                            <nav id="paginacao-vagas">
                              <ul class="pagination">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true"><<</span>
                                  </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">>></span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 sombra-topo borda-verde1 bg-cinza-claro boxex auto-height">
                    <h2 class="tit-verde1"><span class="barra1"></span>Cadastro</h2>
                    <p>Conheça melhor as formas de se envolver na primeira representação da plataforma 
                        FAREM no Brasil. Envie seu currículo para análise, e vire um consultor da primeira 
                        rede de intenções de negócios internacionais, conectando China, Europa e América Latina. </p>

                    <form id="form-cadastro" class="form" role="form" method="post" action="" accept-charset="UTF-8" >

                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="DIGITE SEU NOME" required name="nome">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="" placeholder="DIGITE SEU E-MAIL" required name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="DIGITE O ENDERÇO DO SEU LINKEDIN" required name="linkedin">
                        </div>
                        <div class="form-group">
                            <button type='button' class='btn btn-verde btn-file btn-corriculo'>ANEXAR CORRÍCULO</button>
                            <input type='file' name="image" class="hidden">
                        </div>
                        <button type="submit" class="btn btn-success btn-verde">ENVIAR</button>
                    </form>    
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="content-modal">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Nome da vaga</h4>
                          </div>
                          <div class="modal-body">
                            <p>Deescrição da vaga:</p>
                            <p>Bacon ipsum dolor amet pancetta shoulder short ribs, chicken picanha andouille jerky 
                                hamburger short loin pastrami chuck. Turducken rump shoulder spare ribs, porchetta bacon 
                                chicken. Swine pork loin boudin pancetta kielbasa beef sirloin bresaola spare ribs flank
                                doner andouille capicola ball tip. Ground round landjaeger biltong doner fatback rump, 
                                t-bone corned beef. </p>

                            <p>Locarização da vaga: Rio de Janeiro, Rj</p>    
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-verde" data-dismiss="modal">FECHAR</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div> -->
             <?php
            include 'include-oportunidades.php';  // Works.
            ?>
            <?php
            include 'rodape.php';  // Works.
            ?>
  </body>
</html>