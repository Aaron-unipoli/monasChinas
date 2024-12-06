<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MonasChinas-index</title>
  <link href="css/estiloPrincipal.css" rel="stylesheet">

  <!-- Enlace a Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
  <style>
    .custom-menu-txt{
      font-size: 20px;
    }
    .custom-black {
    background-color: rgb(252, 167, 232);
    color: #ffffff !important; /* o background-color según el contexto */
    
    }
    #ficha{
      height: 150px;
    }
    .texto_sub_menu {
  position: relative;
  z-index: 1;
  color: white;
  text-align: center;
  padding-top: 65%;
  font-size: 20px;
  text-shadow: 2px 2px 3px black;
  opacity: 0;
  transition: opacity 0.3s ease;
  }
/* Esto es nuevo comentario*/
  .img_sub_menu{
  margin: 0px;

  height:900px ;
  color: #ebebeb;
  text-align: center;
  padding-top: 78%;
  text-shadow: 2px 2px 3px black;
  font-size: large;

}
#img_sub_menu_1{
  background-color: #365B2D;
  background-image: url("../assets/img/nJ4EFJyO_o.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  height: 800px;
  display: flexbox;
}


#img_sub_menu_2{
  background-color: #365B2D;
  background-image: url("../assets/img/2a300371-2a70-45b2-9373-db6ada3f6d1f.499645feb9345eecc6265cc23b072b56.webp");
  background-repeat: no-repeat;
  background-size: cover;
  height: 800px;
}
#img_sub_menu_3{
  background-color: #365B2D;
  background-image: url("../assets/img/items_1840633_826243_0_20180628140915_b.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  height: 800px;
}
.hover-effect {
  position: relative;
  overflow: hidden;
}

.hover-effect::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0); /* Sin opacidad inicialmente */
  transition: background-color 0.3s ease;
  border-bottom: #218838;
}

.hover-effect:hover::before {
  background-color: rgba(0, 0, 0, 0.7); /* Opacidad de color negro al hacer hover */
}

.texto_sub_menu {
  position: relative;
  z-index: 1; /* Para que el texto esté por encima de la capa negra */
  color: white; /* Para que el texto sea visible sobre el fondo oscuro */
  text-align:  center;
  padding-top: 65%;
  font-size: 20px;
  text-shadow: 2px 2px 3px black;
  opacity: 0; /* Oculta el texto inicialmente */
  transition: opacity 0.3s ease; /* Suaviza la aparición del texto */
}
.hover-effect:hover .texto_sub_menu {
  opacity: 1; /* El texto aparece al hacer hover */
}
.hover-effect:hover .btn_estilo {
  opacity: 1; /* El texto aparece al hacer hover */
}

.custom-card {
        width: 250px; /* Ancho fijo */
        height: 400px; /* Alto fijo */
        border: 1px solid #007bff; /* Borde azul de 2px */
        border-radius: 10px; /* Bordes redondeados */
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Sombras opcionales */
    }
    .custom-card img {
        max-height: 300px; /* Limitar la altura de la imagen */
        object-fit: cover; /* Recortar la imagen si es necesario */
    }
    #fila{
      border:black;
      border: 2px;
    }
 
  </style>
  

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark custom-black custom-navbar custom-menu-txt fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="../assets/img/logo.webp" alt="logo.jpg"width="20%"> </a>
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

  

 

  <!-- Contenido de la página -->
 
  <div class="container-fluid bg-dark">
    <div class="row g-0">
      <div class="col-lg-12">
        <video controls width="100%" autoplay replay muted>
          
          <source src="../assets/vid/y2mate.com-Nico-Nico-Nii-Remix_v720P.webm" type="video/webm">
          Tu navegador no soporta el elemento <video>.
        </video> 
      </div>
    </div>
    
    
  </div>
  
<br>
<br>
<div class="container border border-secundary ">
  <div class="row">
    <div class="col-md-12 ">
    <table class="tablas">
    <thead>

    </thead>
    <tbody >
  <!-- Inicio del PHP que trae toda la info de los productos -->
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
        $consulta = $conn->query("SELECT * FROM producto");

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
              $prec=$row["precio"];
      
              // Crear una columna para cada producto
              echo "<tr><td><img src='$img' width=350px></td><td>$nombre</td><td> $des</td><td>$prec</td></tr>";
          }
      
          echo "</div>"; // Cierra la fila
          echo "</div>"; // Cierra el contenedor
      } else {
          echo "<p>No se encontraron resultados.</p>";
      }
      

        // Cerrar la conexión
        $conn->close();
      ?>

  </tbody>

</table>

    </div>
    
  </div>


</div>


  
  
  
  <hr class="featurette-divider">
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
            <li><a href="#" class="text-white">Contacto</a></li>
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
