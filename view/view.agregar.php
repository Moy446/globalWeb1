<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/styleCRUD.css"> 
    <link rel="stylesheet" href="./style/style.css"> 
    <link rel="shortcut icon" href="./img/Logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid navContainer">
                <a class="navbar-brand" href="./index.php">
                    <img src="./img/logo.png" alt="Logo.jpg" width="30" height="24">
                    BDTecnology
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" id="navProductos">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="http://localhost/GlobalWebI/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./view/view.registro.html">Iniciar Sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./view/view.crearCuenta.html">Crear Cuenta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <h3>Agregar un producto</h3>
        <form action="./php/agregar.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" id="NombreProducto" name="nombre" placeholder="Nombre del producto" required>
            </div>
            <div class="mb-3">
                <label for="Descripccion" class="form-label">Descripccion Producto</label>
                <textarea class="form-control" name="descripccion" id="DescripccionProducto" rows="3"></textarea>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="Cantidad" class="col-form-label">Cantidad</label>
                </div>
                <div class="col-auto">
                    <input type="number" id="CantidadProducto" name="cantidad" class="form-control" aria-describedby="Cantidad" required>
                </div>
                <div class="col-auto">
                    <label for="Precio" class="col-form-label">Precio</label>
                </div>
                <div class="col-auto">
                    <input type="number" id="PrecioProducto" name="precio" class="form-control" aria-describedby="Precio" required>
                </div>
                <div class="col-auto">
                    <label for="formFile" class="form-label">Seleccionar la imagen</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="file" id="formFile" name="imagen" required>    
                </div>
            </div>
            <div class="separcion">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Agregar</button>
                </div>
            </div>
        </form>
    </div>

    </div>
    <footer>
    <script src="./js/indexSesion.js"></script>
    </footer>
    <?php
    if(isset($_SESSION['admin'])){
        echo"<script>
            iniciarAdmin('".$_SESSION['admin']."');
        </script>";
    }
    ?>
</body>

</html>