<?php @include 'php_codes/user.php'; ?>
<?php @include 'php_codes/message.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php @include 'header.php'; ?>

    <section class="heading">
        <h3>Contáctanos</h3>
    </section>

    <section class="contact">
        <form action="" method="POST">
            <h3>¡Escríbenos un mensaje!</h3>
            <input type="text" name="name" placeholder="Ingresa tu nombre" class="box" required>
            <input type="email" name="email" placeholder="Ingresa tu correo" class="box" required>
            <input type="number" name="number" placeholder="Ingresa tu número telefónico" class="box" required>
            <textarea name="message" class="box" placeholder="¿Qué es lo que nos quieres decir?" required cols="30"
                rows="10"></textarea>
            <input type="submit" value="Enviar" name="send" class="btn">
        </form>
    </section>

    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>