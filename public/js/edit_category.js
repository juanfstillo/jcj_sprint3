var edit_category = document.getElementById('edit_categoryform');
console.log(edit_category);
edit_category.onsubmit = function (ev) {
  Swal.fire(
    'Categoría editada exitosamente',
    'Sigamos actualizando!',
    'success'
  )
  console.log('Se ha editado un producto');
}
