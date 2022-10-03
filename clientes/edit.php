<?php
include('../config/config.php');
include('cliente.php')
$p = new cliente();
$dp = $p ->getOne($_GET['id']);

$update = $p->update($_POST);
if ($update){
    $mensaje='<div class="alert alert-success" role="lert">Sesión modificada con exito</div>';
}else{
    $mensaje = '<div class="alert alert-danger" role="alert" > Error! </div>';
}



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <tittle> Modificar Cliente </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
<?php include('../menu.php')?>
    <div class="container">
        <?php
        if (isset($mensaje)){
            echo $mensaje;
        }
        ?>
        <h2 class="text-center mb-2"> Modificar Cliente </h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="nombres" id="nombres" placeholder="Nombres o razón social" 
                    require class="form-control" value="<?= $dp->nombres ?>" />
                    <input type="hidden" name="id" value="<?= $dp->id ?>" />
        
    </div>
    <div class="col">
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" 
        require class="form-control" value="<?= $dp->apellidos ?>" />
    </div>
    </div>

    <div class="row mb-2">
    <div class="col">
    <input type="email" name="email" id="email" placeholder="Email cliente" require class="form-control" 
    value="<?= $dp->email ?>" /> 
    </div>
    <div class="col">
        <input type="number" name="celular" id="celular" placeholder="Número celular" 
        require class="form-control" value="<?= $dp->celular ?>" />
    </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <textarea name="utiles" id="utiles" placeholder="Cuentanos tu solicitud o inquietud" 
            require class="form-control"><?= $dp->utiles ?> </textarea>
            
    </div>
    </div>

    <div class="row mb-2">
        <div class="col">
        <input type="datetime-local" name="sessionDate" id="sessionDate" require class="form-control" value="<?= $date->format('Y-m-d\TH:i') ?>"/>
    </div>
    <div class="col">
    <input type="text" name="duration" id="duration" placeholder="Duración de la sesión" require class="form-control" value="<?= $date->duration ?>" /> 
    </div>
    </div>
    <div class="rowmb-2">
        <div class="col">
            <input type="file" name="image" id="image" class="form-control" />
    </div>
    </div>

    <button class="btn btn-success">Modificar </button>
    </form>
    </div>
    </body>

    </html>
