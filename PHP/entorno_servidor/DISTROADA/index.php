<?php
$conexion = mysqli_connect( 'localhost', 'root', '', 'distroada');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DISTROADA</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <h1>DISTROADA</h1>

    <div class="mostrar">
        <h3 class="h3mostrar">Mostrar/Eliminar Datos</h3>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Versión</td>
                <td>Descripción</td>
                <td>Mes de lanzamiento</td>
                <td>Año de lanzamiento</td>
                <td>Estable</td>
                <td>Distribución</td>
            </tr>
            <?php
            $sql ="SELECT * From distros";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){

            
            ?>
            <form action="eliminar.php" method="POST">
            <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['version'] ?></td>
                <td><?php echo $mostrar['descripcion'] ?></td>
                <td><?php echo $mostrar['mes'] ?></td>
                <td><?php echo $mostrar['anno'] ?></td>
                <td><?php echo $mostrar['estable'] ?></td>
                <td><?php echo $mostrar['distribucion'] ?></td>
                <td><button type="submit" name ="borrar" value="<?php echo $mostrar['id']?>">Eliminar</button></td>
            </tr>
            </form>
            <?php
            }
                ?>
        </table>
    </div>

    <div class="insertar">
        <h3 class="h3insertar">Insertar Datos</h3>
        <form action="insertar.php" method="POST">
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Version: <input type="text" name="version"></p>
            <p>Descripción:</p>
            <p><textarea name="descripcion" rows="10" cols="50"></textarea></p>
            <p>Mes de lanzamiento: <input type="number" name="mes"></p>
            <p>Año de lanzamiento: <input type="number" name="anno"></p>
            <p>Estable: <select name="estable">
                    <option value="1" selected>Si</option>
                    <option value="0">No</option>
                </select>
            </p>
            <p>Distribución: <input type="text" name="distribucion"></p>
            <p>
                <input type="submit" value="Insertar">
                <input type="reset" value="Borrar">
            </p>
        </form>
    </div>

    <div class="actualizar">
        <h3 class="h3actualizar">Actualizar Datos</h3>
        <form action="actualizar.php" method="POST">
            <p>ID: <input type="number" name="id"></p>
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Version: <input type="text" name="version"></p>
            <p>Descripción:</p>
            <p><textarea name="descripcion" rows="10" cols="50"></textarea></p>
            <p>Mes de lanzamiento: <input type="number" name="mes"></p>
            <p>Año de lanzamiento: <input type="number" name="anno"></p>
            <p>Estable: <select name="estable">
                    <option value="1" selected>Si</option>
                    <option value="0">No</option>
                </select>
            </p>
            <p>Distribución: <input type="text" name="distribucion"></p>
            <p>
                <input type="submit" value="Actualizar">
                <input type="reset" value="Borrar">
            </p>
        </form>
    </div>

</body>

</html>