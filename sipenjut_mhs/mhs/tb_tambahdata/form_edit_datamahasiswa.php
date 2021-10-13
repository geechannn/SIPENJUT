<?php
include "../koneksi.php";
include "../../AdminLTE/header.php";
include "../../AdminLTE/sidebar.php";
$query = mysqli_query($conn, "SELECT * FROM tb_datamahasiswa WHERE id_nim='$_GET[id_nim]'");
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

<title>Edit Data | Mahasiswa</title>
</head>
    <body><div class="w-50 mx-auto border p-3 mt-5">
        <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Data Mahasiswa</h4>
        <form class="form-horizontal style-form" action="edit_datamahasiswa.php" method="post" name="form1" id="form1">
            <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">NIM</label>
                <div class="col-sm-10">
                    <input name="id_nim" type="text"  class="form-control" value="<?php echo $data['id_nim']; ?>" />
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">Jurusan</label>
                <div class="col-sm-10">
                    <input name="nama_jurusan" type="text" id="nama_jurusan" class="form-control" placeholder="nama_jurusan" value="<?php echo $data['nama_jurusan']; ?>" required />
                </div>
            </div>

            

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label">Id Kelompok UKT Awal</label>
                 <select class="custom-select" id="id_golongan_uktawal" name="id_golongan_uktawal" placeholder="Input Kelompok UKT anda saat ini!" required="required" >
                            <option selected></option>
                            <option value="Kelompok I">Kelompok I</option>
                            <option value="Kelompok II">Kelompok II</option>
                            <option value="Kelompok III">Kelompok III</option>
                            <option value="Kelompok IV">Kelompok IV</option>
                            <option value="Kelompok V">Kelompok V</option>
                            <option value="Kelompok VI">Kelompok VI</option>
                            <option value="Kelompok VII">Kelompok VII</option>
                            <option value="Kelompok VIII">Kelompok VIII</option>
            </select>
            </div>

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label">Jenis Kelamin</label>
                <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin" placeholder="Input Jenis Kelamin!" required="required">
                            <option selected></option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
            </select>
            </div>

            

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label">Jumlah Penghasilan Orang Tua</label>
                <div class="col-sm-10">
                    <input name="jml_penghasilan_ortu" class="form-control" id="jml_penghasilan_ortu" type="text" placeholder="jml_penghasilan_ortu" value="<?php echo $data['jml_penghasilan_ortu']; ?>" required />
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label">Jenis Pekerjaan Ayah</label>
                <div class="col-sm-10">
                    <input name="jns_pekerjaan_ayah" class="form-control" id="jns_pekerjaan_ayah" type="text" placeholder="jns_pekerjaan_ayah" value="<?php echo $data['jns_pekerjaan_ayah']; ?>" required />
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label">Jenis Pekerjaan Ibu</label>
                <div class="col-sm-10">
                    <input name="jns_pekerjaan_ibu" class="form-control" id="jns_pekerjaan_ibu" type="text" placeholder="jns_pekerjaan_ibu" value="<?php echo $data['jns_pekerjaan_ibu']; ?>" required />
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label">Jumlah Assets</label>
                <div class="col-sm-10">
                    <input name="assets" class="form-control" id="assets" type="text" placeholder="assets" value="<?php echo $data['assets']; ?>" required />
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label">Jarak Tinggal (km)</label>
                <div class="col-sm-10">
                    <input name="jarak_tinggal" class="form-control" id="jarak_tinggal" type="text" placeholder="jarak_tinggal" value="<?php echo $data['jarak_tinggal']; ?>" required />
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label">Daya Lisrik (watt)</label>
                <div class="col-sm-10">
                    <input name="daya_lisrik" class="form-control" id="daya_lisrik" type="text" placeholder="daya_lisrik" value="<?php echo $data['daya_lisrik']; ?>" required />
                </div>
            </div>

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label">Sumber Air</label>
                <div class="col-sm-10">
                    <input name="sumber_air" class="form-control" id="sumber_air" type="text" placeholder="sumber_air" value="<?php echo $data['sumber_air']; ?>" required />
                </div>
            </div>

            

            <div class="form-group">
            <label class="col-sm-5 col-sm-5 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" value="Simpan" class="btn btn-outline-success" />&nbsp;
                    <a href="index.php" class="btn btn-outline-danger">Batal </a>
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