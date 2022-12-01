<?php @include 'php_codes/user.php'; ?>
<?php @include 'php_codes/checkout_functionality.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Resumen del pedido</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>Resumen del pedido</h3>
</section>

<section class="display-order">
    <?php
        $grand_total = 0;
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total += $total_price;
    ?>    
    <p> <?php echo $fetch_cart['name'] ?> <span>(<?php echo '$'.$fetch_cart['price'].' MXN'.' x '.$fetch_cart['quantity']  ?>)</span> </p>
    <?php
        }
        }else{
            echo '<p class="empty">Tu carrito está vacío.</p>';
        }
    ?>
    <div class="grand-total">Total: <span>$<?php echo $grand_total; ?> MXN</span></div>
</section>

<section class="checkout">

    <form action="" method="POST">
        <div class="flex">
            <div class="inputBox">
                <span>Nombre completo:</span>
                <input type="text" name="name" placeholder="Ingresa tu nombre completo">
            </div>
            <div class="inputBox">
                <span>Número telefónico:</span>
                <input type="number" name="number" min="0" placeholder="Ingresa tu número telefónico">
            </div>
            <div class="inputBox">
                <span>Correo:</span>
                <input type="email" name="email" placeholder="Ingresa tu correo">
            </div>
            <div class="inputBox">
                <span>Método de pago:</span>
                <select name="method">
                    <option value="Oxxo Pay">Oxxo Pay</option>
                    <option value="Tarjeta de debito o credito">Tarjeta de debito o credito</option>
                    <option value="Paypal">Paypal</option>
                </select>
            </div>
            <div class="inputBox">
                <span>Dirección 1:</span>
                <input type="text" name="flat" placeholder="Ingresa Calle y Número exterior e interior">
            </div>
            <div class="inputBox">
                <span>Direccion 2:</span>
                <input type="text" name="street" placeholder="Ingresa Colonia">
            </div>
            <div class="inputBox">
                <span>Ciudad:</span>
                <input type="text" name="city" placeholder="Ingresa municipio o delegación">
            </div>
            <div class="inputBox">
                <span>Código postal:</span>
                <input type="number" min="0" name="pin_code" placeholder="Ingresa el código postal">
            </div>
            <div class="inputBox">
                <span>Estado:</span>
                <input type="text" name="state" placeholder="Ingresa el estado">
            </div>
            <div class="inputBox">
                <span>País:</span>
                <input type="text" name="country" placeholder="Ingresa el país">
            </div>
        </div>

        <input type="submit" name="order" value="Confirmar" class="btn">

    </form>

</section>






<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>