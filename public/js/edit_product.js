var edit_product = document.getElementById('edit_productform');
console.log(edit_product);
edit_product.onsubmit = function (ev) {
  Swal.fire(
    'Producto editada exitosamente',
    'Sigamos actualizando!',
    'success'
  )
  console.log('Se ha editado un producto');
}
