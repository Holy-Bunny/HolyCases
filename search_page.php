<?php @include 'php_codes/user.php'; ?>
<?php @include 'php_codes/add_wishlist.php'; ?>
<?php @include 'php_codes/add_cart.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
        <h3>Buscador</h3>
    </section>

    <section class="search-form">
        <form action="" method="POST">
            <input type="text" class="box" placeholder="Nombre del producto" name="search_box">
            <input type="submit" class="btn" value="Buscar" name="search_btn">
        </form>
    </section>

    <section class="products" style="padding-top: 0;">

        <div class="box-container">

            <?php
        if(isset($_POST['search_btn'])){
         $search_box = mysqli_real_escape_string($conn, $_POST['search_box']);
         $select_products = mysqli_query($conn, "SELECT * FROM `products` WHERE name LIKE '%{$search_box}%'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
            <form action="" method="POST" class="box">
                <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="fas fa-eye"></a>
                <div class="price">$<?php echo $fetch_products['price']; ?> MXN</div>
                <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
                <div class="name"><?php echo $fetch_products['name']; ?></div>
                <input type="number" name="product_quantity" value="1" min="0" class="qty">
                <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
                <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
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
                <input type="submit" value="Agregar a wishlist" name="add_to_wishlist" class="option-btn">
                <input type="submit" value="Agregar a carrito" name="add_to_cart" class="btn">
            </form>
            <?php
         }
            }else{
                echo '<p class="empty">No se encontraron resultados.</p>';
            }
        }else{
            echo '<p class="empty">¡Busca algo!</p>';
        }
      ?>

        </div>

    </section>





    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>