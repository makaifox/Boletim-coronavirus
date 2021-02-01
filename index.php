<?php 
    session_start();
    //include './curl.php';
    require './web_scraper.php';
    require './Formulario.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/corona/corona.webp" type="image/x-icon">
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
--><script src="./bootstrap/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    
  

    <title>Boletim Coronavirus</title>


</head>
<body>

<div id="fb-root"></div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v8.0" nonce="9gdaVeOT"></script>

    <header  class="conteiner-fluid " >
    <div class="header-content text-center align-middle">

    <div class="row" id="header-row">   
    
    <div class="col"><img src="./img/logo-boletimcorona.png" class="logo img-fluid" style="max-width: 8rem;" ></div>
    <div class="col ">
            
            <div class="align-middle">Ultima atualização: <?= $hoje; ?></div>

    </div>
    <div class="col social-sup align-middle">
                       
     <!-- youtube -->
     <a href="https://www.youtube.com/channel/UCXgKyvQithT0D1IrEsMMfrg/featured?view_as=subscriber" target="_blank" class="btn-circle">
                   
                   <i class="fa fa-youtube " aria-hidden="true"></i>
                     
                    
        </a>                        
     
      <!-- whatsapp -->
      <a href="https://chat.whatsapp.com/HQ6ES5kycNA8aVJDN3Lnz8M" target="_blank" class="btn-circle">
                          <i class="fa fa-whatsapp " aria-hidden="true"></i>
                                  
                      
                        
        </a>

      <!-- Facebook -->
      <a href="https://web.facebook.com/prefmesquitaboletimcovid19/?_rdc=1&_rdr" target="_blank" class="btn-circle" ><i class="fa fa-facebook " aria-hidden="true"></i>
                          
                         
                          
        </a>

      <!-- instagram -->
      <a href="https://www.instagram.com/prefmesquitacovid19/" target="_blank" class="btn-circle">
                              <i class="fa fa-instagram " aria-hidden="true"></i>
                              
                          
        </a>
      <!-- twitter-->
      <a href="https://twitter.com/mesquitarj" target="_blank" class="btn-circle">  <i class="fa fa-twitter " aria-hidden="true"></i>
                      
                                          
        </a>   
      <!-- linkedin -->
      <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFP7nHAn3Fc9AAAAXaz3ZE4PTkQbqQhtyT6Rs3YE3zECmKttVh0GOBW0aUqnAMGP2L__0Ekrgz5jNcu42QK-NLqLrQRm35pLuCg6iyT0UGunPrlloS9oOBGJ_I8Rp0gUXQ5Tpw=&originalReferer=http://www.mesquita.rj.gov.br/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fprefeitura-de-mesquita-boletim-coronav%25C3%25ADrus%2F" target="_blank" class="btn-circle">
                      <i class="fa fa-linkedin-square " aria-hidden="true"></i>
                   
        </a>



    </div>
            
</div>
            
            
        </div>  

        
        <div id="carouselBanner" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/banner.jpg" alt="banner1" >
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="./img/banner.jpg" alt="banner2" >
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="./img/banner.jpg" alt="banner3" >
    </div>
  </div>
</div>
    <script>
        $('.carousel').carousel({
    interval: 5000
    })
        </script>
        

        
        
        <nav class=" navbar-expand-lg purple-bar d-flex " id="navbar_top" >
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon "><i class="fa fa-navicon" alt="banner" class="toggler"></i></span>
            </button>
                <div class="#navbar_top collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto order-0 ">
                    <li class="nav-item princ"><a class="nav-link princ" href="#fb-root"> <i class="fa fa-home"></i> Inicio</a></li>
                    <li class="nav-item princ"><a class="nav-link princ" href="#fb-root"> <i class="fa fa-tachometer"></i> Vacinômetro e Transparência</a></li>
                    <li class="nav-item princ"><a class="nav-link princ" href="#sobre"><i class="fa fa-university"></i> sobre o portal</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle princ" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-heartbeat"></i> COVID-19</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#COVID" > <i class="fa fa-angle-right" data-target="#collapseOne" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne"> Prevenção</i></a>
                            <a class="dropdown-item" href="#COVID" data-target="#collapseTwo"> <i class="fa fa-angle-right" data-target="#collapseTwo" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo"> Transmissão</i></a>
                            <a class="dropdown-item" href="#COVID" data-target="#collapseThree"> <i class="fa fa-angle-right" data-target="#collapseThree" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree"> Sintomas</i></a>
                            <a class="dropdown-item" href="#COVID" data-target="#collapseFourth"> <i class="fa fa-angle-right" data-target="#collapseFourth" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFourth"> Atendimento</i></a>
                            <a class="dropdown-item" href="#sintomas"> <i class="fa fa-angle-right" data-target="#collapseFive" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFive"> Tratamento</i></a>
                            <a class="dropdown-item" href="#sintomas"> <i class="fa fa-angle-right" data-target="#collapseSix" data-toggle="collapse" aria-expanded="false" aria-controls="collapseSix"> Grupo de risco</i></a>
                        </div>
                    </li>

                    <li class="nav-item princ"><a class="nav-link princ" href="#grafico"> <i class="fa fa-bar-chart"></i> Gráfico de Contaminação</a></li>
                    <li class="nav-item princ"><a class="nav-link princ" href="#noticias"> <i class="fa fa-newspaper-o"></i> Ultimas notícias</a></li>
                        <li class="nav-item princ"><a class="nav-link princ" href="#fale_conosco"> <i class="fa fa-comment"></i> Fale conosco</a></li>
                
                    </ul>
                </div>
        </nav>


    </header>

    <div class="cards  d-flex justify-content-around" >
        

                <div class="cards  d-flex justify-content-around ">
                
                <h1 class="display-4">Vacinômetro e Transparência<br>
                <p class="p-in-h1">Fonte dos dados:<br>
                <a class="info-red" href="http://vacinometro.mesquita.rj.gov.br/vacin_metro_chart.php" target="_blank">http://vacinometro.mesquita.rj.gov.br/</a>
                <a class="info-red" href="http://coronavirus.mesquita.rj.gov.br/coronaapp1_list.php" target="_blank">http://coronavirus.mesquita.rj.gov.br/</a>
                </p>
		<p style="color: #ff0000;"  class="p-in-h1">Dados coletados a partir da data : 02/03/2020</p>
                 </h1>   
                </div>
