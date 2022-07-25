function q1(a){return document.querySelector(a)}
function q2(a){return document.querySelectorAll(a)}
divCanciones = q1("#canciones");
divGrafica = q1("#grafica");
var puntuacion = []; var name = 0; calificaciones_count = 0;

const opciones = ['No me gusta', 'Me da igual', 'Me gusta', 'No la he escuchado'];
canciones.forEach(function(data){
  let html = `<div class="cancion"><h3>${data}</h3><div class="opciones">`;
  let values = [1, 2, 3, 2]; let i1 = 0;
  for(op of opciones){
    let v = JSON.stringify([data, values[i1]]);
    html += `<p><label><input name="${name}" type="radio" value='${v}'><span>${op}</span></label></p>`;
    i1++;
  }
  html += '</div></div>';
  divCanciones.innerHTML += html;
  name ++;
  puntuacion[data] = 0;
});

function calificar(){
  calificaciones_count++;
  let answers = q2("input:checked");
  for(input of answers){
    let nombre = JSON.parse(input.value)[0];
    let valor = JSON.parse(input.value)[1];
    puntuacion[nombre] += valor;
  }
  console.log("puntuacion", puntuacion);
}