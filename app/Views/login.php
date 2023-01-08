<!doctype html>
<html lang="en">
<link rel="icon" type="image/png" href="assets/template/dist/img/logo21.png" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    
    <title>Login</title>
  </head>
  <body>
    <div class="login-box" >
      
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <h1>Llena tus datos para ingresar </h1 >
         
          <div class="login-logo">
           
            <img src="assets/template/dist/img/logo21.png" >
        </div>
        <?php if($mensaje==0):?>
              <div class="alert alert-danger">
                <p>no puede iniciar sesion datos invalidos</p>
              </div>
            <?php endif; ?>
          <form action="<?php echo base_url('/login') ?>" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" class="form-control" required="">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required="">
            <br>
            <button class="btn btn-primary">Entrar</button>
          </form>
        </div>

        <div class="col-sm-4"></div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.2.1.slim.min.js" ></script>
    <script src="assets/js/popper.min.js" ></script>
    <script src="assets/js/bootstrap.min.js" ></script>
  </body>
</html>