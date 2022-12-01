<?php @include 'php_codes/user.php'; ?>

<?php
if(isset($_POST['add_to_cart'])){
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
    if(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'Este producto ya ha sido agregado al carrito de compras.';
    }else{
        $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($check_wishlist_numbers) > 0){
            mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
        }
        mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
        $message[] = 'Agregado al carrito de compras.';
    }
}
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `wishlist` WHERE id = '$delete_id'") or die('query failed');
    header('location:wishlist.php');
}
if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
    header('location:wishlist.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Lista de deseos</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>Tu lista de desos</h3>
</section>

<section class="wishlist">

    <h1 class="title">Productos agregados</h1>

    <div class="box-container">

    <?php
        $grand_total = 0;
        $select_wishlist = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_wishlist) > 0){
            while($fetch_wishlist = mysqli_fetch_assoc($select_wishlist)){
    ?>
    <form action="" method="POST" class="box">
        <a href="wishlist.php?delete=<?php echo $fetch_wishlist['id']; ?>" class="fas fa-times" onclick="return confirm('delete this from wishlist?');"></a>
        <a href="view_page.php?pid=<?php echo $fetch_wishlist['pid']; ?>" class="fas fa-eye"></a>
        <img src="uploaded_img/<?php echo $fetch_wishlist['image']; ?>" alt="" class="image">
        <div class="name"><?php echo $fetch_wishlist['name']; ?></div>
        <div class="price">$<?php echo $fetch_wishlist['price']; ?> MXN</div>
        <input type="hidden" name="product_id" value="<?php echo $fetch_wishlist['pid']; ?>">
        <input type="hidden" name="product_name" value="<?php echo $fetch_wishlist['name']; ?>">
        <input type="hidden" name="product_price" value="<?php echo $fetch_wishlist['price']; ?>">
        <input type="hidden" name="product_image" value="<?php echo $fetch_wishlist['image']; ?>">
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
         <br><br><br>
        <input type="submit" value="Agregar al carrito" name="add_to_cart" class="btn">
        
    </form>
    <?php
    $grand_total += $fetch_wishlist['price'];
        }
    }else{
        echo '<p class="empty">Lista de deseos vacía.</p>';
    }
    ?>
    </div>

    <div class="wishlist-total">
        <p>Total: <span>$<?php echo $grand_total; ?> MXN</span></p>
        <a href="shop.php" class="option-btn">Seguir comprando</a>
        <a href="wishlist.php?delete_all" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled' ?>" onclick="return confirm('¿Borrar todo de la lista de deseos?');">Eliminar todo</a>
    </div>

</section>






<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>