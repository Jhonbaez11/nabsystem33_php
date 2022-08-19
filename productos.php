<ul class="aa-product-catg">
                <!-- start single product item -->
                <!--Disponible-->              
                <?php 
                  $query="SELECT * FROM inventario WHERE id_categoria='$categoria' AND id_subcategoria='$subcategoria' AND unid > 0";
                  $resultado=$mysqli->query($query);
                  while($row=$resultado->fetch_assoc())
                  { 
                ?>
                <li>
                  <figure>
                    <a class="aa-product-img"><img height="300" width="250" alt="polo shirt img" src="administracion/uploads/coa/<?php echo $row['coa'];?>"></a>
                    <a class="aa-add-card-btn" ><span class="fa fa-shopping-cart"></span>Unidades Disponibles: <?php echo ucwords($row['unid']);?></a>
                    <figcaption>
                      <h4 class="aa-product-title"><a ><?php echo ucwords($row['nombre']);?></a></h4>
                      <span class="aa-product-price">$<?php echo number_format($row['precios']);?></span>
                      <!--<span class="aa-product-price"><del>Precio anterior</del></span>-->
                      <p class="aa-product-descrip"><?php echo ucwords($row['descripcion']);?></p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a> 
                    <a data-toggle2="tooltip" data-placement="top" title="Detalles" data-toggle="modal" data-target="#quick-view-modal" href=""><span class="fa fa-search"></span></a>
                    -->
                  </div>
                  <!-- product badge -->
                  <span class="aa-badge aa-sale" href="#">DISPONIBLE!</span>
                </li>
                <?php
                }
                ?>
  <!--Disponible-->
                <!-- start single product item -->
  <!--Agotado-->
                <?php 
                  $query="SELECT *  FROM inventario WHERE id_categoria='$categoria' AND id_subcategoria='$subcategoria' AND unid = 0";
                  $resultado=$mysqli->query($query);
                while($row=$resultado->fetch_assoc())
                { 
                ?>
                <li>
                  <figure>
                    <a class="aa-product-img" ><img height="300" width="250" alt="polo shirt img" src="../../../system_idvpruebas/uploads/coa/<?php echo $row['coa'];?>"></a>
                    <a class="aa-add-card-btn"><span class="fa fa-shopping-cart"></span>Unidades Disponibles: <?php echo ucwords($row['unid']);?></a>
                    <figcaption>
                      <h4 class="aa-product-title"><a ><?php echo ucwords($row['nombre']);?></a></h4>
                      <span class="aa-product-price">$<?php echo number_format($row['precios']);?></span>
                       <p class="aa-product-descrip"><?php echo ucwords($row['descripcion']);?></p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a> 
                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Detalles" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                    -->
                  </div>
                  <!-- product badge -->
                    <span class="aa-badge aa-sold-out" href="#">AGOTADO!</span>
                </li>  
                <?php
                }
                ?> 
</ul>         