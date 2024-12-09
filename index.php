<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MonasChinas</title>
  <link href="css/estiloPrincipal.css" rel="stylesheet">
  
  <!-- Enlace a Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

 
  

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark custom-black custom-navbar custom-menu-txt fixed-top ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="../assets/img/logo.webp" alt="logo.jpg"width="10%"> </a>
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
              <li><a class="dropdown-item" href="#">Stikers</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Suscríbete</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <!-- Contenido de la página -->
    <!-- video niko niko ni -->
  <div class="container-fluid bg-dark">
    <div class="row g-0">
      <div class="col-lg-12">
        <video controls width="100%" autoplay muted>
          
          <source src="assets/vid/y2mate.com-Nico-Nico-Nii-Remix_v720P.webm" type="video/webm">
          Tu navegador no soporta el elemento <video>.
        </video> 
      </div>
    </div>
  </div>
<!--Menú de imagenes grandes -->
  <div class="sub_menu">
    <div class="row g-0">
      <div class="col-lg-4">
        <div id="img_sub_menu_1" class="hover-effect vh-100">
          <div class="texto_sub_menu">
            <h1>Mangas</h1>
            
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat natus laudantium delectus eum cupiditate provident, voluptatem incidunt? Iure quis tempore in deserunt recusandae quae, facere nisi, odio labore eveniet sequi. 
            <br>
            <br>
            <button  class="btn_estilo" onclick="window.location.href='hospedaje.html';">Ver Detalles</button>
          </div>
          
        </div>
      </div>
      <div class="col-lg-4">
        <div id="img_sub_menu_2" class="hover-effect vh-100">
          <div class="texto_sub_menu">
            <h1>Figuras</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat natus laudantium delectus eum cupiditate provident, voluptatem incidunt? Iure quis tempore in deserunt recusandae quae, facere nisi, odio labore eveniet sequi.
            <br>
            <br>
            <button  class="btn_estilo" onclick="window.location.href='vistas/producto.php';">Ver Detalles</button>
          </div>
          
        </div>
      </div>
      <div class="col-lg-4">
        <div id="img_sub_menu_3" class="hover-effect vh-100">
          <div class="texto_sub_menu">
            <h1>Playeras</h1>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat natus laudantium delectus eum cupiditate provident, voluptatem incidunt? Iure quis tempore in deserunt recusandae quae, facere nisi, odio labore eveniet sequi. 
            <br>
            <br>
            <button  class="btn_estilo" onclick="window.location.href='comida.html';">Ver Detalles</button>
          </div>
          
          
        </div>
      </div>
    </div>
  </div>  

<br>
<br>
<!--Zona articulos-->
  <p class="h2 secondary">Lo más HOT!!!</p>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div id="consulta-resultados">
      <?php 
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

        // Realizar la consulta SQL
        $consulta = $conn->query("SELECT * FROM producto WHERE id<4;");

        // Verificar si la consulta fue exitosa
        if (!$consulta) {
            die("Error en la consulta: " . $conn->error);
        }

        // Verificar si hay resultados
      
               
        if ($consulta->num_rows > 0) {
          // Imprimir los resultados
          echo "<div class='container-fluid'>";
          echo "<div class='row'>";
      
          while ($row = $consulta->fetch_assoc()) {
              // Extrae la información del producto
              $id = $row["id"];
              $nombre = $row["nombre"];
              $img = $row["img_producto"];
              $des=$row["descri"];
      
              // Crear una columna para cada producto
              echo "
              <div class='col-md-4'>
                  <div class='custom-card border-secudary'>
                      <img src='$img' alt='Imagen del producto' class='card-img-top'>
                      <div class='card-body'>
                          <h5 class='card-title'><b>$nombre</b></h5>
                      </div>
                  </div>
              </div>";
          }
      
          echo "</div>"; // Cierra la fila
          echo "</div>"; // Cierra el contenedor
      } else {
          echo "<p>No se encontraron resultados.</p>";
      }
      

        // Cerrar la conexión
        $conn->close();
      ?>
    </div>

      </div>
    </div>
  </div>
    
    
  <br>
  
  <!-- Footer -->
  <footer class=" text-white pt-4 custom-black">
    <div class="container-fluid">
      <div class="row">
        <!-- Sección de enlaces -->
        <div class="col-md-4 mb-4">
          <h5>Enlaces útiles</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Inicio</a></li>
            <li><a href="#" class="text-white">Acerca de</a></li>
            <li><a href="#" class="text-white">Servicios</a></li>
            <li><a href="vistas/contacto.php" class="text-white">Contacto</a></li>
          </ul>
        </div>
        
        <!-- Sección de contacto -->
        <div class="col-md-4 mb-4">
          <h5>Contacto</h5>
          <p><i class="bi bi-telephone"></i> +1 234 567 890</p>
          <p><i class="bi bi-envelope"></i> correo@ejemplo.com</p>
        </div>

        <!-- Sección de redes sociales -->
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
