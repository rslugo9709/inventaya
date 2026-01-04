

<?php

    if(!empty($_POST["btEmpleado"])){
        if(!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["edad"]) and !empty($_POST["email"]) and !empty($_POST["direccion"]) ){
            
        $nombres = $conexion->real_escape_string($_POST["nombres"]);
        $apellidos = $conexion->real_escape_string($_POST["apellidos"]);
        $edad = intval($_POST["edad"]); // Forzamos a que sea un número entero
        $correo = $conexion->real_escape_string($_POST["email"]);
        $direccion = $conexion->real_escape_string($_POST["direccion"]);

            $sql = $conexion->query("insert into empleados( nombres, apellidos, edad, correo, direccion, activo) VALUES ('$nombres','$apellidos',$edad, '$correo', '$direccion', 1)");

            //validamos si está registrado
            if ($sql==1){
                echo '<div  id="alerta" class="alert alert-success text-center">Perfecto, empleado registrado</div>';
            }else{
                echo '<div  id="alerta" class="alert alert-danger text-center">Error al registrar</div>';
            }
            
        }else{
            echo '<div id="alerta" class="alert alert-warning text-center" >Por favor, ingrese todos los campos</div>';
        }
    }

?>