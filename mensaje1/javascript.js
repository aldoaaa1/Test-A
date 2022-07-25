var nuevoMensaje = new Object();
  nuevoMensaje.fechaDeEntrega = "Ahora";
  nuevoMensaje.remitente = "Tu amorcito";
  nuevoMensaje.destinatario = "Mi chikita bella";
  nuevoMensaje.mensaje = "SiTeKeyoMucho ya ven conmigo :)";
  nuevoMensaje.posdata = "Quiero un elote.";

enviarNuevoMensaje();

if (nuevoMensaje.fueRecibido) {
  theAnswer()
}

function enviarNuevoMensaje(){
  nuevoMensaje.fueRecibido = true;
  }
function theAnswer(){
  let answer = "yo tambien tekeyomucho, un elotito o k, si o k?";
  console.log(answer);
  }