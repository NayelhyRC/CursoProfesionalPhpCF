<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php?controller=animal&action=save" method="post">
    <table>
        <td><input type="hidden" name="id" value="<?php echo $animal->id;?>"></td>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="name" value="<?php echo $animal->name;?>"></td>
        </tr>

        <tr>
            <td>Especie</td>
            <td><input type="text" name="specie" value="<?php echo $animal->specie;?>""></td>
        </tr>

        <tr>
            <td>Raza</td>
            <td><input type="text" name="breed" value="<?php echo $animal->breed;?>""></td>
        </tr>

        <tr>
            <td>Género</td>
            <select name="gender" id="">
            <option <?php echo $animal->name ==='Macho'?'Selected':'';?> value="Macho">Macho</option>
            <option <?php echo $animal->name ==='Hembra'?'Selected':'';?> value="Hembra">Hembra</option>
            </select>
        </tr>

        <tr>
            <td>Color</td>
            <td><input type="text" name="color" value="<?php echo $animal->color;?>""></td>
        </tr>

        <tr>
            <td>Edad</td>
            <td><input type="text" name="age" value="<?php echo $animal->age;?>""></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="send" value="Guardar">
            </td>
        </tr>


    </table>
</form>
</body>
</html>