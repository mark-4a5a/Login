<html>
<head>
<title>Cooban | Pages | Full Width</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php">Cooban</a></h1>
      </div>
      <div class="login_box">
        <?php
        include 'database_login.php';
        include 'functions.php';

            if(loggedin()){
        ?>
            <a href='logout.php'>Log Out</a>
        <?php
            } else {
        ?>
            <a href='login.php'>Login</a> | 
            <a href='register.php'>Register</a>
        <?php
            }
        ?>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
      <?php if(loggedin()){
              if($user_level == 1){ //Admin
              echo '<li><a class="drop" href="#">Voorraden</a>
                  <ul>
                    <li><a href="voorraad.php">Voorraden</a></li>
                    <li><a href="producten.php">Producten</a></li>
                  </ul>
                </li>
                <li><a href="locaties.php">Locaties</a></li>
                <li><a href="gebruikers.php">Gebruikers</a></li>';
            } elseif($user_level == 2) { //Voorraadbeheerder
              echo '<li><a class="drop" href="#">Voorraden</a>
                  <ul>
                    <li><a href="voorraad.php">Voorraden</a></li>
                    <li><a href="producten.php">Producten</a></li>
                  </ul>
                </li>';
            }elseif($user_level == 3) { //Accountmanager
              echo '<li><a class="drop" href="#">Voorraden</a>
                  <ul>
                    <li><a href="voorraad.php">Voorraden</a></li>
                    <li><a href="producten.php">Producten</a></li>
                  </ul>
                </li>
                <li><a href="locaties.php">Locaties</a></li>';
            }elseif($user_level == 4) { //Manager
              echo '<li><a class="drop" href="#">Voorraden</a>
                  <ul>
                    <li><a href="voorraad.php">Voorraden</a></li>
                    <li><a href="producten.php">Producten</a></li>
                  </ul>
                </li>
                <li><a href="locaties.php">Locaties</a></li>';
            }elseif($user_level == 5) { //Systeembeheerder
              echo '<li><a href="gebruikers.php">Gebruikers</a></li>';
            }else{
              echo ''; 
            }
          } else {}
      ?>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
    </div>
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 