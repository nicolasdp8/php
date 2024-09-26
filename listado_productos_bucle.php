<?php

ini_set('display errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\"4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900 F°",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000
);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-5 text-center">Listado de Productos</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table_hover border">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>
                                <th>Precio</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $contador = 0;
                            while ($contador < 3) { ?>
                            <tr>
                                <td><?php echo $aProductos[$contador]["nombre"] ?></td>
                                <td><?php echo $aProductos[$contador]["marca"] ?></td>
                                <td><?php echo $aProductos[$contador]["modelo"] ?></td>
                                <td><?php echo $aProductos[$contador]["stock"] > 10 ? "Hay stock" : ($aProductos[$contador]["stock"] > $contador && $aProductos[$contador]["stock"] <= 10 ? "Poco stock" : "No hay stock") ?></td>
                                <td><?php echo $aProductos[$contador]["precio"] ?></td>
                                <td><button class="btn btn-primary">Comprar</button></td>
                            </tr>
                         <?php
                            $contador++;
                            } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>

</body>

</html>