</div>


        
    <div class="cards  d-flex justify-content-around">
        <div class="row d-flex justify-content-around  card-contain ">
        
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 card-mob">
                        <div class="card-box bg-white">
                            <div class="inner">
                                <h3 class="red" > 3.170 </h3>
                                <p class="red" > VACINAS RECEBIDAS </p>
                                <h3 class="orange"> 1510 </h3>
                                <p class="orange"> últimas doses recebidas: 25-01-2021* </p>
                            </div>
                            <div class="icon">
                            <i class="fa fa-users"></i>
                            </div>
                            
                        </div>
                    </div>
        
                    <div class="col-lg-4 col-sm-6 card-mob ">
                        <div class="card-box bg-white">
                            <div class="inner">
                            <h3 class="orange"> <?php echo $vac1; ?> </h3>
                                <p class="orange"> PESSOAS VACINADAS </p>
                                <h3 class="orange"> 603 </h3>
                                <p class="orange">  maior quantitativo de vacinas aplicadas no mesmo local* </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            
                        </div>
                    </div>
        
                    <div class="col-lg-4 col-sm-6 card-mob">
                        <div class="card-box bg-white">
                            <div class="inner">
                            <h3 class="red"> 58000 </h3>
                                <p class="red"> SERINGAS RECEBIDAS </p>
                                <h3 class="orange"> 1510 </h3>
                                <p class="orange"> seringas utilizadas até o momento*  </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            
                        </div>
                    </div>
        

        
                                
                            
                </div>
            </div>
        </div>
    </div>
        
        
        


    <div class="container-fluid .horizontal-center  ultimos">
        
<div class="cards  d-flex justify-content-around">
                <div class="row d-flex justify-content-around  card-contain ">


    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 card-mob">
                <div class="card-box bg-white">
                    <div class="inner">
                        <h3> <?= $dadosTotais['confirmados']; ?> </h3>
                        <p> Casos Confirmados </p>
                        <h3> <?= $replace['confirmadosHoje']; ?> </h3>
                        <p> informados no dia <?= $hoje; ?>  </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 card-mob ">
                <div class="card-box bg-white">
                    <div class="inner">
                    <h3> <?= $dadosTotais['obitos']; ?> </h3>
                        <p> Total de Óbitos </p>
                        <h3> <?= $replace['obitosHoje']; ?> </h3>
                        <p>  informados no dia <?= $hoje; ?>  </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 card-mob">
                <div class="card-box bg-white">
                    <div class="inner">
                    <h3> <?= $dadosTotais['suspeitosComTeste']; ?> </h3>
                        <p> Suspeitos com Teste </p>
                        <h3> <?= $replace['suspeitosTesteHoje']; ?> </h3>
                        <p> informados no dia <?= $hoje; ?>  </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 card-mob">
                <div class="card-box bg-white">
                    <div class="inner">
                    <h3> <?= $dadosTotais['descartadosComTeste']; ?> </h3>
                        <p> Descartados com Teste </p>
                        <h3> <?= $replace['descartadosTesteHoje']; ?> </h3>
                        <p> informados no dia <?= $hoje; ?>  </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 card-mob">
                <div class="card-box bg-white">
                    <div class="inner">
                    <h3> <?= $dadosTotais['descartados']; ?> </h3>
                        <p> Descartados </p>
                        <h3> <?= $replace['descartadosHoje']; ?> </h3>
                        <p> informados no dia <?= $hoje; ?>  </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 card-mob">
                <div class="card-box bg-white">
                    <div class="inner">
                    <h3> <?= $dadosTotais['descartadosClinicos']; ?> </h3>
                        <p> Descartados Clinicos </p>
                        <h3> <?= $replace['descartadosClinicosHoje']; ?> </h3>
                        <p> informados no dia <?= $hoje; ?>  </p>
                    </div>
                    <div class="icon" id="sobre">
                        <i class="fa fa-users"></i>
                    </div>
                    
                </div>
            </div>

                        
                    
                </div>
            </div>
        </div>
    </div>



