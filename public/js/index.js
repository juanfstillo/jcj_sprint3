var COUNTRIES_API_URL = 'https://restcountries.eu/rest/v2/all';
var PROVINCIAS_API_URL = 'https://apis.datos.gob.ar/georef/api/provincias';
var ARGENTINA_CODE = '032';

var form = document.forms[0];
var countrySelect = form.elements[3];
var province = document.getElementById("province");
var passConfirm = document.getElementById("password");
var confirm = document.getElementById("passConfirm");




function obtenerProvincias() {
  fetch(PROVINCIAS_API_URL)
    .then(function (res) {
      return res.json();
    }).then(function (data) {
      var provincias = data.provincias;
      var select = document.createElement('select');
      select.setAttribute('id', 'provinceSelect');
      select.setAttribute('name', 'province');
      for (var provincia of provincias) {
        province.setAttribute('style', 'display:inline');
        var option = document.createElement('option');
        option.setAttribute('value', provincia.id);
        option.innerHTML = provincia.nombre;
        select.append(option);
      }
      province.append(select);
    })
}

function sacarProvinciasSelect() {
  var provinceSelect = document.getElementById('provinceSelect');
  if (provinceSelect !== null) {
    provinceSelect.parentNode.removeChild(provinceSelect);
  }
}

countrySelect.onchange = function () {
  var selectedValue = this.selectedOptions[0].value;
  if (selectedValue === ARGENTINA_CODE) {
    obtenerProvincias();


  } else {
    sacarProvinciasSelect();
  }
}

form.onsubmit = function (ev) {
  Swal.fire(
    'Cuenta creada con éxito',
    'Ya podes disfrutar de nuestro e-shop',
    'success'
  )
  console.log('Se solicitó el registro de cuenta');
}

fetch(COUNTRIES_API_URL)
  .then(function (res) {
    return res.json();
  })
  .then(function (countries) {
    for (var country of countries) {
      var option = document.createElement('option');
      option.setAttribute('value', country.numericCode);
      option.innerHTML = country.name;
      countrySelect.append(option);
    }
  });


  var myInput = document.getElementById("password");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  var passConfirm = document.getElementById("password-confirm");
  var confirm = document.getElementById("passConfirm");
  // When the user clicks on the password field, show the message box
  passConfirm.onfocus = function() {
    document.getElementById("passConfirm").style.display = "block";
  }
  // When the user clicks outside of the password field, hide the message box
  passConfirm.onblur = function() {
    document.getElementById("passConfirm").style.display = "none";
  }
  // When the user starts to type something inside the password field
  passConfirm.onkeyup = function() {
    // Validate lowercase letters
    if(passConfirm.value.match(myInput.value)) {
      confirm.classList.remove("invalid");
      confirm.classList.add("valid");
    } else {
      confirm.classList.remove("valid");
      confirm.classList.add("invalid");
  }
  }
  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
  }
  // When the user clicks outside of the password field, hide the message box
  myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
  }
  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
  }
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    // Validate length
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
  const email = document.getElementById('email');
  const emailError = document.querySelector('#email + span.error');
  email.addEventListener('input', function (event) {
    // Each time the user types something, we check if the
    // form fields are valid.
    if (email.validity.valid) {
      // In case there is an error message visible, if the field
      // is valid, we remove the error message.
      emailError.innerHTML = ''; // Reset the content of the message
      emailError.className = 'error'; // Reset the visual state of the message
    } else {
      // If there is still an error, show the correct error
      showError();
    }
  });
  form.addEventListener('submit', function (event) {
    // if the email field is valid, we let the form submit
    if(!email.validity.valid) {
      // If it isn't, we display an appropriate error message
      showError();
      // Then we prevent the form from being sent by canceling the event
      event.preventDefault();
    }
  });
  function showError() {
    if(email.validity.valueMissing) {
      // If the field is empty
      // display the following error message.
      emailError.textContent = 'Tenes que ingresar un e-mail.';
    } else if(email.validity.typeMismatch) {
      // If the field doesn't contain an email address
      // display the following error message.
      emailError.textContent = 'Los valores ingresados deben corresponder a un e-mail.';
    }
    // Set the styling appropriately
    emailError.className = 'error active';
  }

//   function validacion() {
//     valor = document.getElementById("campo").value;
//   if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
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
// };
