<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PACTA INTERNATIONAL BUSINESS CENTER</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">   
    <link href="https://code.jquery.com/ui/1.10.3/themes/ui-lightness/jquery-ui.css" rel="stylesheet">   

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
                    <div class="content-menu">
                        <nav id="menu" class="nav-sidebar">
                            <ul class="nav">
                                <li style="margin:40px 0"><a href="#"><img class="img-center" src="img/detalhe-menu-topo.png" height="21" width="20"></a></li>
                                <li><a href="#institucional" class="scroll" rel="tooltip" data-placement="right" title="INSTITUCIONAL"><img class="img-center" src="img/icon-home.png" height="26" width="26"></a></li>
                                <li><a href="#servicos" class="scroll" rel="tooltip" data-placement="right" title="NOSSOS SERVIÇOS"><img class="img-center" src="img/icon-nossoservico.png" height="26" width="26"></a></li>
                                <li><a href="#onde-estamos" class="scroll" rel="tooltip" data-placement="right" title="Oportunidades"><img class="img-center" src="img/icon-ondeestamos.png" height="26" width="26"></a></li> 
                                <li><a href="#oportunidades" class="scroll" rel="tooltip" data-placement="right" title="ONDE ESTAMOS"><img class="img-center"src="img/icon-oportunidades.png" height="26" width="26"></a></li>
                                <li><a href="#contato" class="scroll" rel="tooltip" data-placement="right" title="CONTATO"><img class="img-center" src="img/icon-contato.png" height="26" width="26"></a></li> 
                            </ul>
                        </nav>

                        <nav id="nav-social" class="nav-sidebar">
                            <ul class="nav">
                                <li><a href="http://www.farem.eu" rel="tooltip" data-placement="right" title="Farem" target="_blanck"><img class="img-center" src="img/icon-faren.png" height="26" width="26"></a></li>
                                <li><a href="#" rel="tooltip" data-placement="right" title="LINKEDIN"><img class="img-center" src="img/icon-likedin.png" height="26" width="26"></a></li>
                            </ul>
                        </nav>
                    </div>
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
                                <div class="fill" style="background-image:url('img/banner/contato.jpg');"></div>
                                
                            </div>
                            <div class="item item-slider">
                                <!-- Set the second background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('img/banner/servicos.jpg');"></div>
                                
                            </div>
                            <div class="item item-slider">
                                <!-- Set the third background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('img/banner/oportunidades.jpg');"></div>
                                
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
                            <div id="icon-down" class="center-block"><a href="#plano" class="scroll"><img src="img/icon-content-banner.png" height="20" width="21"></a></div>
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
            <!-- <nav id="menu-mobile" class="navbar navbar-default visible-xs">
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
                      <li ><a href="#institucional">Institucional</a></li>
                      <li><a href="#servicos">Servicos</a></li>
                      <li><a href="#onde-estamos">Onde estamos</a></li>
                      <li><a href="#oportunidades">Oportunidades</a></li>
                      <li><a href="#contato">Contato</a></li>
                    </ul>
                  </div>
                </div>
            </nav> -->
          <?php
            include'include-menu-responsivo.php'
          ?>
        <section class="container-fluid">
           <div id="plano" class="row row-eq-height">
                <div class="col-lg-1 linha-verde-lateral sombra-topo verde-3 hidden-xs"></div>
                <div class="col-lg-12 sombra-interna bordatopverde bg-cinza-escuro boxex">
                    <h2 class="tit-verde2"><span class="barra2"></span>PLANOS <span class="fontitalic">PRO</span>
                        <span class="pull-right">
                            <nav id="etapa-planos">
                              <ul class="pagination-planos">
                                <li>
                                    <span id="etapa" aria-hidden="true">ETAPA</span>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                              </ul>
                            </nav>
                        </span>
                    </h2>

                    <form id="form-plano" class="row" action="" method="post">

                        <div class="col-lg-6 form">
                        
                          <div class="form-group">
                              <input type="text" class="form-control" id="" name="" placeholder="FAMÍLIA DO PRODUTO">
                          </div>
                          <p class="fonthnue margin0">VANTAGEM COMPETITIVAS DO PRODUTO</p>
                          <div class="form-group">
                              <div class="box-etapa4">
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" >
                                    PRODUTOS DE MASSA
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    OUTROS 
                                  </label>
                                </div>
                              </div>
                              <div class="box-etapa4">
                                <div class="radio disabled">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" disabled>
                                    PRODUTO SELECIONANDO
                                  </label>
                                </div>
                                <div class="radio disabled">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" disabled>
                                    PRODUTO DE LUXO
                                  </label>
                                </div>
                              </div>
                              <div class="box-etapa4">
                                <div class="radio disabled">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" disabled>
                                    PRODUTO EXCLUSIVO
                                  </label>
                                </div>
                                <div class="radio disabled">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" disabled>
                                    PRODUTO CUSTOMIZADO
                                  </label>
                                </div>
                              </div>
                              <div class="clearfix"></div>
                          </div>

                          <div class="form-group">
                              <input type="text" class="form-control" id="" name="" placeholder="OUTROS">
                          </div>

                          <div class="form-group">
                          <div class="col-lg-9 nopad fonthnue"> UNIDADE DE FERERÊNCIA PARA SER USADA COM PREÇO DO PRODUTO</div>
                            <div class="col-lg-4 nopad">
                              <select class="form-control">
                                  <option value="" name="">LITRO</option>
                                  <option value="" name="">2</option>
                                  <option value="" name="">3</option>
                                  <option value="" name="">4</option>
                                  <option value="" name="">5</option>
                              </select>
                            </div>
                            <div class="clearfix"></div>
                          </div>              
                          <div class="form-inline forms-duplos">
                            <div class="form-group">
                              <input type="text" class="form-control" id="" name="" placeholder="PREÇO TARGET POR UNIDADE">
                              <input type="text" class="form-control pull-right" id="" name="" placeholder="QUANTIDADE MINIMA EM CADA CONTRATO">
                            </div>
                          </div>
                          

                          <div class="form-group">
                              <input type="text" class="form-control" id="" name="" placeholder="BENEFÍCIOS ESPERADOS ATRAVÉS DESSA INTENÇÃO DE NÉGOCIO">
                          </div>

                        </div>

                        <div class="col-lg-6 col-lg-offset-1">
                          <div class="form-group">
                              <p class="text-uppercase bold fonthnue lheight44">ESTRATÉGIA EMPRESARIAL DE RELACIONAMENTO INTERNACINAL ATUAL</p>
                          </div>

                          <div class="form-group">
                              <select class="form-control">
                                <option>ATRAVÉZ DE CONTATOS DE EXPOSIÇÕES E CONGRESSOS</option>
                                <option>1</option>
                                <option>2</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="" name="" placeholder="OUTROS">
                          </div>
                         
                          <div class="clearfix"></div>
                          
                          <div class="form-group pull-">
                              <button type="submit" class="btn btn-success btn-verde">REVISAO(EDITAR AS ETAPAS PREENCHIDAS)</button>
                          </div>
                          <div class="form-group pull-">
                              <button type="submit" class="btn btn-success btn-verde">IMPRIMIR</button>
                          </div>
                          <div class="form-group pull-">
                              <button type="submit" class="btn btn-success btn-verde">SALVAR / CONCLUIR CADASTRO</button>
                          </div>

                          
                            
                        </div>
                    

                    </form>          

                </div>
               
            </div>
            
            <?php
                include 'rodape.php';  // Works.
            ?>
            <script>
              $(function() {
                $( "#sortable" ).sortable({
                  revert: true
                });
                $( "ul, li" ).disableSelection();

                $( "#precos" ).sortable({
                  revert: true
                });
                
                $( "ul, li" ).disableSelection();
              });
            </script>
  </body>
</html>