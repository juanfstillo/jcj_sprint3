var x = document.forms["conocemosform"]["fullName"].value;
var mail = document.forms["conocemosform"]["email"].value;
var campo = document.forms["conocemosform"]["campo"].value;

function validateForm() {

if (x == "") {
  alert("[ERROR] JCJ | Tienda Online: Olvidaste poner tu nombre");
  return false;
}else if ( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(email)) ) {
    alert('[ERROR] JCJ | Tienda Online: Olvidaste poner tu mail');
    return false;
  }
};

    // function validacion() {
    //   if (condicion que debe cumplir el primer campo del formulario) {
    //     // Si no se cumple la condicion...
    //     alert('[ERROR] El campo debe tener un valor de...');
    //     return false;
    //   }
    //   else if (condicion que debe cumplir el segundo campo del formulario) {
    //     // Si no se cumple la condicion...
    //     alert('[ERROR] El campo debe tener un valor de...');
    //     return false;
    //   }
    //   ...
    //   else if (condicion que debe cumplir el último campo del formulario) {
    //     // Si no se cumple la condicion...
    //     alert('[ERROR] El campo debe tener un valor de...');
    //     return false;
    //   }
    //
    //   // Si el script ha llegado a este punto, todas las condiciones
    //   // se han cumplido, por lo que se devuelve el valor true
    //   return true;
    // }
