<?php @include 'php_codes/user.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>Tus pedidos</h3>
</section>

<section class="placed-orders">

    <div class="box-container">

    <?php
        $select_orders = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_orders) > 0){
            while($fetch_orders = mysqli_fetch_assoc($select_orders)){
    ?>
    <div class="box">
        <p> Pedido el : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
        <p> Nombre: <span><?php echo $fetch_orders['name']; ?></span> </p>
        <p> Número telefónico: <span><?php echo $fetch_orders['number']; ?></span> </p>
        <p> Correo: <span><?php echo $fetch_orders['email']; ?></span> </p>
        <p> Dirección: <span><?php echo $fetch_orders['address']; ?></span> </p>
        <p> Método de pago: <span><?php echo $fetch_orders['method']; ?></span> </p>
        <p> Productos: <span><?php echo $fetch_orders['total_products']; ?></span> </p>
        <p> Total: <span>$<?php echo $fetch_orders['total_price']; ?> MXN</span> </p>
        <p> Estado de pago: <span style="color:<?php if($fetch_orders['payment_status'] == 'pendiente'){echo 'tomato'; }else{echo 'green';} ?>"><?php echo $fetch_orders['payment_status']; ?></span> </p>
    </div>

    <br><br>
    <?php
        }
    }else{
        echo '<p class="empty">Aún no hay pedidos.</p>';
    }
    ?>
    </div>

</section>







<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>