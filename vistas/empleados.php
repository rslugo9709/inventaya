<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="../estilos/empleados.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
   
<?php include './componentes/nav.php'; ?>
<br>
<h2 class="text-center">Bienvenido a la tabla de empleados</h2>
<br>
<div class="text-center">
<a href="/aca_pa/vistas/agregar_empleado.php"><button type="button" class=" btn agregar" > Agregar empleado</button></a>
</div>
<?php 

include "../modelo/conexion.php";
include "../controlador/eliminar_empleado.php";
 ?>
<div class="col-12 p-4">
    <table class="table table-striped table-hover text-center">
        <thead>
            <th scope="col">ID</th> 
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Edad</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Creado en</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </thead>
        <tbody>
            <?php 
            
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
                        <!-- Le enviamos el id para modificar-->
                        <a href="modificar_empleado.php?id=<?= $datos->id  ?>"> <i class="fa-solid fa-pencil"></i></a>
                    </td>
                    <td>
                        <a href="empleados.php?id=<?=  $datos->id ?>"> <i class="fa-solid fa-circle-minus"></i></a>
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