var COUNTRIES_API_URL = 'https://restcountries.eu/rest/v2/all';
var PROVINCIAS_API_URL = 'https://apis.datos.gob.ar/georef/api/provincias';
var ARGENTINA_CODE = '032';

var form = document.forms[0];
var countrySelect = form.elements[3];
var province = document.getElementById("province")
var formconocenos = document.getElementById("formconocenos")


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

  formconocenos.onsubmit = function (ev) {
    Swal.fire(
      'Tu mensaje ha sido enviado',
      'Ya podes disfrutar de nuestro e-shop',
      'success'
    )
    console.log('Excelente');
  }
