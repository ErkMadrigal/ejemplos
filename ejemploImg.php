<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
  #contenedor-carga{
    background-color:rgba(255,255,255,0.5);
    height:100%;
    width:100%;
    position:fixed;
    -webkit-transition: all 1a ease;
    -o-transition:all 1s ease;
    transition:all 1s ease;
    z-index:10000;
  }
  #carga{
    border:5px solid #ccc;
    border-top-color: #3defe7;
    border-top-style:groove;
    height:100px;
    width:100px;
    border-radius:100%;
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    margin:auto;
    -webkit-animation:girar 1.5s linear infinite;
    -o-animation:girar 1.5s linear infinite;
    animation:girar 1.5 linear infinite;
  }
  @keyframes girar{
    from{transform:rotate(0deg);}
    to{transform:rotate(360deg);}
  }
</style>
<body>
<div id="contenedor-carga">
  <div id="carga"></div>  
</div>

    <style>img{width: 20rem;height: 20rem;border-radius: 1rem;}</style>
    <input id="file" type="file" />
    <hr>
    <div id="preview"></div>
    <img src="img/bg.jpg" alt="">
    <img src="img/mision.jpg" alt="">
    <img src="img/bg.jpg" alt="">
    <img src="img/mision.jpg" alt="">
    <img src="img/bg.jpg" alt="">
    <img src="img/mision.jpg" alt="">


<script>
  window.onload=function(){
    var contenedor=document.getElementById('contenedor-carga');
    contenedor.style.visibility='hidden';
    contenedor.style.opacity='1';
  }

  document.getElementById("file").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();

    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);

    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function(){
      let preview = document.getElementById('preview'),
              image = document.createElement('img');

      image.src = reader.result;

      preview.innerHTML = '';
      preview.append(image);
    };
  }
</script>

</body>
</html>

