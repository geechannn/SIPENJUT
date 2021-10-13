<?php
include "../../AdminLTE/header.php";
include "../../AdminLTE/sidebar.php";
include '../koneksi.php';
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
	
	<title>Tambah SUB | </title>
</head>



<body>
    <div class="w-50 mx-auto border p-3 mt-5">
    <h4 class="mb"><i class="fa fa-angle-right"></i> Input Kelompok UKT</h4>
		<form action="tambah_subkriteria.php" method="POST">

     
		          <div class="form-group">
                <label>ID Subkriteria</label>
                <input name="id_subkriteria" type="text" class="form-control" id="id_subkriteria" placeholder="Input Id Subkriteria!" required />
              </div>

              <div class="form-group">
                <label>Nama Subkriteria</label>
                <input  name="nama_subkriteria" type="text" class="form-control" id="nama_subkriteria" placeholder="Input Nama Subkriteria!" required />
              </div>

              <div class="form-group">
                <label>ID Kriteria</label>
                <input name="id_kriteria" type="text" class="form-control" id="id_kriteria" placeholder="Input Id Kriteria!" required />
              </div>
              
              <div class="form-group">
                <label>Keterangan</label>
                <input  name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Input keterangan!" required />
              </div>
			


		<div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label"></label>
			<div class="col-sm-10">
				<input class="btn btn-outline-success" name="submit" type="submit" value="Simpan">
				<a href="index_subkriteria.php" class="btn btn-outline-danger">Batal </a>
			</div>
		</div>

    </form>
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