<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link href="../css/estiloPrincipal.css" rel="stylesheet">
  
  <!-- Enlace a Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servidor = "localhost";
$usuario = "root";
$pass = "";
$base_de_datos = "monas chinas";

// Establecer la conexión con la base de datos
$conn = new mysqli($servidor, $usuario, $pass, $base_de_datos);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $gender = htmlspecialchars($_POST['gender'] ?? ''); // Opcional
    $comentario = htmlspecialchars($_POST['com']); // Corregido
    $terminos = isset($_POST['terminos']) ? 'Aceptado' : 'No aceptado';

    if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($telefono)) {
        // Consulta para insertar datos en la base de datos
        $consulta = $conn->query("INSERT INTO contacto (nombre, apellido, email, telefono, comentario) 
                                  VALUES ('$nombre', '$apellido', '$email', '$telefono', '$comentario')");
        
        if ($consulta) {
            echo "Datos enviados con éxito.";
        } else {
            echo "Error al insertar datos: " . $conn->error;
        }
    } else {
        echo "Por favor completa todos los campos.";
    }
}
?>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark custom-black custom-navbar custom-menu-txt fixed-top ">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php"><img src="../assets/img/logo.webp" alt="logo.jpg" width="10%"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Sobre nosostros</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Ropa</a></li>
              <li><a class="dropdown-item" href="#">Manga</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Stickers</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Suscríbete</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
  <br><br><br><br><br><br><br><br><br><br><br><br>

  <!-- Contenido de la página -->
  <div class="container">
    <div class="row bg-light">
      <div class="col-xs-12 vh-75">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
          <div class="form-group">
            <h2 id="titulo-contacto">Contacto</h2>
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
          </div>
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa tu apellido">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico">
            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo con nadie más.</small>
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresa tu número de teléfono">
          </div>
          <br>
          <label for="exampleTextarea">Comentarios</label>
          <br>
          <textarea class="form-control" id="exampleTextarea" name="com" rows="5" placeholder="Escribe tu comentario aquí"></textarea>
          <br>
          
          <label for="Genero">Género</label>
          <br>
          <input type="radio" name="gender" value="female">Femenino
          <input type="radio" name="gender" value="male">Masculino
          
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
            <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
   
  <br><br><br><br><br><br><br><br><br><br><br><br>
  
  <!-- Footer -->
  <footer class="text-white pt-4 custom-black">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h5>Enlaces útiles</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Inicio</a></li>
            <li><a href="#" class="text-white">Acerca de</a></li>
            <li><a href="#" class="text-white">Servicios</a></li>
            <li><a href="#" class="text-white">Contacto</a></li>
          </ul>
        </div>
        
        <div class="col-md-4 mb-4">
          <h5>Contacto</h5>
          <p><i class="bi bi-telephone"></i> +1 234 567 890</p>
          <p><i class="bi bi-envelope"></i> correo@ejemplo.com</p>
        </div>

        <div class="col-md-4 mb-4">
          <h5>Síguenos</h5>
          <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i> Facebook</a>
          <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i> Twitter</a>
          <a href="#" class="text-white"><i class="bi bi-instagram"></i> Instagram</a>
        </div>
      </div>

      <div class="text-center py-3">
        <small>&copy; 2024 Ichiban_team. Todos los derechos reservados.</small>
      </div>
    </div>
  </footer>

  <!-- Enlace a Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
