<?php @include 'php_codes/register_functionality.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Registro</title>
   <link rel="stylesheet" href="css/style.css">
   <!--Estilo para los íconos de la barra de navegación-->
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
      <h3>Regístrate ahora</h3>
      <input type="text" name="name" class="box" placeholder="Ingresa un nombre de usuario" required>
      <input type="email" name="email" class="box" placeholder="Ingresa tu correo" required>
      <input type="password" name="pass" class="box" placeholder="Ingresa una contraseña" required>
      <input type="password" name="cpass" class="box" placeholder="Confirma la contraseña" required>
      <input type="submit" class="btn" name="submit" value="Registrarse">
      <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
   </form>
</section>
</body>
</html>