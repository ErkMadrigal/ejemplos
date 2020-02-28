<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Effects - switchClass Demo</title>
  <style>
  .newClass { width: 80%; margin-left:15.6rem;}
  .anotherNewClass {width: 100%;}
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#button" ).on( "click", function() {
      $( ".newClass" ).switchClass( "newClass", "anotherNewClass", 1000 );
      $( ".anotherNewClass" ).switchClass( "anotherNewClass", "newClass", 1000 );
    });
  } );
  </script>
</head>
<body>
 
<div class="toggler">
  <div id="effect" class="newClass">
  <button id="button">Run Effect</button>

  <?php for($i=0; $i<50; $i++):?>
      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede.
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, natus.
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia ducimus deleniti consequuntur. Blanditiis aperiam adipisci, sunt ea at animi dolore?
<?php endfor;?>
    </div>
</div>
 
 
</body>
</html>