<!--

            
                    <div class="card casos-confirmados cards-dados">
                        <h4 class="card-title total-mortos-titulo">Casos Confirmados</h4>
                        <div class="card-content">
                           
                                    <span class="align-middle total-mortos-titulo">TOTAL:</span>
                                    <span class="align-middle"><?= $mesquita['confirmed']; ?></span>
                                   
                                    <span class="align-middle total-mortos-titulo dia">NO DIA <?= $hoje; ?> </span>
                                    <span class="align-middle"><?= $confirmadosHoje; ?></span>
                            
                        </div>     
                    </div>

                    <div class="card cards-dados">
                        <h4 class="card-title total-mortos-titulo " >Total de Óbitos<br></h4>
                        <div class="card-content">
                           
                                    <span class="align-middle total-mortos-titulo">Total</span><br>
                                    <span class="align-middle"><?= $mesquita['deaths']; ?></span>
                                   
                                    <span class="align-middle total-mortos-titulo dia">no dia <?= $hoje; ?> </span><br>
                                    <span  class="align-middle"><?= $obitosHoje; ?></span>
                                
                            
                        </div>
                    </div>

                    <div class="card cards-dados ">
                        <h4 class="card-title total-mortos-titulo">Taxa % de Mortalidade</h4>
                        <div class="card-content">
                           
                                    <span class="align-middle total-mortos-titulo">Total</span><br>
                                    <span class="align-middle"><?= $mesquita['death_rate'].' %'; ?></span>
                                   
                                    <span class="align-middle total-mortos-titulo dia">no dia <?= $hoje; ?> </span><br>
                                    <span class="align-middle"><?= $mesquita['death_rate'].' %'; ?></span>
                                
                           
                        </div>
                    </div>

                    


                    <div class="card cards-dados ">
                        <h4 class="card-title total-mortos-titulo">Suspeitos com Teste</h4>
                        <div class="card-content">
                           
                                    <span class="align-middle total-mortos-titulo">Total</span><br>
                                    <span class="align-middle"><?= $suspeitosComTeste; ?></span>
                                   
                                    <span class="align-middle total-mortos-titulo dia">no dia <?= $hoje; ?> </span><br>
                                    <span  class="align-middle"><?= $suspeitosTesteHoje; ?></span>
                                
                            
                        </div>
                    </div>

                    <div class="card  cards-dados">
                        <h4 class="card-title total-mortos-titulo">Descartados com Teste</h4>
                        <div class="card-content">
                           
                                    <span class="align-middle total-mortos-titulo">Total</span><br>
                                    <span class="align-middle"> <?= $descartadosComTeste; ?></span>
                                   
                                    <span class="align-middle total-mortos-titulo dia">no dia <?= $hoje; ?> </span><br>
                                    <span  class="align-middle"><?= $descartadosTesteHoje; ?></span>
                                
                            
                        </div>
                    </div>

                    <div class="card  cards-dados">
                        <h4 class="card-title total-mortos-titulo">Descartados<br></h4>
                        <div class="card-content">
                           
                                    <span class="align-middle total-mortos-titulo">Total</span><br>
                                    <span class="align-middle"><?= $descartados; ?></span>
                                   
                                    <span class="align-middle total-mortos-titulo dia">no dia <?= $hoje; ?> </span><br>
                                    <span class="align-middle"><?= $descartadosHoje; ?></span>
                               
                            
                        </div>
                    </div>
                    
                    <div class="card cards-dados ">
                        <h4 class="card-title total-mortos-titulo">Descartados Clinicos</h4>
                        <div class="card-content">
                           
                                    <span class="align-middle total-mortos-titulo">Total</span><br>
                                    <span class="align-middle"><?= $descartadosClinicos; ?></span>
                                   
                                    <span class="align-middle total-mortos-titulo dia">no dia <?= $hoje; ?> </span><br>
                                    <span ><?= $descartadosClinicosHoje; ?></span>
                                
                            
                        </div>
                    </div>
