<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vista principal medicos</h1>
    <?php 
        $sessionmedico=session('sessionmedico');
    ?>

    <div class="Nombre">
        <h3 class="card-title">Bienvenido <?php echo $sessionmedico?></h3>
    </div>
</body>
</html>