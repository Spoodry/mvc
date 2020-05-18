<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div id="main">
        <h1 class="center">Detalle de <?=$this->alumno->matricula; ?></h1>

        <div class="center"><?= $this->mensaje; ?></div>

        <form action="<?=constant('URL')?>consulta/actualizarAlumno" method="POST">
            <p>
                <label for="matricula">Matrícula</label><br>
                <input type="text" name="matricula" value="<?=$this->alumno->matricula; ?>" disabled required>
            </p>
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" value="<?=$this->alumno->nombre; ?>" required>
            </p>
            <p>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" value="<?=$this->alumno->apellido; ?>" required>
            </p>
            <p>
                <input type="submit" value="Actualizar alumno">
            </p>
        </form>

    </div>

    <?php require 'views/footer.php'; ?>

</body>
</html>