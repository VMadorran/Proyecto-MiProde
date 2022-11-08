<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Prode | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url()?> /plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('/css/adminlte.min.css')?>">
    <title>Document</title>
</head>
<body>

<!-- left column -->
<div class="col-md-12" style="align-items: center">
    <div class="col-md-4" style="align-content: center">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ingresar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?= site_url('/login-user')?>" method="POST" id="quickForm" style="align-items: center">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="text" name="email" class="form-control" id="user" placeholder="Ingresar Usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="Password" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar contraseña</label>
                        <input type="password" name="password" class="form-control" id="Password1" placeholder="Contraseña">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
