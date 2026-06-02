<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu</title>
</head>
<body class=bg-ligth>
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-center p-3 mb-2 bg-danger text-white">
                    Menu de productos
                </h3>
            </div>
        </div>
        <div class="p-3 table-responsive">
        <table class="table caption-top">
        <caption>List of users</caption>
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Color</th>
            <th scope="col">Existencia</th>
            <th scope="col">Precio Compra</th>
            <th scope="col">Precio Venta</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach ($datos as $item)
            <td>{{$item->id}}</td>
            <td>{{$item->nom_prod}}</td>
            <td>{{$item->col_prod}}</td>
            <td>{{$item->exist_prod}}</td>
            <td>{{$item->pre_comp_prod}}</td>
            <td>{{$item->pre_vta_pod}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
        <h6>Elaboro: Angel Yanni Lopez Ureña</h6>
    </div>
</body>
</html>