-->
                </div>
                </div>
    </div>

    <div class=" horizontal-center">
        <div class="card"> 
            <div class="cards  d-flex justify-content-around" >
                    
                <h1 class="display-4 sobreTitulo">Sobre o portal</h1>
                
            </div>
        
            <div class="card-body sobre" >
                    <p>O Boletim Coronavírus é um site de acesso livre, 
                    onde o cidadão mesquitense pode encontrar informações sobre dados da Covid-19 no município e seus assuntos relacionados. 
                    Seu conteúdo é atualizado diariamente, para informar a população de maneira eficiente.
                    </p> 
            </div> 

            </div>

        </div> 
    </div>     
        










 


        

<!------------------------- noticias  ----------------------------------------->
    <div id="noticias" ></div>
    <br>
    <div class=" horizontal-center">
        <div class="card"> 
                <div>
            <div class="cards  d-flex justify-content-around" >
                
                <h1 class="display-4 noticiasTitle">Ultimas notícias</h1>
                        
            </div>
            
            <div class="container cta-100 ">
                <div class="container">
                <div class="row blog">
                    <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                        <li data-target="#blogCarousel" data-slide-to="2"></li>
                        <li data-target="#blogCarousel" data-slide-to="3"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                        <div id="#banner" class="carousel-item active">
                            <div class="row">
                            <div class="col-md-4 slider" >
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Date-->
                                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $date1;?></span> </div>
                                    <!--Image-->
                                    <figure > <?= $img1; ?> </figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="<?=$link1;?>" target="_blank" tabindex="0">
                                        <h5 class="h6"><?=$title1;?></h5>
                                    </a>
                                    </div>
                                    <!--Data-->
                                    <div class="item-box-blog-data" style="padding: px 15px;">
                                    
                                    </div>
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $content1;?></p>
                                    </div>
                                    <div class="mt"> <a href="<?=$link1;?>"  tabindex="0" target="_blank" class="btn bg-blue-ui white read">leia mais</a> </div>
                                    <!--leia mais Button-->
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 slider" >
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Date-->
                                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $date2;?></span> </div>
                                    <!--Image-->
                                    <figure > <?= $img2;?> </figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="<?=$link2;?>" target="_blank" tabindex="0">
                                        <h5 class="h6"><?= $title2;?></h5>
                                    </a>
                                    </div>
                                    <!--Data-->
                                    <div class="item-box-blog-data" style="padding: px 15px;">
                                    
                                    </div>
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $content2;?></p>
                                    </div>
                                    <div class="mt"> <a href="<?=$link2;?>" tabindex="0" target="_blank" class="btn bg-blue-ui white read">leia mais</a> </div>
                                    <!--leia mais Button-->
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4 slider" >
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Date-->
                                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $date3;?></span> </div>
                                    <!--Image-->
                                    <figure > <?= $img3;?> </figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="<?=$link3;?>" target="_blank" tabindex="0">
                                        <h5 class="h6"><?= $title3;?></h5>
                                    </a>
                                    </div>
                                    <!--Data-->
                                    <div class="item-box-blog-data" style="padding: px 15px;">
                                    
                                    </div>
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $content3;?></p>
                                    </div>
                                    <div class="mt"> <a href="<?=$link3;?>" tabindex="0" target="_blank" class="btn bg-blue-ui white read">leia mais</a> </div>
                                    <!--leia mais Button-->
                                </div>
                                </div>
                            </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item -->
                        <div class="carousel-item ">
                            <div class="row">
                            <div class="col-md-4 slider" >
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Date-->
                                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $date4;?></span> </div>
                                    <!--Image-->
                                    <figure > <?= $img4;?> </figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="<?=$link4;?>" target="_blank" tabindex="0">
                                        <h5 class="h6"><?= $title4;?></h5>
                                    </a>
                                    </div>
                                    <!--Data-->
                                    <div class="item-box-blog-data" style="padding: px 15px;">
                                    
                                    </div>
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $content4;?></p>
                                    </div>
                                    <div class="mt"> <a href="<?=$link4;?>" tabindex="0" target="_blank" class="btn bg-blue-ui white read">leia mais</a> </div>
                                    <!--leia mais Button-->
                                </div>
                                </div>
                                
                            </div>
                            <div class="col-md-4 slider" >
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Date-->
                                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $date5;?></span> </div>
                                    <!--Image-->
                                    <figure > <?= $img5;?> </figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="<?=$link5;?>" target="_blank" tabindex="0">
                                        <h5 class="h6"><?= $title5?></h5>
                                    </a>
                                    </div>
                                    <!--Data-->
                                    <div class="item-box-blog-data" style="padding: px 15px;">
                                    
                                    </div>
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $content5;?></p>
                                    </div>
                                    <div class="mt"> <a href="<?=$link5;?>" tabindex="0" target="_blank" class="btn bg-blue-ui white read">leia mais</a> </div>
                                    <!--leia mais Button-->
                                </div>
                                </div>
                                
                            </div>
                            <!-----------------------------------------------------------------------copiar daqui ----------------------------------------------------------------------->
                            <div class="col-md-4 slider" >
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Date-->
                                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $date6;?></span> </div>
                                    <!--Image-->
                                    <figure > <?= $img6;?></figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="<?=$link6;?>" target="_blank" tabindex="0">
                                        <h5 class="h6"><?= $title6;?></h5>
                                    </a>
                                    </div>
                                    <!--Data-->
                                    <div class="item-box-blog-data" style="padding: px 15px;">
                                    
                                    </div>
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $content6;?></p>
                                    </div>
                                    <div class="mt"> <a href="<?=$link6;?>" tabindex="0" target="_blank" class="btn bg-blue-ui white read">leia mais</a> </div>
                                    <!--leia mais Button-->
                                </div>
                                </div>
                                
                            </div>

                            <!-----------------------------------------------------------------------copiar até aqui ----------------------------------------------------------------------->
                            <!--.row-->
                            
                        </div>
                        
                        <!--.item-->
                        </div>
                        


                        <!--.item -->
                        <div class="carousel-item ">
                            <div class="row">
                            <div class="col-md-4 slider" >
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Date-->
                                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $date7;?></span> </div>
                                    <!--Image-->
                                    <figure > <?= $img7;?> </figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="<?=$link7;?>" target="_blank" tabindex="0">
                                        <h5 class="h6"><?= $title7;?></h5>
                                    </a>
                                    </div>
                                    <!--Data-->
                                    <div class="item-box-blog-data" style="padding: px 15px;">
                                    
                                    </div>
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $content7;?></p>
                                    </div>
                                    <div class="mt"> <a href="<?=$link7;?>" tabindex="0" target="_blank" class="btn bg-blue-ui white read">leia mais</a> </div>
                                    <!--leia mais Button-->
                                </div>
                                </div>
                                
                            </div>
                            <div class="col-md-4 slider" >
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Date-->
                                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $date8;?></span> </div>
                                    <!--Image-->
                                    <figure > <?= $img8;?> </figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="<?=$link8;?>" target="_blank" tabindex="0">
                                        <h5 class="h6"><?= $title8?></h5>
                                    </a>
                                    </div>
                                    <!--Data-->
                                    <div class="item-box-blog-data" style="padding: px 15px;">
                                    
                                    </div>
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $content8;?></p>
                                    </div>
                                    <div class="mt"> <a href="<?=$link8;?>" tabindex="0" target="_blank" class="btn bg-blue-ui white read">leia mais</a> </div>
                                    <!--leia mais Button-->
                                </div>
                                </div>
                                
                            </div>
                            <!-----------------------------------------------------------------------copiar daqui ----------------------------------------------------------------------->
                            <div class="col-md-4 slider" >
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Date-->
                                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $date9;?></span> </div>
                                    <!--Image-->
                                    <figure > <?= $img9;?></figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="<?=$link9;?>" target="_blank" tabindex="0">
                                        <h5 class="h6"><?= $title9;?></h5>
                                    </a>
                                    </div>
                                    <!--Data-->
                                    <div class="item-box-blog-data" style="padding: px 15px;">
                                    
                                    </div>
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $content9;?></p>
                                    </div>
                                    <div class="mt"> <a href="<?=$link9;?>" tabindex="0" target="_blank" class="btn bg-blue-ui white read">leia mais</a> </div>
                                    <!--leia mais Button-->
                                </div>
                                </div>
                                
                            </div>

                            <!-----------------------------------------------------------------------copiar até aqui ----------------------------------------------------------------------->
                            <!--.row-->
                            
                        </div>
                        
                        <!--.item-->
                        </div>
                        

                        <!--.item -->
                        <div class="carousel-item ">
                            <div class="row">
                            <div class="col-md-4 slider" >
                                <div class="item-box-blog">
                                <div class="item-box-blog-image">
                                    <!--Date-->
                                    <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?= $date10;?></span> </div>
                                    <!--Image-->
                                    <figure > <?= $img10;?> </figure>
                                </div>
                                <div class="item-box-blog-body">
                                    <!--Heading-->
                                    <div class="item-box-blog-heading">
                                    <a href="<?=$link10;?>"target="_blank"  tabindex="0">
                                        <h5 class="h6"><?= $title10;?></h5>
                                    </a>
                                    </div>
                                    <!--Data-->
                                    <div class="item-box-blog-data" style="padding: px 15px;">
                                    
                                    </div>
                                    <!--Text-->
                                    <div class="item-box-blog-text">
                                    <p><?= $content10;?></p>
                                    </div>
                                    <div class="mt"> <a href="<?=$link10;?>" tabindex="0" target="_blank" class="btn bg-blue-ui white read">leia mais</a> </div>
                                    <!--leia mais Button-->
                                </div>
                                </div>
                                
                            </div>
                            
                            <!-----------------------------------------------------------------------copiar daqui ----------------------------------------------------------------------->
                            

                            <!-----------------------------------------------------------------------copiar até aqui ----------------------------------------------------------------------->
                            <!--.row-->
                            
                        </div>
                        
                        <!--.item-->
                        </div>
                        
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------------------fim noticias----------------------------------->


