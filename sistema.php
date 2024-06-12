<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    
    }
    $logado = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>

    <link rel="icon" href="imgslogo.png.jpeg" type="image/x-icon">
  <title>CONEXÃO PROFISSIONAL</title>
</head>
<body>
<header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #7c9cbc;">
        <div class="container">
          
          <a href="#" class="navbar-brand">
            <img src="imgslogo.jpeg" width="110">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal" >
            <ul class="navbar-nav ml-auto">
              <li>
                <a href="Login.php" class="nav-link" style ="font-size: 1.5em; color: white;"> Sair </a>
              </li>
              <li class="nav-item">
                <a href="#Maria" class="nav-link" style="font-size: 1.5em; color: white;">Currículos</a>
              </li>
              
            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->

    <!--parte inicial-->
    <section id="home">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="align-self-center">
              <h1 class="display-5" style="text-align: center;">BEM VINDOS AO <p></p> <span style="color: #585b5f;">CONEXÃO</span> <span style="color: #063d84;">PROFISSIONAL</span></h1>
              <p style="text-align: center;">Jovens conectados ao mercado de tecnologia. Juntos podemos fazer mais!</p>
            </div>
          </div>

          <div class="col-md-6 d-none d-md-block" style="text-align:center;"><img src="imgs/logo (1).png" alt="" width="500"></div>
         
        </div>
      </div>
    </section>
     <!--parte inicial fim-->
    
    <!--secao da maria inicio-->
   

    <section id="Maria" style="height: 100vh; margin-top: 10%;">
      <div class="container">
        <div class="row">
          <div class="col-md-6" style="text-align: center;"><img src="imgs/mariaalencar.jpeg" alt=""  style="border-radius: 50%; width: 50%;"></div>

          <div class="col-md-6 d-flex">
            <div class="align-self-center" style="text-align: center;">
              <h1 class="display-4" >Maria Alencar</h1>
              <p style="text-align:justify;">Meu nome é Maria Alencar, apaixonada por inovação e informação. Sou proativa e determinada a enfrentar desafios para crescer e evoluir como ser humano e profissional. Aberta a novas conexões e oportunidades de colaboração. 

                Gostaria de saber um pouco mais sobre mim?</p>
                
              <a href="curriculos/Maria Alencar.pdf" class="btn btn-info" role="button" target="_blank">Currículo</a>

              <a href="https://www.linkedin.com/in/alencar-maria/" target="_blank" class="btn btn-outline-light bg-info" > <i class="fa fa-linkedin"> </i></a>
              <a href="mailto:mariafritz1803@gmail.com" target="_blank" class="btn btn-outline-light bg-info" > <i class="fa fa-envelope" aria-hidden="true"></i></a>
              <a href="https://wa.me/556993767574" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-whatsapp"> </i></a>
              <a href="https://instagram.com/alencar.mariaa?igshid=OGQ5ZDc2ODk2ZA=="  target="_blank" class="btn btn-outline-light bg-info" > <i class="fa fa-instagram"></i></a>

              <a href="https://calendly.com/alencarmaria/reuniao-apresentacao" class="btn btn-info" role="button" target="_blank">Contate-me</a>
              </div>
            
          </div>
          
        </div>
      </div>
    </section>
     <!--secao da maria fim-->


     <!--secao da julio-->

    <section id="julio" style="height: 100vh;">
      <div class="container">
        <div class="row">

          <div class="col-md-6" style="text-align: center;"><img src="imgs/julio.jpeg" alt=""  style="border-radius: 50%; width: 50%;"></div>

          <div class="col-md-6 d-flex">
            <div class="align-self-center" style="text-align: center;">

              <h1 class="display-4">Julio Cezar</h1>
              <p style="text-align: justify;">Me chamo Julio Cezar, tenho 22 anos, desde criança sou apaixonado pela tecnologia, sempre tive em contato com ela, sou uma pessoa determinada a evoluir, seja pessoal ou profissional, caso queria me conhecer só me chamar estou a disposição.</p>
              
              <a href="curriculos/curriculo_do_julio.pdf" class="btn btn-info" role="button" target="_blank">Currículo</a> 

              <a href="https://www.linkedin.com/in/julio-cezar-carneiro-andrade-409355174/" target="_blank" class="btn btn-outline-light bg-info" > <i class="fa fa-linkedin"> </i></a>
              <a href="mailto:Juliocezarc871@gmail.com" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-envelope" aria-hidden="true"></i></a>
              <a href="https://wa.me/556993717889" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-whatsapp"> </i></a>
              <a href="https://www.instagram.com/julio.cezar87/" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-instagram"></i></a>
                
              <a href="https://calendly.com/juliocezarc871" class="btn btn-info" role="button" target="_blank">Contate-me</a>
      
            </div>
          </div>
          
        </div>
      </div>
    </section>
     <!--secao da julio fim-->


       <!--secao da joao-->

    <section id="Joao" style="height: 100vh;">
      <div class="container">
        <div class="row">

          <div class="col-md-6" style="text-align: center;"><img src="imgs/joao1.jpeg" alt=""  style="border-radius: 50%; width: 50%;"></div>

          <div class="col-md-6 d-flex">
            <div class="align-self-center" style="text-align: center;">
              <h1 class="display-4">João vitor</h1>
              <p style="text-align: justify;">Como vai, me chamo João vitor, e desde muito cedo sempre tive fascínio por tecnologia e busco sempre me atualizar a apreder mais sobre esse mundo fascinante,se quer conhecer melhor estou sempre a disposição de oportunidades. </p>
              
              <a href="curriculos/curriculo_do_julio.pdf" class="btn btn-info" role="button" target="_blank">Currículo</a>
              <a href="https://br.linkedin.com/in/joao12" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-linkedin"> </i></a>
                <a href="mailto:vitor2013souza@gmail.com" class="btn btn-outline-light bg-info" target="_blank"> <i class="fa fa-envelope" aria-hidden="true"></i></a>
                <a href="https://wa.me/5569992357040" class="btn btn-outline-light bg-info" target="_blank"> <i class="fa fa-whatsapp"> </i></a>
                <a href="https://www.instagram.com/vitor2013souza" class="btn btn-outline-light bg-info" target="_blank"> <i class="fa fa-instagram"></i></a>
                
              <a href="https://calendly.com/vitor2013souza/30min" class="btn btn-info" role="button" target="_blank">Contate-me</a>
              
            </div>
          </div>
          
        </div>
      </div>
    </section>
     <!--secao da joao fim-->



       <!--secao da sem nome-->

    <section id="sem_nome" style="height: 100vh;">
      <div class="container">
        <div class="row">

          <div class="col-md-6" style="text-align: center;"><img src="imgs/sem nome.jpeg" alt=""  style="border-radius: 50%; width: 50%;"></div>

          <div class="col-md-6 d-flex">
            <div class="align-self-center" style="text-align: center;">
              <h1 class="display-4">sem nome</h1>
              <p>texto de apresentação ksksskskskksksskksssssssssssssssssssssssssss</p>
              <a href="#" class="btn btn-info" role="button" target="_blank">Currículo</a>
              <a href="https://www.linkedin.com/in/reginaldo-castro-2b3b5628b/" target="_blank" class="btn btn-outline-light bg-info" > <i class="fa fa-linkedin"> </i></a>
              <a href="" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-envelope" aria-hidden="true"></i></a>
              <a href="https://wa.me/556984144422" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-whatsapp"> </i></a>
              <a href="" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-instagram"></i></a>
              <a href="#" class="btn btn-info" role="button" target="_blank">Contate-me</a>
            </div>
          </div>
          
        </div>
      </div>
    </section>
     <!--secao da sem nome fim-->



       <!--secao do higor-->

    <section id="higor" style="height: 100vh;">
      <div class="container">
        <div class="row">

          <div class="col-md-6" style="text-align: center;"><img src="imgs/higor.jpeg" alt=""  style="border-radius: 50%; width: 50%;"></div>

          <div class="col-md-6 d-flex">
            <div class="align-self-center" style="text-align: center;">
              <h1 class="display-4">higor </h1>
              <p>texto de apresentação ksksskskskksksskksssssssssssssssssssssssssss</p>
              <a href="#" class="btn btn-info" role="button" target="_blank">Currículo</a>
              <a href="https://www.linkedin.com/in/higor-felipe-311b6228a/" class="btn btn-outline-light bg-info" > <i class="fa fa-linkedin"> </i></a>
              <a href="mailto:higorfelipe1414@gmail.com" class="btn btn-outline-light bg-info" > <i class="fa fa-envelope" aria-hidden="true"></i></a>
              <a href="https://wa.me/556992239534" class="btn btn-outline-light bg-info" > <i class="fa fa-whatsapp"> </i></a>
              <a href="" class="btn btn-outline-light bg-info" > <i class="fa fa-instagram"></i></a>
              <a href="#" class="btn btn-info" role="button" target="_blank">Contate-me</a>

            </div>
          </div>
          
        </div>
      </div>
    </section>
     <!--secao da higor fim-->


       <!--secao do wesley-->

    <section id="wesley" style="height: 100vh;">
      <div class="container">
        <div class="row">

          <div class="col-md-6" style="text-align: center;"><img src="imgs/wesley.jpeg" alt=""  style="border-radius: 50%; width: 50%;"></div>

          <div class="col-md-6 d-flex">
            <div class="align-self-center" style="text-align: center;">
              <h1 class="display-4">wesley </h1>
              <p>texto de apresentação ksksskskskksksskksssssssssssssssssssssssssss</p>
              <a href="curriculos/wesley_augusto.pdf" class="btn btn-info" role="button" target="_blank">Currículo</a>
              <a href="https://www.linkedin.com/in/wesley-augusto-pereira-da-silva-053809236?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-linkedin"> </i></a>
                <a href="Wesleyaugustopereiradasilva08@gmail.com" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-envelope" aria-hidden="true"  ></i></a>
                <a href="https://wa.me/556984698739" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-whatsapp"> </i></a>
                <a href="https://instagram.com/wesley.augusto.31542841?utm_source=qr&igshid=OGIxMTE0OTdkZA==" class="btn btn-outline-light bg-info" target="_blank" > <i class="fa fa-instagram"></i></a>
                <a href="curriculos/wesley_augusto.pdf" class="btn btn-info" role="button" target="_blank">Contate-me</a>
            </div>
          </div>
          
        </div>
      </div>
    </section>
</body>
</html>