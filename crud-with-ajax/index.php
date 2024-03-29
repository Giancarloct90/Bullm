<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<?php
    require("assets/navbar.php");
?>
<div class="container">
    <br>
    <h1>Nuevo Contactos</h1>
        <form action="guardarContacto.php" method="post" id="guardarContacto">
            <div class="col-6">
                <input type="text" name="txtNombre" class="form-control" placeholder="Nombre" required="true"><br>
                <input type="text" name="txtApellido" class="form-control" placeholder="Apellido" required="true"><br>
                <input type="text" name="txtDireccion" class="form-control" placeholder="Direccion" required="true"><br>
                <input type="text" name="txtTelefono" class="form-control" placeholder="Telefono" required="true"><br>
                <input type="submit" class="btn btn-primary" style="width: 49%;" value="Guardar">
                <input type="reset" class="btn btn-secondary" style="width: 49%;" value="Limpiar">
            </div>
        </form>
        <br><br>
    <h1>Contactos</h1>
    <table class="table" >
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col" colspan="2">opciones</th>
            </tr>
        </thead>
        <tbody id="tablaContactos">

        </tbody>
    </table> 
    <script src="assets/js/jquery-3.4.1.js"> </script>
    <script src="assets/js/popper.min.js"> </script>
    <script src="assets/js/bootstrap.min.js"> </script>
    <script src="assets/js/index.js"></script>
</div>
</body>
</html>