<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Platos</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #535e5a;
  color: rgba(251, 240, 240, 0.979);
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
</head>
<body>
    <h1>Empresas</h1>
    <a href="{{route('inicio')}}"><button type="button" class="block">Volver</button></a>
    <ul>
        <li><a href="{{route('indicePlatos')}}">Platos</a></li>
        <li><a href="#">Empresas</a></li>
        <li><a href="{{route('indicePedidos')}}">Pedidos</a></li>
    </ul>
   @csrf
    <table width=100%  class="table table-hover table-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>

        </tr>
        @foreach($empresas as $empresa)
        <tr scope="row">
            <td>{{$empresa->nombre}}</td>
            <td>{{$empresa->email}}</td>
        </tr>
        @endforeach
    </table>

    <div class="center">{{$empresas->links()}}</div>


    
</body>
</html>
