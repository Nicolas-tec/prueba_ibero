<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>inventario</title>
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del producto</th>
      <th scope="col">precio</th>
      <th scope="col">descripcion</th>
      <th scope="col">tipo</th>
      <th scope="col">stock</th>
      <th scope="col">fecha de creacion</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach ($datos as $inventario)
                  <th>{{$inventario->id}}</th>
                  <td>{{$inventario->Nombre_producto}}</td>
                  <td>{{$inventario->Precio}}</td>
                  <td>{{$inventario->Descripcion}}</td>
                  <td>{{$inventario->Tipo}}</td>
                  <td>{{$inventario->stock}}</td>
                  <td>{{$inventario->Fecha_creacion}}</td>
                  <td><input type="button" value="editar"></td>
                  <td><input type="button" value="eliminar"></td>
        @endforeach
    </tr>
  </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>