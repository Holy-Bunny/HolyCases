<?php @include 'php_codes/user.php'; ?>
<?php @include 'php_codes/add_wishlist.php'; ?>
<?php @include 'php_codes/add_cart.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>quick view</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="quick-view">

    <h1 class="title">Detalles del producto</h1>

    <?php  
        if(isset($_GET['pid'])){
            $pid = $_GET['pid'];
            $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$pid'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
    ?>
    <form action="" method="POST">
         <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
         <div class="name"><?php echo $fetch_products['name']; ?></div>
         <div class="price">$<?php echo $fetch_products['price']; ?> MXN</div>
         <div class="details"><?php echo $fetch_products['details']; ?></div>
         <input type="number" name="product_quantity" value="1" min="0" class="qty">
         <select name="modelo" id="modelo" class="qty">
            <option value="i12">iPhone 12</option>
            <option value="i12PM">iPhone 12 Pro Max</option>
            <option value="i12P">iPhone 12 Pro</option>
            <option value="i12m">iPhone 12 Mini</option>
            <option value="i11">iPhone 11</option>
            <option value="i11PM">iPhone 11 Pro Max</option>
            <option value="i11P">iPhone 11 Pro</option>
            <option value="iX">iPhone X</option>
            <option value="iXSM">iPhone XS MAX</option>
            <option value="iXS">iPhone XS</option>
            <option value="iXR">iPhone XR</option>
            <option value="i78">iPhone 7/8</option>
            <option value="i78P">iPhone 7/8 PLus</option>
            <option value="i6s">iPhone 6s</option>
            <option value="i6P">iPhone 6 Plus</option>
         </select>
         <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
         <input type="submit" value="Agregar a wishlist" name="add_to_wishlist" class="option-btn">
         <input type="submit" value="Agregar a carrito" name="add_to_cart" class="btn">
      </form>
    <?php
            }
        }else{
        echo '<p class="empty">no products details available!</p>';
        }
    }
    ?>

    <div class="more-btn">
        <a href="home.php" class="option-btn">Ir al inicio</a>
    </div>

</section>






<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>