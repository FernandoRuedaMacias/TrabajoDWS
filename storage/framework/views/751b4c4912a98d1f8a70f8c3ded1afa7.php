<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
    " rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
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

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #43250750;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #624711;
}

div {
  border-radius: 5px;
  background-color: #ac9a83;
  padding: 20px;
}
</style>
</head>
<body>
    <h1>Formulario Cliente</h1>
    <div>
    <form action="<?php echo e(route('añadir_cliente')); ?>" method="post">
      <?php echo csrf_field(); ?>
        <fieldset>
          <legend>Formulario</legend>
          <label for="nombre">Nombre</label><br>
          <input type="text" id="nombre" name="nombre" value=""><br>
          <label for="telefono">Telefono</label><br>
          <input type="text" id="telefono" name="telefono" value=""><br><br>
          <label for="tarj_credito">Tarjeta de Credito</label><br>
          <input type="text" id="tarj_credito" name="tarj_credito" value=""><br><br>

          <label for="desplegable">Empresa</label>
          <select name="Empresa" id="desplegable">
          <?php $__currentLoopData = $nombrempresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombrempresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($nombrempresa->nombre); ?>"><?php echo e($nombrempresa->nombre); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select><br>

          <input type="submit" value="Enviar">
        </fieldset>
      </form>
    </div>


    <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div class="alert alert-danger">
        <?php echo e($message); ?><br>
      </div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div class="alert alert-danger">
      <?php echo e($message); ?><br>
    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <?php $__errorArgs = ['tarj_credito'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
   <div class="alert alert-danger">
      <?php echo e($message); ?><br>
    </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <div class="center"><a class="btn btn-dark" href="<?php echo e(route('indicePlatos')); ?>">Volver</a></div><br>
</body>
</html>
<?php /**PATH /var/www/html/TrabajoRestaurante/resources/views/FormularioCliente.blade.php ENDPATH**/ ?>