<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estadísticas</title>
  <!-- ESTILOS DE LA PÁGINA -->
    <style>
      body{
        margin: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: sans-serif;
        text-align: center;
      }
      #cambios{
        max-width: 650px;
      }
    </style>
</head>
<body>

  <!-- CONTENIDO DE LA PÁGINA -->
    <main>
      <h1>Promedio de cambios de tonos</h1>
      <p>Presiona el boton cada que cambie el tono</p>
      <button id="btn-cambio">Cambio de Tono</button>
      <button id="btn-reset">Reset</button>
      <p id="promedio"></p><p id="cantidad"></p>
      <div id="cambios"></div>
    </main>


  <!-- SCRIPT DE LA PÁGINA -->
    <script>
      function q(id){ return document.getElementById(id) }
      var tonos = [];
      var [divPromedio, divCantidad, divCambios] = [q('promedio'), q('cantidad'), q('cambios')]
      q('btn-cambio').addEventListener('click', function(){
        let tiempo = Date.now();
        tonos.push(tiempo);
        let dif = []; let anterior = "";
        for (var i = 0; i < tonos.length; i++) {
          if (anterior != "") {
            let diferencia = tonos[i] - tonos[i-1];
            dif.push(diferencia);
            }
          if (i == (tonos.length - 1)) {
            let suma = 0; divCambios.innerHTML = "";
            for (var x = 0; x < dif.length; x++) {
              suma += dif[x];
              divCambios.innerHTML += '<strong>'+(x+1)+'</strong> '+dif[x]/1000+' seg. | ';
              }
            promedio = suma/(dif.length*1000)+' segundos';
            divPromedio.innerHTML = 'Promedio Global: '+promedio;
            divCantidad.innerHTML = 'Cantidad de Acordes: '+tonos.length;
            }
          anterior = tonos[i];
          }
        })
      q('btn-reset').addEventListener('click', function(){
        location.reload();
        })

    </script>
</body>
</html>