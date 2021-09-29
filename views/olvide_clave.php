<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Clave</title>
    <!--CSS -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../public/css/estilo.css">
    <!--JS -->
    <script src="../public/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../public/js/jquery-1.9.1.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h3>Cambio de Contraseña</h3>
      <form action="token.php" method="POST" style="margin-top: 50px;">
      <div class="input-group mb-3" style="width: 300px;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            <input type="text" name="user" class="form-control"
            placeholder="Usuario" required="ON">
        </div>
      </form>
    </div>
    <div class="container">
      <form action="token.php" method="POST" style="margin-top: 50px;">
      <div class="input-group mb-3" style="width: 300px;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-envelope-square"></i>
                </span>
            </div>
            <input type="text" name="email" class="form-control"
            placeholder="Correo" required="ON">
        </div>
      </form>
    </div>
    <div>
        <button class="btn btn-success">Procesar</button>
    </div>
</body>
</html>