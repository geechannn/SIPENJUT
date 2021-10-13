<?php 
include "tambah_golonganukt.php";
?>
<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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

<?php
include "../../AdminLTE/header.php";
include "../../AdminLTE/sidebar.php";
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>    
    <title>CRUD TABEL KELOMPOK UKT</title>
</head>
<body>




<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelompok UKT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kelompok UKT</h3>
              </div>
    <div class="card-body">
    <a  data-toggle="modal" data-target="#modal-tambah" class="btn btn-outline-primary" >Tambah Data</a>
    <br><br>
       


    
<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>
            <center>No</center>
        </th>

        <th>
            <center>ID Kelompok UKT</center>
        </th>
        <th>
            <center>Kelompok UKT</center>
        </th>
        <th>
            <center>Rentang UKT</center>
        </th>
       
        <th>
            <center>Aksi</center>
        </th>
    </tr>
    </thead>

<?php
    $i=1;
    $sqlGet = "SELECT * FROM tb_golonganukt";
    $query = mysqli_query($conn, $sqlGet);

    while($data = mysqli_fetch_array($query)){
?>
        <tbody>
            <tr>
                <td>
                    <center><?= $i++ ?></center>
                </td>

                <td>
                    <center><?php echo $data["id_kelompok"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["kelompok_ukt"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["rentang_ukt"] ?></center>
                </td>
                
                
                <td>
                    <center>
                       <!-- <a href="detail.php?id_kelompok=<?php echo $data["id_kelompok"]; ?>" class="btn btn-outline-info" > Detail</a> -->

                        <a data-toggle="modal" data-target="#modal-edit<?php echo $data["id_kelompok"]; ?>" class="btn btn-outline-primary" > Edit</a>

                        <a href="hapus_golonganukt.php?id_kelompok=<?php echo $data["id_kelompok"]; ?>" class="btn btn-outline-danger" > Hapus</a>
                    </center>
                </td>
            </tr>
        </tbody>
<?php } ?>
    </table>
        </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<!-- Modal Tambah -->
<div class="modal fade" id="modal-tambah" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form action="tambah_golonganukt.php" method="POST">
              <div class="modal-body">
              
                    <br>
                    <label for="id_kelompok">Id Kelompok UKT</label>
                    <input type="text" name="id_kelompok" id="id_kelompok" class="form-control" placeholder="Input Id Kelompok UKT!" required>
                    <br>

                    <label for="kelompok_ukt">Kelompok UKT</label>
                    <input type="text" name="kelompok_ukt" id="kelompok_ukt" class="form-control" placeholder="Input Kelompok UKT!" required>
                    <br>

                    <label for="rentang_ukt">Rentang UKT</label>
                    <input type="text" name="rentang_ukt" id="rentang_ukt" class="form-control" placeholder="Input Rentang UKT!" required>
                    <br>


                </div>

                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                      <input type="submit" class="btn btn-outline-success" name="submit" value="Simpan"></input>
                    </div>
            </form>        
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- End Modal Tambah -->



<!-- modal edit -->
<!--
<?php $i = 0;
foreach ($data as $row) { ?>
                    <div class="modal fade" id="modal-edit<?php echo $row["id_kelompok"]; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Golongan Kelompok UKT Mahasiswa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="edit_golonganukt.php">
                              <div class="form-group">
                                <label>Id Kelompok UKT</label>
                                <input name="id_kelompok" type="text" class="form-control" id="id_kelompok" placeholder="id_kelompok" value="<?php echo $row['id_kelompok']; ?>" readonly />
                              </div>

                              <div class="form-group">
                                <label>Kelompok UKT</label>
                                <input name="kelompok_ukt" type="text" class="form-control" id="kelompok_ukt" placeholder="kelompok_ukt" value="<?php echo $row['kelompok_ukt']; ?>" required />
                              </div>

                              <div class="form-group">
                                <label>Rentang UKT</label>
                                <input name="rentang_ukt" type="text" class="form-control" id="rentang_ukt" placeholder="rentang_ukt" value="<?php echo $row['rentang_ukt']; ?>" required />
                              </div>

                              

                              </div>

                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="edit" id="edit" class="btn btn-primary" name="edit">Save changes</button>
                              </div>
                              </form>
                            </div>

-->
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
<!-- / End Modal Edit -->



<!-- modal edit -->
<div class="modal fade" id="modal-edit<?php echo $data['id_kelompok']; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Data Golongan Kelompok UKT</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="update_levelukt.php">
                                  <div class="form-group">
                                    <label>Id Kelompok UKT</label>
                                    <input name="id_kelompok" type="text" class="form-control" id="id_kelompok" placeholder="" value="<?php echo $data['id_kelompok']; ?>" readonly />
                                  </div>

                                  <div class="form-group">
                                    <label>Kelompok UKT</label>
                                    <input name="kelompok_ukt" type="text" class="form-control" id="kelompok_ukt" placeholder="kelompok_ukt" value="<?php echo $data['kelompok_ukt']; ?>" required />
                                  </div>

                                  <div class="form-group">
                                    <label for="rentang_ukt">Rentang UKT</label>
                                    <input name="rentang_ukt" type="text" class="form-control" id="rentang_ukt" placeholder="rentang_ukt" value="<?php echo $data['rentang_ukt']; ?>" required />
                                  </div>
                              </div>

                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="edit" id="edit" class="btn btn-primary" name="edit">Save changes</button>
                              </div>
                              </form>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->

                        <center> <a data-toggle="modal" data-target="#modal-edit<?php echo $data['id_level']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i>Edit
                          </a>
                          <a href='hapus_levelukt.php?id_level=<?php echo $data['id_level'];  ?>' class="btn btn-danger"> <i class="fas fa-trash"></i>
                            Hapus
                          </a>
                        </center>
                      </div>
                    </div>
                  </td>
                </tr>

              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.content-wrapper -->







<!-- jQuery -->
<script src="../../AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../AdminLTE/plugins/moment/moment.min.js"></script>
<script src="../../AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../AdminLTE/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../AdminLTE/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../AdminLTE/dist/js/pages/dashboard.js"></script>


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