<div class="card"> 
        <div class=" d-flex justify-content-around" id="COVID">
                <h1 class="display-4">COVID-19</h1>
            </div>
        <div id="accordion_COVID19">
<div class="container ">
    <div id="accordion" class="accordion">
        <div class="card mb-0">
            <div class="card-header collapsed " data-toggle="collapse"  href="#collapseOne" id="prevencao"> 
                <a class="card-title "> Prevenção </a>
            </div>
            <div id="collapseOne" class="card-body collapse  prevencao" data-parent="#accordion">
            <p class="prevencao-p">
            A recomendação principal para prevenir a covid-19 é ficar em casa e evitar aglomerações. 
            É essencial sempre lavar bem as mãos e os pulsos, por completo, com água e sabão, 
            ou desinfetá-las com álcool em gel – nesse caso, a indicação é que o produto seja o álcool 70, isto é, 
            composto de 70% de etanol. Em casa, no trabalho ou em meios de transporte coletivos, 
            sempre que possível, mantenha as janelas abertas e os locais ventilados. 
            Não compartilhe objetos como copos, louças e talheres e higienize suas mãos sempre após tocar em superfícies que possam estar infectadas,
             como maçanetas, corrimãos etc. 
             E não se esqueça de usar sempre uma máscara individual de proteção facial, deixando boca e nariz cobertos, quando precisar sair de casa.
                </p>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" id="transmissao">
                <a class="card-title"> Transmissão </a>
            </div>
            <div id="collapseTwo" class="card-body collapse sintomas-container sintomas" data-parent="#accordion">
            <p>
            A transmissão do novo coronavírus ocorre pelo ar ou por contato pessoal com secreções contaminadas. 
            Como, por exemplo, gotículas de saliva, espirro, tosse e catarro. No caso do contato pessoal, 
            toque ou aperto de mão e o contato com objetos ou superfícies contaminadas, seguidos de contato com a boca,
             nariz ou olhos, podem causar a transmissão.
                                </p>
                                 
                            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" id="sintomas">
                <a class="card-title">Sintomas da covid-19</a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body prevencao-container prevencao"><p>
                Os mais comuns são febre, perda de olfato, perda de paladar, tosse e/ou dificuldade para respirar. 
                Há pacientes que apresentam cansaço, dores no corpo, mal-estar, congestão nasal, dor de garganta e outros sintomas comuns de uma gripe.

                                </p>
            </div>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFourth" id="atendimento">
                <a class="card-title">Atendimento</a>
            </div>
            <div id="collapseFourth" class="collapse" data-parent="#accordion">
            <div class="card-body tratamento-container tratamento">
            
                                <p>
                                As unidades municipais de saúde estão funcionando normalmente. 
                                Além disso, para intensificar o combate ao novo coronavírus na cidade, a Prefeitura de Mesquita tem um polo de atendimento exclusivo para covid-19. 
                                O espaço funciona de segunda a sábado, das 8h às 18h, dentro da Vila Olímpica. 
                                O endereço é Avenida Baronesa de Mesquita s/nº, no Cosmorama. </p>
                            </div>
                            </div>
                            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" id="tratamento">
                <a class="card-title">Tratamento para a covid-19</a>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
                <div class="card-body prevencao-container prevencao"><p>
                
                Não existe um tratamento específico. 
                A principal indicação para os casos mais leves é o repouso e o consumo de bastante água. 
                Além disso, tratam-se os sintomas, conforme cada caso. 
                É importante que o paciente se mantenha em quarentena, evitando tanto a contaminação de outras pessoas quanto o risco de ser acometido por alguma outra virose que prejudique sua recuperação.  </p>
                </div>                
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" id="gruporisco">
                <a class="card-title">Grupos de risco</a>
            </div>
            <div id="collapseSix" class="collapse" data-parent="#accordion">
                <div class="card-body sintomas-container sintomas" ><p>
                Todos estão sujeitos a contrair o novo coronavírus, mas a covid-19 pode se manifestar de forma mais agressiva, 
                principalmente, nos idosos, diabéticos, hipertensos, gestantes, cardíacos e acometidos por doenças respiratórias crônicas. Também é considerado grupo de risco o de pessoas que estão com a imunidade comprometida, 
                como pacientes em tratamento oncológico ou que convivem com HIV.
                                </p>
                                </div>             
            </div>


        </div>
            </div>
        </div>
    </div>
