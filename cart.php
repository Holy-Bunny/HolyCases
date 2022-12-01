<?php @include 'php_codes/user.php'; ?>
<?php @include 'php_codes/cart_functionality.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
        <h3>Carrito de compras</h3>
    </section>

    <section class="shopping-cart">

        <h1 class="title">Productos agregados</h1>

        <div class="box-container">

            <?php
        $grand_total = 0;
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
    ?>
            <div class="box">
                <a href="cart.php?delete=<?php echo $fetch_cart['id']; ?>" class="fas fa-times"
                    onclick="return confirm('¿Eliminar producto del carrito?');"></a>
                <a href="view_page.php?pid=<?php echo $fetch_cart['pid']; ?>" class="fas fa-eye"></a>
                <img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" alt="" class="image">
                <div class="name"><?php echo $fetch_cart['name']; ?></div>
                <div class="price">$<?php echo $fetch_cart['price']; ?> MXN</div>
                <form action="" method="post">
                    <input type="hidden" value="<?php echo $fetch_cart['id']; ?>" name="cart_id">
                    <input type="number" min="1" value="<?php echo $fetch_cart['quantity']; ?>" name="cart_quantity"
                        class="qty">
                    <input type="submit" value="Actualizar" class="option-btn" name="update_quantity">
                </form>
                <div class="sub-total"> Subtotal:
                    <span>$<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?> MXN</span>
                </div>
                <div class="sub-total">
                    <p>Envío: $0 MXN</p>
                </div>
            </div>
            <?php
    $grand_total += $sub_total;
        }
    }else{
        echo '<p class="empty">El carrito está vacío.</p>';
    }
    ?>
        </div>

        <div class="more-btn">
            <a href="cart.php?delete_all" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled' ?>"
                onclick="return confirm('¿Eliminar todo del carrito?');">Eliminar todo</a>
        </div>

        <div class="cart-total">
            <p>Total: <span>$<?php echo $grand_total; ?> MXN</span></p>
            <a href="shop.php" class="option-btn">Seguir comprando</a>
            <a href="checkout.php" class="btn  <?php echo ($grand_total > 1)?'':'disabled' ?>">Proceder al pago</a>
        </div>

    </section>






    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>