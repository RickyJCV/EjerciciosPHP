<?php
$conexion = mysqli_connect( 'localhost', 'root', '', 'gamedata');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GAMEDATA</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <h1>GAMEDATA</h1>

    <div class="mostrar">
        <h3 class="h3mostrar">Mostrar/Eliminar Datos</h3>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Género</td>
                <td>Descripción</td>
                <td>Plataforma</td>
                <td>Desarrolladora</td>
                <td>Mes de lanzamiento</td>
                <td>Año de lanzamiento</td>
                <td>Precio</td>
            </tr>
            <?php
            $sql ="SELECT * From games";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){

            
            ?>
            <form action="eliminar.php" method="POST">
                <tr>
                    <td><?php echo $mostrar['id'] ?></td>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['genero'] ?></td>
                    <td><?php echo $mostrar['descripcion'] ?></td>
                    <td><?php echo $mostrar['plataforma'] ?></td>
                    <td><?php echo $mostrar['desarrolladora'] ?></td>
                    <td><?php echo $mostrar['mes'] ?></td>
                    <td><?php echo $mostrar['anno'] ?></td>
                    <td><?php echo $mostrar['precio'] ?></td>
                    <td><button type="submit" name="borrar" value="<?php echo $mostrar['id']?>">Eliminar</button></td>
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
            <p>Género: <input type="text" name="genero"></p>
            <p>Descripción:</p>
            <p><textarea name="descripcion" rows="10" cols="50"></textarea></p>
            <p>Plataforma: <input type="text" name="plataforma"></p>
            <p>Desarrolladora: <input type="text" name="desarrolladora"></p>
            <p>Mes de lanzamiento:
                <select name="mes">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </p>
            <p>Año de lanzamiento: <input type="number" name="anno"></p>
            <p>Precio: <input type="number" name="precio"></p>
            <p>
                <input type="submit" value="Insertar">
                <input type="reset" value="Borrar">
            </p>
        </form>
    </div>

    <div class="actualizar">
        <h3 class="h3actualizar">Actualizar Datos</h3>
        <form action="actualizar.php" method="POST">
            <p>ID:
                <select name="id">
                    <?php
                foreach (mysqli_query ( $conexion, "SELECT `id` FROM `games`;") as $array_de_id => $valor) {
                    echo "<option value='" . $valor['id'] . "'>" . $valor['id'] . "</option>";
                }
            ?>
                </select>
                <p>Nombre: <input type="text" name="nombre"></p>
                <p>Género: <input type="text" name="genero"></p>
                <p>Descripción:</p>
                <p><textarea name="descripcion" rows="10" cols="50"></textarea></p>
                <p>Plataforma: <input type="text" name="plataforma"></p>
                <p>Desarrolladora: <input type="text" name="desarrolladora"></p>
                <p>Mes de lanzamiento:
                    <select name="mes">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </p>
                <p>Año de lanzamiento: <input type="number" name="anno"></p>
                <p>Precio: <input type="number" name="precio"></p>
                <p>
                    <input type="submit" value="Actualizar">
                    <input type="reset" value="Borrar">
                </p>
        </form>
    </div>

</body>

</html>