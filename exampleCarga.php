<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>

<style>
    #contenedor-carga{
        position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;
        background: url('img/guitar-piano.gif') 50% 50% no-repeat rgb(249,249,249);
        opacity: .8;
    }
</style>
<body>
<div id="contenedor-carga">
</div>
<script>
    window.onload=function(){
    var contenedor=document.getElementById('contenedor-carga');
    contenedor.style.visibility='hidden';
    contenedor.style.opacity='1';
    }
</script>
</body>
</html>