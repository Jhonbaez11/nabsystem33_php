<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Iniciar Sesión</h4>
          <form class="aa-login-form" action="acceso.php" method="post">
            <label for="">Nombre de Usuario<span>*</span></label>
            <input type="text" name="user" placeholder="Username or email">
            <label for="">Contraseña<span>*</span></label>
            <input type="password" name="pass" placeholder="Password">
            <button class="aa-browse-btn" name="submit" type="submit">Login</button>
            <!-- <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Recordarme </label> -->
            <!-- <p class="aa-lost-password"><a href="#">Lost your password?</a></p> -->
            <!-- <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div> -->
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>  