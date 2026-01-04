
<?php 

if(!empty($_POST["btmodificar"])){
        if(!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["edad"]) and !empty($_POST["email"]) and !empty($_POST["direccion"]) ){
            
            $id = $_POST["id"];
            $nombres = $conexion->real_escape_string($_POST["nombres"]);
            $apellidos = $conexion->real_escape_string($_POST["apellidos"]);
            $edad = intval($_POST["edad"]); // Forzamos a que sea un número entero
            $correo = $conexion->real_escape_string($_POST["email"]);
            $direccion = $conexion->real_escape_string($_POST["direccion"]);

            $resultado = $conexion->query("UPDATE empleados SET nombres = '$nombres', apellidos = '$apellidos', edad = $edad, correo = '$correo', direccion = '$direccion' WHERE id= $id");

            //validamos si quedó registrado
            if ($resultado){
                echo '<div  id="alerta" class="alert alert-success text-center">Empleado actualizado</div>';
            }else{
                echo '<div  id="alerta" class="alert alert-danger text-center">Error al modificar/div>';
            }
            
        }else{
            echo '<div id="alerta" class="alert alert-warning text-center" >Por favor, ingrese todos los campos</div>';
        }
}

?>