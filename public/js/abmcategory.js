var deleteclick = document.getElementsByClassName('red');
console.log(deleteclick);

function deletechart(){
Swal.fire(
    'Categoría eliminada exitosamente',
    'Sigamos actualizando!',
    'success'
  )
  console.log('Se ha borrado una categoría');
}
