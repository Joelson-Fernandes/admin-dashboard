
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Dev. Joelson Fernandes
    </div>
    <!-- Default to the left -->
    <strong>Admin|Dashboard &copy; 2022 </strong> Todos os direitos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<script>
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
</script>

</body>
</html>