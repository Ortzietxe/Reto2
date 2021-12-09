<html lang="es">
<head>
    <title>FNEXUS</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon2.png"/>
    <!-- ViewPort para diferentes media-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Libreria iconos social media footer-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700&display=swap" rel="stylesheet">

    <!-- archivos JavaScript-->
    <script src="../JS/jquery-3.4.1.min.js"></script>
    <script src="../JS/slick.js" type="text/javascript"></script>
    <script src="../JS/main.js"></script>

    <!-- Ventanas emergentes-->
    <script src="../JS/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="../JS/jquery.modal.min.css"/>

    <!--slick slides-->
    <link rel="stylesheet" href="../CSS/slick.css">
    <link rel="stylesheet" href="../CSS/slick-theme.css">


    <!-- estilos CSS-->
    <link href="../CSS/normalize.css" rel="stylesheet"/>
    <link href="../CSS/estilos.css" type="text/css" rel="stylesheet">
    <link href="../CSS/vista_usuario.css" type="text/css" rel="stylesheet">
    <link href="../CSS/barra_navegacion.css" type="text/css" rel="stylesheet">


    <!-- includes php datos-->
    <?php
    require_once('PHPMailer/PHPMailerAutoload.php');
    require 'sendEmails.php';
    include 'acceso_a_datos/conexion.php';
    include 'acceso_a_datos/funciones_index.php';
    include 'acceso_a_datos/funciones_vista_anuncio.php';
    include 'acceso_a_datos/funciones_vista_perfil.php';
    include 'acceso_a_datos/funciones_publicar_anuncio.php';
    require 'actions.php';
    echo 'lalallalallalala';
    ?>

</head>
<body>
<div id="page-container">

<!-- Barra de navegacion -->
<?php
require ('barra_nav_principal.php');
?>

