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
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css"> 
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
                            <li><a href="Oportunidades.php" rel="tooltip" data-placement="right" title="Oportunidades"><img class="img-center" src="img/icon-ondeestamos.png" height="26" width="26"></a></li>
                            <li><a href="onde-estamos.php" rel="tooltip" data-placement="right" title="ONDE ESTAMOS"><img class="img-center"src="img/icon-oportunidades.png" height="26" width="26"></a></li> 
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
                <div id="ged" class="col-lg-12 col-md-12 col-sm-12 element pleft0 pright0 boxex">
                  <h2 class="tit-verde1"><span class="barra1"></span>ÁREA DE TRANSFERÊNCIA</h2>

                  <form id="form-ged" class="col-lg-4 col-md-5 col-sm-11">
                        <h2 class="text-center">EMVIE MAIS DE 20GB</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="DIGITE SEU NOME" required name="nome">
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                              <option value="">TIPO</option>
                              <option value="">2</option>
                              <option value="">3</option>
                              <option value="">4</option>
                              <option value="">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="DIGITE O ASSUNTO" required name="assunto">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" placeholder="DATA DE VALIDADE" required name="mensagem">
                        </div>
                        <p class="mtop20"><button type='button' class='btn btn-verde btn-file btn-ged'>ANEXAR CORRÍCULO</button>
                                          <input type='file' name="image" class="hidden"></p>
                        <p class=""><button type="button" class="btn btn-verde btn-ged">ENVIAR</button></p>




                  </form>


                    
                </div>
            </div>
        </section>
          <?php
            include'include-menu-responsivo.php'
          ?>
        <section class="container-fluid">
           <div id="ancora" class="row row-eq-height">
                <div class="col-lg-1 col-md-1 col-sm-1 linha-verde-lateral sombra-topo verde-3 hidden-xs "></div>
                <div class="col-lg-12 col-md-12 bordatopverde2 col-sm-12 sombra-interna borda-verde2 bg-cinza-claro boxex">
                    <h2 class="tit-verde1"><span class="barra1"></span>DADOS DE TRANSFERÊNCIA</h2>

                      <div class="table-responsive">

                        <table id="arquivosGed" class="table table-bordred table-striped">
                          <div id="titTabelaGed">
                            <thead>
                              <th class="text-center">ARQUIVO</th>
                              <th class="text-center">NONE</th>
                              <th class="text-center">TIPO</th>
                              <th class="text-center">RESPONSÁVEL</th>
                              <th class="text-center">DATA</th>
                              <th class="text-center">STATUS</th>
                              <th class="nopad"><div id="lixeira-ged"><img src="img/lixeira-ged2.png" height="20" width="17"></div></th>
                            </thead>
                            <div class="clearfix"></div>
                          </div>
                              <tbody>
                              <tr>
                                <td>Lorem ipsun</td>
                                <td>Mohsin Lorem ipsun</td>
                                <td>Contrato</td>
                                <td>fulando de tal</td>
                                <td>02.02.1991</td>
                                <td>uploaded</td>
                                <td><img src="img/lixeira-ged2.png" height="20" width="17"></td>
                              </tr>
                              
                           <tr>
                              <td>Lorem ipsun</td>
                              <td>Mohsin Lorem ipsun</td>
                              <td>Contrato</td>
                              <td>fulando de tal</td>
                              <td>02.02.1991</td>
                              <td>downloaded</td>
                              <td><img src="img/lixeira-ged2.png" height="20" width="17"></td>
                            </tr>
                              
                           <tr>
                              <td>Lorem ipsun</td>
                              <td>Mohsin Lorem ipsun</td>
                              <td>Contrato</td>
                              <td>fulando de tal</td>
                              <td>02.02.1991</td>
                              <td>uploaded</td>
                              <td><img src="img/lixeira-ged2.png" height="20" width="17"></td>
                          </tr>

                           <tr>
                              <td>Lorem ipsun</td>
                              <td>Mohsin Lorem ipsun</td>
                              <td>Contrato</td>
                              <td>fulando de tal</td>
                              <td>02.02.1991</td>
                              <td>uploaded</td>
                              <td><img src="img/lixeira-ged2.png" height="20" width="17"></td>
                           </tr>   
                           <tr>
                              <td>Lorem ipsun</td>
                              <td>Mohsin Lorem ipsun</td>
                              <td>Contrato</td>
                              <td>fulando de tal</td>
                              <td>02.02.1991</td>
                              <td>uploaded</td>
                              <td><img src="img/lixeira-ged2.png" height="20" width="17"></td>
                           </tr>
                              
                              </tbody>
                                  
                          </table>
                        </div>
            .<!-- Generator: Adobe Illustrator 17.0.0, SVG Export Plug-In  -->


                </div>
            </div>
            <?php
            include 'rodape.php';  // Works.
            ?>
            <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
            <script type="text/javascript" src="js/bootstrap-datepicker.pt-BR.min.js"></script>
            <script type="text/javascript">
            $('.datepicker').datepicker({
                language: "pt-BR"
            });
            </script>
            
  </body>
</html>