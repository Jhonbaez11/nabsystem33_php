<?php
//Conexión
require('conexion/conexion.php'); //require('connect_db.php');
//Variables de consultas y título
$categoria="contácto";
$subcategoria="nab system 33";
?>
<!DOCTYPE html>
<html lang="es">
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
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2><?php echo $categoria; ?></h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li class="active"><?php echo ucwords($subcategoria); ?></li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-top">
             <h2>Estamos esperando para ayudarte..</h2>
             <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quos.</p>-->
           </div>
           <!-- contact map -->
           <div class="aa-contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31815.487381551244!2d-74.09287781717263!3d4.605495311786243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1469472843072" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form" action="contacto.php" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input name="nombre" type="text" placeholder="Tu Nombre" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input name="email" type="email" placeholder="E-mail" class="form-control">
                        </div>
                      </div>
                    </div>
                    <!--  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Subject" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Company" class="form-control">
                        </div>
                      </div>
                    </div>   -->                
                     
                    <div class="form-group">                        
                      <textarea name="mensaje" class="form-control" rows="3" placeholder="Mensaje"></textarea>
                    </div>
                    <!--<button class="aa-secondary-btn">Enviar</button>-->
                    <input class="aa-secondary-btn" type="submit" name="submit" value="Enviar" />
                  </form>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>NAB System 33</h4>
                     <p>Tienda ficticia de Videojuegos y Computadores.</p>
                     <p><span class="fa fa-home"></span>Bogotá D.C., Colombia</p>
                     <p><span class="fa fa-phone"></span>+ 0XX.3XX.7X7X</p>
                     <p><span class="fa fa-envelope"></span>Email: nab.system.33@gmail.com</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <!-- Subscribe section -->

  <!-- / Subscribe section -->

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