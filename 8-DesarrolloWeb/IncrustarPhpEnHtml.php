<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incrustar Php en html</title>
</head>
<body>
<table>
    <?php //abre el php
    $array = ['name'=>'Nombre','last_name'=>'Apellido','address'=>'Dirección','phone'=>'Teléfono'];

    foreach ($array as $key=>$value):
    // cierre de php ?>

    <tr>
        <td>
            <?php echo $value ?>
        </td>
        <td>
            <input type="text" name="<?php echo $key?>">
        </td>
    </tr>
    <?php endforeach; //cierro el foreach ?>

<!--
    <tr>
        <td>
            Nombre
        </td>
        <td>
            <input type="text" name="name">
        </td>
    </tr>

    <tr>
        <td>
            Apellido
        </td>
        <td>
            <input type="text" name="last_name">
        </td>
    </tr>

    <tr>
        <td>
            Dirección
        </td>
        <td>
            <input type="text" name="adress">
        </td>
    </tr>

    <tr>
        <td>
            Teléfono
        </td>
        <td>
            <input type="text" name="telephone">
        </td>
    </tr>
-->
    <tr>
        <td>
            Sexo
        </td>
        <td>
            <input type="radio" name="sex" value="mujer"> Mujer
            <input type="radio" name="sex" value="hombre">Hombre
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="submit" value="Guardar">
        </td>
    </tr>
</table>
</body>
</html>