</div>


    <div id="grafico" ></div>
        <br>
        <br>
    
       <div class="card"> 
            <div class=" d-flex justify-content-around" >
                <h1 class="display-4">Gráfico de Contaminação</h1>
            </div>
       
            <div class="card-body grafico">
                    
            <h4>Dados exclusivamente de Mesquita/Rj<br><br> atualizados mensalmente!<br>
             Fonte dos Dados: <a href="http://coronavirus.mesquita.rj.gov.br/coronaapp1_list.php">http://coronavirus.mesquita.rj.gov.br/coronaapp1_list.php</a></h4>
                <canvas id="myChart"></canvas>

            </div>
        </div>       


        <div id="fale_conosco" ></div>
        <br>
        <br>


        <div class="card"> 
            <div class=" d-flex justify-content-around" >
                <h1 class="display-4">Fale Conosco</h1>
            </div>
    
            <div class="card-body fale-conosco">

                <form action="form_action.php" class="form" method="POST">
                    <div class="row">

                        <div class="col">
                            
                            <div class="form-group">
                                <label for="nome">Nome Completo:</label><br>
                                <input type="text" name="nome" class="form-control" placeholder="Nome completo" required>
     
                            </div>
                            <br>
                    
                           

                            <div class="form-group">   
                                <label for="tel">Telefone:</label><br>
                                <input type="text" name="tel" class="form-control" id="celular" placeholder="21999999999." onkeypress="$(this).mask('(00) 00000.0000');" required><br>
                                
                            </div> 

                            

                            <div class="form-group">   
                                <label  for="sexo">Sexo:</label><br>
                                <select name="sexo" class="form-control option" required>
                                    <option value="Selecione">Selecione seu sexo</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                    <option value="Não Binário">Não Binário</option>
                                    <option value="Cisgênero">Cisgênero</option>
				                    <option value="Outros">Outros</option>
                                    
                                </select><br>
                                
                            </div>

    
                            
                           
                        </div>

                        <div class="col">

                        <div class="form-group">
                                <label for="email">Email:</label><br>
                                <input style="padding: 12px;" type="text" name="email" class="form-control" placeholder="exemplo@exemplo.com.br" required><br>
                                
                            </div> 

                            <div class="form-group">   
                                <label for="nascimento">Data de nascimento:</label><br>
                                <input type="date"  class="form-control" name="nascimento" required><br>
                                
                            </div> 

                            <div class="form-group">   
                                <label for="endereco">Endereço:</label><br>
                                <input type="text"  class="form-control" name="endereco" placeholder="Rua exemplo, 10" required><br>
                               

                                <label for=""></label>
                            </div>
                            </div>
                        
                        </div>
                        <label  for="cep">Cep:</label><br>
                        <input style="margin-bottom: 10px;" placeholder="21999999" type="text" name="cep" onkeypress="$(this).mask('00000-000');" required>

                            <div class="form-group">   
                                <label  for="motivo">Motivo do contato:</label>
                                <select style="width: 100%;" name="motivo" class="form-control option motivo">
                                
                                    <option value="Selecione">Selecione o motivo</option>
                                    <option value="denuncia">Denuncia</option>
                                    <option value="duvida">Dúvidas</option>
                                    <option value="elogios">Elogios</option>
                                    <option value="solicitação">Solicitação</option>
                                    <option value="sugestao">Sugestão</option>
                                    <option value="outros">Outros</option>
                                </select><br>
                            </div>
                        
                            <div class="form-group">   
                                <label for="mensagem">Deixe sua mensagem:</label><br>
                                <textarea name="mensagem" class="form-control"  cols="20" rows="7" placeholder="Envie sua sugestção" required></textarea><br>
                                
                            </div> 

		
                <div class="  justify-content-around">
			<div class="row">
				<div class="col">
				<button style="cursor: pointer;" type="button" class="btn-lg btn-color clear">Limpar</button>
                   

                 </div>
				<div class="col">
                    <button type="submit" class="btn-lg btn-color">Enviar</button>
                </div>
				
				</div>
                </form>
            </div>       

        </div>


