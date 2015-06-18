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
                            <div id="icon-down" class="center-block"><a href="#ancora" class="scroll"><img src="img/icon-content-banner.png" height="20" width="21"></a></div>
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
          <?php
            include'include-menu-responsivo.php'
          ?>
        <section class="container-fluid">
           <div id="ancora" class="row body">
                <div class="col-lg-1 col-md-1 col-sm-1 linha-verde-lateral sombra-topo verde-3 hidden-xs institucional"></div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 sombra-interna borda-verde2 bg-cinza-escuro boxex institucional">
                    <h2 class="tit-verde2"><span class="barra2"></span>INSTITUCIONAL</h2>
                    <p>O Pacta Sunt Servanda é uma solução empresarial, criada em 2012, para atender ao problema que aflige a maior parte das empresas em expansão – ter uma assistência de qualidade na hora de atuar em mercados internacionais.</p>

                    <p>Migrar para um mercado novo exige, antes de tudo, conhecimento. Acreditamos que quanto mais munido de conhecimento de mercado estiver o empresário, maior será a vida internacional da empresa ou representação equivalente, no longo prazo.</p>

                    <p>Em outras palavras, conhecer o território estrangeiro onde se está pisando é o primeiro passo para poupar gastos operacionais, e com este excedente, reinvestir nas atividades da empresa.</p>

                    <p>Para atingir esse objetivo, o PACTA oferece a opção de um gerenciamento internacional centralizado, unificando serviços de assessoria legal, operações de capitalização, intermediação de parcerias, fusões e aquisições, além da assistência na imersão linguística e cultural de funcionários, contemplando todas as fases do processo de internacionalização.</p>

                    <p>Atendemos tanto empresas de médio e grande porte, que já têm um grau interessante de experiência no mercado interno, quanto empresas pequenas, de cunho inovador, que é o caso das start-ups.</p>
                           

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 sombra-topo borda-verde2 bg-cinza-escuro boxex institucional">
                    <h2 class="tit-verde2"><span class="barra2"></span>O QUE FAZEMOS</h2>
                    <p>Oferecemos pacotes de internacionalização, que abrangem todas as fases do processo, sendo elas:</p>

                    <p>• Compra e Venda Internacional <br/>
                    • Assistência na distribuição do produto (importação e exportação)<br/>
                    • Operações e tributação de remessas internacionais<br/>
                    • Estabelecimento de filiais e representações internacionais</p>

                    <p>Para isso, dispomos de uma equipe dinâmica, e dividida segundo a lógica de áreas de trabalho complementares, que analisam as diferentes facetas de cada etapa do processo, permitindo uma perspectiva abrangente e consolidada sobre a expansão internacional como um todo. Nossos departamentos estão divididos em:</p>
                        

                    <div id="tabs-isntitucional">
                      <div class="col-lg-13 col-md-13 col-sm-13 col-xs-13  bhoechie-tab-container">
                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 bhoechie-tab-menu aba-insti">
                            <div class="list-group">
                              <a href="#" class="list-group-item active">
                               DEPARTAMENTO ECONÔMICO <span class="pull-right">>></span>
                              </a>
                              <a href="#" class="list-group-item">
                                DEPARTAMENTO JURÍDICO <span class="pull-right">>></span>
                              </a>
                              <a href="#" class="list-group-item">
                                DEPARTAMENTO JURÍDICO <span class="pull-right">>></span>
                              </a>
                              <a href="#" class="list-group-item">
                                DEPARTAMENTO HUMANO <span class="pull-right">>></span>
                              </a>
                              <a href="#" class="list-group-item">
                                DEPARTAMENTO FINANCEIRO <span class="pull-right">>></span>
                              </a>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 bhoechie-tab aba-insti pleft5 pright0">
                              <!-- flight section -->
                              <div class="bhoechie-tab-content active">
                                    1
                                    Bacon ipsum dolor amet ham ball tip jowl, spare ribs chicken pork chop bacon. 
                                    Brisket salami tri-tip, bresaola bacon drumstick beef ribs. Pork shoulder turducken 
                                    tri-tip tail ground round, tenderloin frankfurter shankle jowl doner drumstick shank t-bone.
                              </div>
                              <!-- train section -->
                              <div class="bhoechie-tab-content">
                                    2
                                    Bacon ipsum dolor amet ham ball tip jowl, spare ribs chicken pork chop bacon. 
                                    Brisket salami tri-tip, bresaola bacon drumstick beef ribs. Pork shoulder turducken 
                                    tri-tip tail ground round, tenderloin frankfurter shankle jowl doner drumstick shank t-bone.
                              </div>
                  
                              <!-- hotel search -->
                              <div class="bhoechie-tab-content">
                                    3
                                    Bacon ipsum dolor amet ham ball tip jowl, spare ribs chicken pork chop bacon. 
                                    Brisket salami tri-tip, bresaola bacon drumstick beef ribs. Pork shoulder turducken 
                                    tri-tip tail ground round, tenderloin frankfurter shankle jowl doner drumstick shank t-bone.
                              </div>
                              <div class="bhoechie-tab-content">
                                    4
                                    Bacon ipsum dolor amet ham ball tip jowl, spare ribs chicken pork chop bacon. 
                                    Brisket salami tri-tip, bresaola bacon drumstick beef ribs. Pork shoulder turducken 
                                    tri-tip tail ground round, tenderloin frankfurter shankle jowl doner drumstick shank t-bone.
                              </div>
                              <div class="bhoechie-tab-content">
                                    5
                                    Bacon ipsum dolor amet ham ball tip jowl, spare ribs chicken pork chop bacon. 
                                    Brisket salami tri-tip, bresaola bacon drumstick beef ribs. Pork shoulder turducken 
                                    tri-tip tail ground round, tenderloin frankfurter shankle jowl doner drumstick shank t-bone.
                              </div>
                          </div>
                      </div>
                </div>

<div class="clearfix"></div>

                </div>
            </div>
            <?php
            include 'rodape.php';  // Works.
            ?>
  </body>
</html>