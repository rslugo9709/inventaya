<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="../estilos/empleados.css" rel="stylesheet" >
</head>
</head>
<body>
   
<?php include './componentes/nav.php'; ?>
<br>
<h2 class="text-center">Bienvenido a la tabla de empleados</h2>
<br>
<div class="text-center">
<button type="button" class=" btn agregar" > Agregar empleado</button>
</div>
<div class="col-10 p-4">
    <table class="table table-striped table-hover text-center">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Edad</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Creado en</th>
            <th scope="col">Accion</th>
        </thead>
        <tbody>
            <?php 
            include "../modelo/conexion.php";
            $sql = $conexion->query("SELECT * FROM empleados WHERE activo = 1;");
            while($datos  =$sql -> fetch_object()) { ?>
                <tr>
                    <td><?= $datos->id ?></td>
                    <td><?= $datos->nombres ?></td>
                    <td><?= $datos->apellidos ?></td>
                    <td><?= $datos->edad ?></td>
                    <td><?= $datos->correo ?></td>
                    <td><?= $datos->direccion ?></td>
                    <td><?= $datos->fecha_creacion ?></td>
                    <td>
                        <a href=""> <i class="fa-solid fa-pen-to-square"></i></a>
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