<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table border="1">
        <?php
        for ($i = 1; $i <= 10; $i++) { ?>
            <tr>
                <td><?php echo "$i*$i=" . $i * $i ?></td>
            </tr>

        <?php }





        ?>

    </table>
</body>

</html>