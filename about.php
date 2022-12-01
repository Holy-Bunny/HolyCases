<?php @include 'php_codes/user.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Sobre nosotros</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php @include 'header.php';?>

<section class="heading">
    <h3>Sobre nosotros</h3>
</section>

<section class="about">
    <div class="flex">
        <div class="image">
            <img src="images/tulipanpop.jpeg">
        </div>
        <div class="content">
            <h3>¿Quiénes somos?</h3>
            <p>Somos una empresa enfocada a brindar la protección que tu iPhone necesita.</p>
            <a href="#reviews" class="btn">Reseñas de clientes</a>
        </div>
    </div>

    <div class="flex">
        <div class="content">
            <h3>¿Qué ofrecemos?</h3>
            <p>Principalmente ofrecemos fundas para celulares iPhone de la mejor calidad y además, ¡Lindísimas!</p>
            <a href="shop.php" class="btn">Comprar</a>
        </div>
        <div class="image">
            <img src="images/weirdbunny.jpeg">
        </div>
    </div>
</section>

<section class="reviews" id="reviews">
    <h1 class="title">Reseñas</h1>
    <div class="box-container">

        <div class="box">
            <img src="images/persona4.jpg">
            <p>Totalmente satisfecho, relamente volvería a comprar aquí.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Carlos Ponce</h3>
        </div>

        <div class="box">
            <img src="images/persona1.jpg">
            <p>¡Las mejores y muy bonitas! La mejor compra que he realizado.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Alicia Villareal</h3>
        </div>

        <div class="box">
            <img src="images/persona5.jpg">
            <p>Todo llegó en orden y muy bien empaquetado, recomiendo altamente.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Leonardo Hernández</h3>
        </div>

        <div class="box">
            <img src="images/persona2.jpg">
            <p>Confiables, la mejor atención a cliente y muy buen producto.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jessica Ramírez</h3>
        </div>

        <div class="box">
            <img src="images/persona6.jpg">
            <p>Si quieren proteger su celular, ¡Estas fundas son su mejor opción!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Manuel Vieyra</h3>
        </div>

        <div class="box">
            <img src="images/persona3.jpg">
            <p>¡Me encantó! ¿Realmente hay mejores carcasas que estas? Estoy muy contenta.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Andrea Jiménez</h3>
        </div>

    </div>
</section>

<?php @include 'footer.php'; ?>
<script src="js/script.js"></script>
</html>

