<?php
include "koneksi.php";
include "../../AdminLTE/header.php";
include "../../AdminLTE/sidebar.php";
$query = mysqli_query($conn, "SELECT * FROM tb_golonganukt WHERE id_kelompok='$_GET[id_kelompok]'");
$data  = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../AdminLTE/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../AdminLTE/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/summernote/summernote-bs4.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<title>Edit Data | Kelompok UKT</title>
</head>
    <body><div class="w-50 mx-auto border p-3 mt-5">
        <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Data Kelompok UKT</h4>
        <form class="form-horizontal style-form" action="edit_golonganukt.php" method="post" name="form1" id="form1">
            <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Id Kelompok UKT</label>
                <div class="col-sm-10">
                    <input name="id_kelompok" type="text"  class="form-control" value="<?php echo $data['id_kelompok']; ?>" />
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Kelompok UKT</label>
                <div class="col-sm-10">
                    <input name="kelompok_ukt" type="text" id="kelompok_ukt" class="form-control" placeholder="kelompok_ukt" value="<?php echo $data['kelompok_ukt']; ?>" required />
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label">Rentang UKT</label>
                <div class="col-sm-10">
                    <input name="rentang_ukt" class="form-control" id="rentang_ukt" type="text" placeholder="rentang_ukt" value="<?php echo $data['rentang_ukt']; ?>" required />
                </div>
            </div>

           

            

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" value="Simpan" class="btn btn-outline-success" />&nbsp;
                    <a href="index_golonganukt.php" class="btn btn-outline-danger">Batal </a>
                </div>
            </div>
        </form>
        </div>
    </div><!-- col-lg-12-->
</div>

<!-- <?php include "../../AdminLTE/footer.php"; ?> -->

<!-- jQuery -->
<script src="../../AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="../../AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../AdminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>