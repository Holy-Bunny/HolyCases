<?php @include 'php_codes/user.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Envío</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>¡Tu pedido está en camino!</h3>
</section>

<img src="images/shipping_2.gif" width=1520px>

<meta http-equiv="refresh" content="10;url=loading.php" />

<?php @include 'footer.php'; ?>
<script src="js/script.js"></script>
</html>
