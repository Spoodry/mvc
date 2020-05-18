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
        <h1 class="center">Sección de Consulta</h1>
        <div id="respuesta" class="center"></div>

        <table width="100%">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody id="tbody-alumnos">
                <?php 
                    include_once 'models/alumno.php';

                    foreach($this->alumnos as $row) {
                        $alumno = $row;
                ?>
                <tr id="fila-<?=$alumno->matricula; ?>">
                    <td><?=$alumno->matricula; ?></td>
                    <td><?=$alumno->nombre; ?></td>
                    <td><?=$alumno->apellido; ?></td>
                    <td><a href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula; ?>">Editar</a></td>
                    <td><button class="bEliminar" data-matricula="<?=$alumno->matricula; ?>">Eliminar</button></td>
                    <!--<td><a href="<?php echo constant('URL') . 'consulta/eliminarAlumno/' . $alumno->matricula; ?>">Eliminar</a></td>-->
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <?php require 'views/footer.php'; ?>

    <script src="<?= constant('URL'); ?>public/js/main.js"></script>

</body>
</html>