var rows = document.querySelectorAll('.order-row');

for (var row of rows) {
  row.onclick = function onRowClick() {
    var id = this.getAttribute('data-id');
    var orderDetailRows = document.querySelectorAll(`.order-${id}-detail`);
    for (var orderDetailRow of orderDetailRows) {
      orderDetailRow.classList.toggle('d-none');
    }
  }
}