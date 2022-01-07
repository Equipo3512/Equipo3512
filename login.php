<?php
include_once'confirmar.php';
/*include_once'estado_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
  echo "Hay sesión";
}else if(isset($_POST['matricula']) && isset($_POST['contra'])){
  //echo "Validacion de login";

  $errorLogin = "Nombre de usuario y/o password incorrecto";
  
}else{
  //echo "Login";
  include_once 'login.php';
}*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="Slot machine game">
  <meta name="keywords" content="HTML, CSS, JavaScript, Slot Machine, Game">
  <meta name="author" content="Jee Vang, Ph.D.">
  <meta name="organization" content="One-Off Coder">
  <title>Iniciar sesi&oacute;n</title>
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="icon" href="#" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/style_log.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    
</head>
<!--https://ajgallego.gitbook.io/bootstrap-4/componentes-responsive/barra-de-navegacion-->
<header>

  <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li> <a href="#courses">Aspirantes</a> </li>
                      <li> <a href="#about">Alumnos</a> </li>
                      <li> <a href="#learn">Profesores</a> </li>
                      <li> <a href="#important">Servicios Escolares</a> </li>
                      <li> <a href="#contact">Becas y servicios</a> </li>
                     </ul>
                   </nav>
                 </div>
               </div> 

           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

</header>


<body>

  <div class="container-fluid">

    <form action="confirmar.php" method="post">
      <h1>Inicio de sesi&oacute;n</h1>
      <p>Usuario<input type="text" placeholder="Ingrese su usuario" name="matricula"></p>
      <p>Contraseña<input type="password" placeholder="Ingrese su contraseña" name="contra"></p>
      <input type="submit" name="Ingresar">

    </form>

  </div>


  



  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  
  <script type="text/javascript" src="js/popper.min.js"></script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/mdb.min.js"></script>
 
  <script type="text/javascript"></script>

</body>
</html>
