<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="../estilos/agregar_empleado.css" rel="stylesheet" >
</head>
</head>
<body>
   
<?php include './componentes/nav.php'; ?>

<br>
<h2 class="text-center">Agregar empleado</h2>
<br>
<?php 
include "../modelo/conexion.php";
include "../controlador/registro_persona.php";
?>
<div class="container col-4">
    <form method="POST">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombres</label>
        <input type="text" class="form-control" name="nombres">
    </div>
    <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos">
    </div>
    <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" class="form-control" name="edad">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion">
    </div>
    <div class="text-center">
    <button type="submit" class="btn agregar" name="btEmpleado" value="ok">Agregar</button>
    </div>
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