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
<link rel="icon" type="image/x-icon" href="{{ URL::to('/images/favicon.png') }} ">
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
    <form action="{{route('añadir_cliente')}}" method="post">
      @csrf
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
          @foreach($nombrempresas as $nombrempresa)
              <option value="{{$nombrempresa->nombre}}">{{$nombrempresa->nombre}}</option>
          @endforeach
          </select><br>

          <input type="submit" value="Enviar">
        </fieldset>
      </form>
    </div>


    @error('nombre')
      <div class="alert alert-danger">
        {{$message}}<br>
      </div>
      @enderror

      @error('telefono')
      <div class="alert alert-danger">
      {{$message}}<br>
    </div>
    @enderror

    @error('tarj_credito')
   <div class="alert alert-danger">
      {{$message}}<br>
    </div>
    @enderror

    <div class="center"><a class="btn btn-dark" href="{{route('indicePlatos')}}">Volver</a></div><br>
</body>
</html>
