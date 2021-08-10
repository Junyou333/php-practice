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

        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <table border="1">
        <?php for ($i = 0; $i < 256; $i += 17) : ?>
            <tr>
                <td style="background-color: #<?= sprintf("%'.02x", $i) ?>0000;"></td>
            </tr>

        <?php endfor ?>

    </table>
</body>

</html>