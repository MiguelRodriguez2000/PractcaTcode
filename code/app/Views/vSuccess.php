<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        body{
            background: #bbff99;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>La factura se registro con exito,
            su identificador es el:
                <?php echo$id_factura; ?></h2>
                <a class="text-dark" href="<?php echo base_url();?>practica/PractcaTcode-main/code/public/Home/mostrarRegistros">Home</a>
    </div>
    <footer>
</footer>
</body>
</html>