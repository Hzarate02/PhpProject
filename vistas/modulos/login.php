<div class="login-box">
    
  <div class="login-logo">

    <img src="vistas/img/plantilla/icono-blanco-lineal.png" class="
    img-responsive" style="padding: 30px 50px 0px 50px;" >

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <p class="login-box-msg">Iniciar sesión</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>

      <?php
      
        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();

      ?>

    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->