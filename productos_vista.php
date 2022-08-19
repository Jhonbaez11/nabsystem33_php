<?php
//Conexión
require('conexion/conexion.php'); //require('connect_db.php');
//Variables consulta
$categoria=$_GET['categoria'];
$subcategoria=$_GET['subcategoria'];
//CONSULTA DE PRODUCTOS
$query="SELECT *  FROM inventario WHERE id_categoria='$categoria' AND id_subcategoria='$subcategoria'";
$resultado=$mysqli->query($query);
//CONSULTA DE TITULO (H1) 
$query2="SELECT *  FROM inventario WHERE id_categoria='$categoria' AND id_subcategoria='$subcategoria'";
$resultado2 = mysqli_query($mysqli,$query2);
$fila2 = mysqli_fetch_row($resultado2);

//CATEGORIAS
$query3="SELECT * FROM categoria WHERE id_categoria = ".$fila2['2']."";
$resultado3 = mysqli_query($mysqli,$query3);
$fila3 = mysqli_fetch_row($resultado3);
// $query4="SELECT * FROM categoria WHERE id_categoria = ".$fila2['2']."";
// $resultado4 = mysqli_query($mysqli,$query3);
// $fila4 = mysqli_fetch_row($resultado3);
//SUBCATEGORIAS
$query5="SELECT * FROM subcategoria WHERE id_subcategoria = ".$fila2['3']."";
$resultado5 = mysqli_query($mysqli,$query5);
$fila5 = mysqli_fetch_row($resultado5);
// $query6="SELECT * FROM subcategoria WHERE id_subcategoria = ".$fila2['3']."";
// $resultado6 = mysqli_query($mysqli,$query6);
// $fila6 = mysqli_fetch_row($resultado6);
//Variables y título
$categoria1=$fila3['1'];
$subcategoria1=$fila5['1'];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("head.php"); ?> 
  </head>
  <!-- !Important notice -->
  <!-- Only for product page body tag have to added .productPage class -->
  <body class="productPage">  
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
        <h2><?php echo $fila3['1'];  ?></h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>         
          <li class="active"><?php echo ucwords($fila5['1']); ?></li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3"> Espacio dercho de categorias-->
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <!-- <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form>
              </div> -->
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <!-- start single product item -->
              <?php require_once("productos.php") ?>   
              <!-- quick view modal -->  
              <?php require_once("modal-productos.php") ?>
              <!-- / quick view modal -->   
            </div>
            <!-- <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div> -->
        
    </div>
  </section>
  <!-- / product category -->


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