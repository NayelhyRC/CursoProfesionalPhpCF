<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
        <?php
        require_once 'core/const.php';
            foreach (DATA_ANIMAL as $key=>$value):
        ?>
            <td>
                <?php echo $value; ?>
                <?php endforeach;?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="">Editar</a></td>
            <td><a onclick="javascript:return confirm('¿Estás seguro?');" href="">Eliminar</a></td>
        </tr>


    </table>
</body>
</html>