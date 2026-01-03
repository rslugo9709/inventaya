<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quesos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    

</head>
<body>
    
<div class="container-fluid vh-100">
  <div class="row h-100">
    
    <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center" style="background-color: #fff8e4;">
       <div class="text-center">
          <img src="./imagenes/hero.svg" class="img-fluid" style="height: 80vh; border-radius: 20px;" alt="Ilustración">
          <h2 class="mt-4 fw-bold" style="color: black;">Tu negocio</h2>
          <p>Siempre organizado!</p>
       </div>
    </div>

    <div class="col-md-6 d-flex align-items-center justify-content-center bg-white">
      <div class="p-5" style="width: 100%; max-width: 400px;">
        <div class="text-center mb-4">
            <div class="text-start">
                <img src="./imagenes/logo.png" width= 80%  alt="Logo">    
            </div>
           
           <h3>Ingresar creedenciales</h3>
        </div>
        <div class="container-fluid row">
            <form action="./controlador/login.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                <input type="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn " style="color: white; background-color: black;">Ingresar</button>
            <button type="button" class="btn " style="color: white; background-color: black;">Registrarme</button>
            </form>

        </div>
      </div>
    </div>

  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>