<?php
//Conexión
require('conexion/conexion.php'); //require('connect_db.php');
//Variables de consultas y título
$categoria1="home";
$subcategoria1="nab system 33";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once("head.php"); ?> 
  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <?php require_once("cargando.php"); ?>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <?php require_once("header-top.php"); ?>    
    <!-- / header top  -->

    <!-- start header bottom  -->
    <?php require_once("logo.php"); ?>    
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
  <?php require_once("menuapp.php"); ?>
  </section>
  <!-- / menu -->
  <!-- Start slider -->
  <section id="aa-slider">
<?php require_once("slider.php"); ?>
  </section>
  <!-- / slider -->
  <!-- footer -->  
  <footer id="aa-footer">
    <?php require_once("footer.php"); ?>
  </footer>
  <!-- / footer -->

  <!-- Login Modal --> 
  <?php require_once("login.php"); ?> 
  <!-- Login Modal -->
  <!-- Login JQuery -->
    <?php require_once("javascript.php"); ?>
  <!-- Login JQuery -->
  </body>
</html>