</div>
</div>





<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
      <h5 class="font-weight-bold text-uppercase mb-4" >Menu Principal </h5>

        <!-- Content -->
        
        <ul class="navbar-nav mx-auto order-0 ">
        <li class="nav-item princ"><a class="nav-link princ" href="#inicio"> <i class="fa fa-home"></i> Inicio</a></li>
                    <li class="nav-item princ"><a class="nav-link princ" href="#sobre"><i class="fa fa-university"></i> sobre o portal</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle princ" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-heartbeat"></i> COVID-19</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#prevencao"> <i class="fa fa-angle-right"></i> Prevenção</a>
                            <a class="dropdown-item" href="#transmissao"> <i class="fa fa-angle-right"></i> Transmissão</a>
                            <a class="dropdown-item" href="#sintomas"> <i class="fa fa-angle-right"></i> Sintomas</a>
                            <a class="dropdown-item" href="#atendimento"> <i class="fa fa-angle-right"></i> Atendimento</a>
                            <a class="dropdown-item" href="#tratamento"> <i class="fa fa-angle-right"></i> Tratamento</a>
                            <a class="dropdown-item" href="#gruporisco"> <i class="fa fa-angle-right"></i> Grupo de risco</a>
                        </div>
                    </li>

                    
                    <li class="nav-item princ"><a class="nav-link princ" href="#grafico"> <i class="fa fa-bar-chart"></i> Gráfico de Contaminação</a></li>
                    <li class="nav-item princ"><a class="nav-link princ" href="#noticias"> <i class="fa fa-newspaper-o"></i> Ultimas notícias</a></li>
                        <li class="nav-item princ"><a class="nav-link princ" href="#fale_conosco"> <i class="fa fa-comment"></i> Fale conosco</a></li>
                
                    </ul>

                    <br>
                    <br>
                    
                    <h5 class="font-weight-bold text-uppercase mb-4" >SIGA NOSSAS REDES </h5>

                    <div class="col social-sup align-middle">
                       
                       <!-- youtube -->
                       <a href="https://www.youtube.com/channel/UCXgKyvQithT0D1IrEsMMfrg/featured?view_as=subscriber"  target="_blank" class="btn-circle">
                                     
                                     <i class="fa fa-youtube " aria-hidden="true"></i>
                                       
                                      
                          </a>                        
                       
                        <!-- whatsapp -->
                        <a href="https://chat.whatsapp.com/HQ6ES5kycNA8aVJDN3Lnz8M"  target="_blank" class="btn-circle">
                                            <i class="fa fa-whatsapp " aria-hidden="true"></i>
                                                    
                                        
                                          
                          </a>
                  
                        <!-- Facebook -->
                        <a href="https://web.facebook.com/prefmesquitaboletimcovid19/?_rdc=1&_rdr"  target="_blank" class="btn-circle" ><i class="fa fa-facebook " aria-hidden="true"></i>
                                            
                                           
                                            
                          </a>
                  
                        <!-- instagram -->
                        <a href="https://www.instagram.com/prefmesquitacovid19/"  target="_blank" class="btn-circle">
                                                <i class="fa fa-instagram " aria-hidden="true"></i>
                                                
                                            
                          </a>
                        <!-- twitter-->
                        <a href="https://twitter.com/mesquitarj"  target="_blank" class="btn-circle"> <i class="fa fa-twitter " aria-hidden="true"></i>
                                        
                                                            
                          </a>   
                        <!-- linkedin -->
                        <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFP7nHAn3Fc9AAAAXaz3ZE4PTkQbqQhtyT6Rs3YE3zECmKttVh0GOBW0aUqnAMGP2L__0Ekrgz5jNcu42QK-NLqLrQRm35pLuCg6iyT0UGunPrlloS9oOBGJ_I8Rp0gUXQ5Tpw=&originalReferer=http://www.mesquita.rj.gov.br/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fprefeitura-de-mesquita-boletim-coronav%25C3%25ADrus%2F"  target="_blank" class="btn-circle">
                                        <i class="fa fa-linkedin-square " aria-hidden="true"></i>
                                     
                          </a>
                  
                  
                  
                      </div>

            

      </div>
      <!-- Grid column -->

      <!-- Grid column -->


      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1 ">
      <h5 class="font-weight-bold text-uppercase mb-4" >CURTA NO FACEBOOK! </h5>
      <div class="d-flex justify-content-around">
	
	<div class="fb-page" data-href="https://www.facebook.com/prefmesquitaboletimcovid19/" data-tabs="timeline" data-width="425" data-height="325" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/prefmesquitaboletimcovid19/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/prefmesquitaboletimcovid19/">Prefeitura de Mesquita Boletim Coronavirus</a></blockquote></div>
      </div>  
    </div>

      <!-- Grid column -->
 <!-- Grid column -->
 <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1 ">
      <h5 class="font-weight-bold text-uppercase mb-4" >SIGA-NOS NO TWITTER </h5>
      <div class="d-flex justify-content-around">
	
      <a class="twitter-timeline" data-width="420" data-height="320" href="https://twitter.com/mesquitarj">Tweets by pmmcovid19</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>  
    </div>

      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 footer-content">© 
    Desenvolvimento: <br>
CCS - Coordenadoria de Comunicação Social - 2020
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



<script type="text/javascript">
    $("#telefone, #celular").mask("(00) 00000-0000");

    $( 'a[href^="http://"]' ).attr( 'target','_blank' )
    $( 'a[href^="https://"]' ).attr( 'target','_blank' )

  
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="./grafico.js"></script>
 <script src="./script.js"></script>
</body>
</html>
