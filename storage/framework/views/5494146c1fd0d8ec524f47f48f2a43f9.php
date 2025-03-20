<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fin Pedido</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" href="<?php echo e(URL::to('/images/favicon.png')); ?> ">
    <style>
                    .center {
              display: flex;
    justify-content: center; 
    align-items: center; 
    padding: 30px;
    margin: auto;
    width: 100%; 
}
body{
    background-color: rgba(106, 62, 9, 0.342);
}
h1{
    font-family: "Italianno";
    text-align: center;
    text-decoration: underline;
    font-weight: bold;
}


p{
    text-align: center;
}
    </style>
</head>
<body>
    <h1>Gracias!</h1>
<p>Gracias por comprar en Il gusto di Napoli .</p>
    <div class="center"><a class="btn btn-dark" href="<?php echo e(route('inicio')); ?>">Inicio</a></div><br>
    <div class="center"><a class="btn btn-dark" href="<?php echo e(route('indicePlatos')); ?>">Platos</a></div><br>
</body>
</html>
<?php /**PATH /var/www/html/TrabajoRestaurante/resources/views/FinPedido.blade.php ENDPATH**/ ?>