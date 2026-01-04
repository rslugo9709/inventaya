<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="../estilos/inventario.css" rel="stylesheet" >
</head>
</head>
<body>
   
<?php include './componentes/nav.php'; ?>

<br>
<h2 class="text-center">Bienvenido a la tabla de inventario</h2>
<br>
<div class="text-center">
<a href="/aca_pa/vistas/agregar_producto.php"><button type="button" class=" btn agregar" > Agregar producto</button> </a>
</div>
<div class="col-10 p-4">
    <table class="table table-striped table-hover text-center">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Accion</th>
        </thead>
        <tbody>
            <?php 
            include "../modelo/conexion.php";
            $sql = $conexion->query("SELECT * FROM inventario WHERE activo = 1;");
            while($datos  =$sql -> fetch_object()) { ?>
                <tr>
                    <td><?= $datos->id ?></td>
                    <td><?= $datos->nombre ?></td>
                    <td><?= $datos->marca ?></td>
                    <td><?= $datos->cantidad ?></td>
                    <td>
                        <a href=""> <i class="fa-solid fa-pencil"></i></a>
                    </td>
                    <td>
                        <a href=""> <i class="fa-solid fa-circle-minus"></i></a>
                    </td>
                </tr>

            <?php }
            ?>
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>