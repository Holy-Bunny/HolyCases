<?php @include 'php_codes/user.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre nosotros</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>Métodos de pago</h3>
</section>

<section class="about">

    <div class="flex">
        <div class="content1">
            <h3>Tarjeta de débito o crédito</h3>
            <p>Aceptamos Visa, MasterCard, American Express y Otras tarjetas tanto de débito como de crédito, si rechaza tu tarjeta probablemente estas ingresando mal la información o tu banco bloqueó la compra, por lo que te recomendamos intentar con otro método de pago.
            Es necesario que escribas tu información personal a la perfección para evitar rechazos por los bancos.
            </p>
        </div>
    </div>


    <div class="flex">
        <div class="content1">
            <h3>Paypal</h3>
            <p>Con este método de pago puedes realizar tu compra automáticamente sin necesidad de llenar tus datos, este método de pago te redireccionará a tu cuenta de PayPal, donde ingresarás tu correo y usuario y automáticamente se llenará la información personal junto con tu información bancaria (nosotros no la procesaremos).
            Contamos con 6 Meses sin intereses en compras mayores a $2,500.00.
            </p>
        </div>
    </div>


    <div class="flex">
        <div class="content1">
            <h3>Pago En Oxxo Pay con Efectivo</h3> 
            <p>Con este método de Pago a través de Oxxo Pay te daremos un número de Referencia para ir a pagar a cualquier Oxxo de México, tienes 3 días para pagar tu orden, de lo contrario la orden será cancelada y podrá ser boletinada.
            Una vez pagada la orden haremos el envío a tu domicilio.
            </p>
        </div>
    </div>

</section>

<?php @include 'footer.php'; ?>
<script src="js/script.js"></script>
</html>