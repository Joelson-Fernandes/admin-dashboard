$(function () {
    $("#example1").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": false,
    "pagingType": 'full_numbers',
    "buttons": [
        {
        extend: 'copy',
        text: 'Copiar'
        },
        "csv", "excel", "pdf", "print",
        {
        extend: 'colvis',
        text: 'Visibilidade da coluna'
        }]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});