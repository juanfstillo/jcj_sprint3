var formaddproduct = document.getElementById('add_productform');
console.log(formaddproduct);

formaddproduct.onsubmit = function (ev) {
  Swal.fire(
    'Producto creado exitosamente',
    'Vamos a crear mas!',
    'success'
  )
  console.log('Se ha creado una producto');
}
