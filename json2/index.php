<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Labores Recepción y Administración Capella</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    p{
      margin-top: 4px;
      font-size: 16px;
    }
    h1{
      margin-top: 0;
    }
    h2{
      margin-bottom: 5px;
      margin-top: 10px;
      font-size: 40px;
    }
    h5{
      margin-bottom: 4px;
    }
  </style>
</head>
<body>
  <div id="content" class="container">
    <h1>Lista de Tareas de Recepción</h1>
  </div>
  <script src="dataA.json"></script>
  <script>
    var divContent = document.getElementById('content');
    divContent.innerHTML += '<h2>Tareas Diarias</h2>';
    dataA.Labores.forEach((l)=>{
      let html = `<h5>${l.Titulo}</h5>`;
      html += `<p>${l.Descripción}</p>`;
      divContent.innerHTML += html;
    });
    divContent.innerHTML += '<h2>CheckList de Entrada</h2>';
    dataA.CheckList_entrada.forEach((e)=>{
      let html = `<h5>${e.Titulo}</h5>`;
      if (e.Descripción) {
        html += `<p>${e.Descripción}</p>`;
      }
      divContent.innerHTML += html;
    });
    divContent.innerHTML += '<h2>CheckList de Salida</h2>';
    dataA.CheckList_salida.forEach((e)=>{
      let html = `<h5>${e.Titulo}</h5>`;
      if (e.Descripción) {
        html += `<p>${e.Descripción}</p>`;
      }
      divContent.innerHTML += html;
    });
    divContent.innerHTML += '<h2>CheckList de Redes y Contacto</h2>';
    dataA.CheckList_redes.forEach((e)=>{
      let html = `<h5>${e.Titulo}</h5>`;
      if (e.Descripción) {
        html += `<p>${e.Descripción}</p>`;
      }
      divContent.innerHTML += html;
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>