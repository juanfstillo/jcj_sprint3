var form = document.getElementById('add_categoryform');
// console.log(form);

form.onsubmit = function (ev) {
  Swal.fire(
    'Categoría creada exitosamente',
    'Vamos a crear mas!',
    'success'
  )
  console.log('Se ha creado una categoría');
}
