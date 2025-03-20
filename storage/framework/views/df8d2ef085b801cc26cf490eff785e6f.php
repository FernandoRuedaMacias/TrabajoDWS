<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Il gusto di Napoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
    " rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="<?php echo e(URL::to('/images/favicon.png')); ?> ">
    <style>
        *{
            background-color: rgba(106, 62, 9, 0.342);
            font-family: "Italianno";
            font-size: 30px;
        }
        h1{
            color:white;
            text-align: center;
        }

        .center {
  margin: auto;
  width: 60%;
  border: 3px solid #54260ac7;
  padding: 10px;
}
  
        </style>
</head>
<body>
    <h1>Il gusto di Napoli</h1>

<table style="width: 100%">
    <tr><td>
        <div >
            <img src="<?php echo e(URL::to('/images/foto1.avif')); ?> "  style="width:100%"  width="500" height="500">
        </div>
    </td>
    <td>
        <div >
            <img src="<?php echo e(URL::to('/images/foto2.avif')); ?> " style="width:100%"  width="500" height="500">
        </div>
    </td>
        </tr>

</table>
        <div class="center">
        <h4>Il gusto di Napoli</h4>
        <p >Restaurante especializado en todo tipo de comida italiana</p>
        <a href="<?php echo e(route('indicePlatos')); ?>" class="btn btn-dark">PLATOS</a>
      </div>
</body>
</html><?php /**PATH /var/www/html/TrabajoRestaurante/resources/views/Inicio.blade.php ENDPATH**/ ?>