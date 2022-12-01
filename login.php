<?php @include 'php_codes/login_functionality.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="css/style.css">
   <!--Estilo para los íconos-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<section class="form-container">
   <form action="" method="post">
      <h3>Inicia sesión</h3>
      <input type="email" name="email" class="box" placeholder="Ingresa tu correo" required>
      <input type="password" name="pass" class="box" placeholder="Ingresa la contraseña" required>
      <input type="submit" class="btn" name="submit" value="Ingresar">
      <p>¿No tienes cuenta? <a href="register.php">Regístrate</a></p>
   </form>
</section>
</body>
</html>