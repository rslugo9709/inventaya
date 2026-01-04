<?php
include "../modelo/conexion.php";
$id = $_GET["id"];

$sql = $conexion-> query("SELECT * FROM inventario WHERE id=$id");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="../estilos/agregar_empleado.css" rel="stylesheet" >
</head>

<body>
   
<?php include './componentes/nav.php'; ?>

<br>
<h2 class="text-center">Modificar producto</h2>
<br>
<?php 
//include "../modelo/conexion.php";
include "../controlador/modificar_producto.php";
?>
<div class="container col-4">
    <form method="POST">
    <?php 
        //mientras en sql hayan datos, 
        while($datos= $sql ->fetch_object()){
            
    ?>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">
    </div>
    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" name="marca" value="<?= $datos->marca?>">
    </div>
    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" name="cantidad" value="<?= $datos->cantidad?>">
    </div>
    <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
    <div class="text-center">
    <button type="submit" class="btn agregar" name="btmodificar" value="ok">Modificar</button>
    </div>
            
    <?php
        }
    ?>

    </form>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<!-- Esto es para desvanecer la alerta lentamente-->
<script>
    
    document.addEventListener("DOMContentLoaded", function() {
        
        const alerta = document.getElementById('alerta');
        
        if (alerta) {
            
            setTimeout(function() {

                alerta.style.opacity = '0';
                alerta.style.transition = 'opacity 1s ease';
            }, 5000); 
        }
    });
</script>
</body>
</html>