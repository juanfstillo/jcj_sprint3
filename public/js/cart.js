var form = document.var form = document.getElementById('form-registro');
// console.log(form);
form.onsubmit = function (ev) {
  Swal.fire(
    'Gracoas por elegirnos',
    'Te esperamos nuevamente!',
    'success'
  )
  console.log('Comprado');
}