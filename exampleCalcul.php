<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Reporte</title>
</head>
<body>
  <main>
      <div class="ml-4 row" style="width: 30rem;">
        <div class="col-12">
          <input type="number"  id="horas" required class="form-control m-2" placeholder="Total de horas">
          <div class="invalid-tooltip">
              Por favor ingresa la cantidad de horas.
          </div>
        </div>
        <div class="col-12">
          <input type="number"  id="horaPres" required class="form-control m-2" placeholder="Precio por hora">
          <div class="invalid-tooltip">
              Por favor ingresa la cantidad de precio por hora.
          </div>
        </div> 
        <div class="col-12">
          <input type="number"  id="transporte" class="form-control m-2" placeholder="Transporte">
        </div>
        <div class="col-12">
          <div class="alert alert-primary m-2" id="alert" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
            </button>
            <span aria-hidden="true" id="total"></span>
          </div>
          <div class="alert alert-danger m-2" id="alertErr" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
            </button>
            <span aria-hidden="true" id="msjErr"></span>
          </div>
        </div>
        <div class="col-3">
          <button class="btn btn-primary m-2"  id="btn" onclick="Calcular();">Calcular</button>
        </div>
        <div class="col-9">
         <button class="btn btn-danger m-2"  id="btnClear" onclick="Reset();">Clear</button>
        </div>
      </div>

         

  </main>
  <script>

      let horas=document.getElementById('horas');
      let horasPres=document.getElementById('horaPres');
      let transporte=document.getElementById('transporte');
      let alert=document.getElementById('alert');
      let alertErr=document.getElementById('alertErr');
      let btn=document.getElementById('btn');
      let btnClear=document.getElementById('btnClear');

      let total=document.getElementById('total');
      let msjErr=document.getElementById('msjErr');

      btnClear.style.display='none';
      alert.style.display = 'none';
      alertErr.style.display = 'none';

    const Calcular=()=>{
      let precio;
      let precioT;
      let trans=transporte.value;
      precio=horasPres.value*horas.value;
      precioT=parseInt(precio)+parseInt(trans);
      if(precio>0){
        alertErr.style.display = 'none';
        alert.style.display = 'block';
        total.innerHTML += "Precio total horas $" + precio; 
        btn.setAttribute('disabled', 'disabled');
        btnClear.style.display='block';

        if(trans>0){
          total.innerHTML += "<br> Total + transporte (s) $" + precioT;
        }else{
          total.innerHTML += "<br> Total + transporte (s) $" + 'no aplica';
        }
        }else{
          alert.style.display = 'none';
          alertErr.style.display = 'block';
          msjErr.innerHTML ='No ha seleccionado un valor o los valores son negativos'; 
        }
    }
    const Reset = ()=>{
      btn.removeAttribute('disabled', 'disabled');
      btnClear.style.display = 'none';
      alert.style.display = 'none';
      total.innerHTML = ''  
      horas.value='';
      horasPres.value='';
      transporte.value='';

    }
        
  </script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>