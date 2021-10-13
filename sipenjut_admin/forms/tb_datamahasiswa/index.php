<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIPENJUT | Adm Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../AdminLTE/dist/css/adminlte.min.css">
</head>

 

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php
    include "../../AdminLTE/header.php";
    include "../../AdminLTE/sidebar.php";
    require_once '../koneksi.php';
    ?>

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
            <form action="../../../sipenjut_mhs/mhs/tb_tambahdata/tambah_datamahasiswa.php" method="POST">
              <div class="modal-body">
              
                    <br>
                    <label for="id_nim">NIM</label>
                    <input type="text" name="id_nim" id="id_nim" class="form-control" placeholder="Input NIM!" required>
                    <br>

                    <label for="nama_jurusan">Jurusan</label>
                    <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control" placeholder="Input Jurusan!" required>
                    <br>

                    <label for="golongan_uktawal">Kelompok UKT Awal</label>           
                          <select class="custom-select" id="golongan_uktawal" name="golongan_uktawal" placeholder="Input Kelompok UKT anda saat ini!" required >
                                          <option selected>Input Kelompok UKT</option>
                                          <option value="Kelompok I">Kelompok I</option>
                                          <option value="Kelompok II">Kelompok II</option>
                                          <option value="Kelompok III">Kelompok III</option>
                                          <option value="Kelompok IV">Kelompok IV</option>
                                          <option value="Kelompok V">Kelompok V</option>
                                          <option value="Kelompok VI">Kelompok VI</option>
                                          <option value="Kelompok VII">Kelompok VII</option>
                                          <option value="Kelompok VIII">Kelompok VIII</option>
                          </select>

                    <br><br>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <br>
                    <label class="radio-inline"><input required="required" type="radio" name="jenis_kelamin" value="Laki - Laki">Laki - Laki</label> &nbsp;
                    <label class="radio-inline"><input required="required" type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
                    <br><br>


                    <label for="jml_penghasilan_ortu">Jumlah Penghasilan Orang Tua</label>
                    <input type="text" name="jml_penghasilan_ortu" id="jml_penghasilan_ortu" class="form-control" placeholder="Input jumlah penghasilan orang tua!" required>
                    <br>

                    <label for="jns_pekerjaan_ayah">Jenis Pekerjaan Ayah</label>
                    <input type="text" name="jns_pekerjaan_ayah" id="jns_pekerjaan_ayah" class="form-control" placeholder="Input jenis pekerjaan ayah!" required>
                    <br>

                    <label for="jns_pekerjaan_ibu">Jenis Pekerjaan Ibu</label>
                    <input type="text" name="jns_pekerjaan_ibu" id="jns_pekerjaan_ibu" class="form-control" placeholder="Input jenis pekerjaan ibu!" required>
                    <br>

                    <label for="assets">Jumlah Assets</label>
                    <input type="text" name="assets" id="assets" class="form-control" placeholder="Input jumlah asset yang dimiliki!" required>
                    <br>

                    <label for="jarak_tinggal">Jarak Tinggal (km)</label>
                    <input type="text" name="jarak_tinggal" id="jarak_tinggal" class="form-control" placeholder="Input jarak tinggal dalam satuan (km)!" required>
                    <br>

                    <label for="daya_lisrik">Daya Lisrik (watt)</label>
                    <input type="text" name="daya_lisrik" id="daya_lisrik" class="form-control" placeholder="Input daya listrik dalam satuan (Watt)!" required>
                    <br>

                    <label for="sumber_air">Sumber Air</label>
                    <input type="text" name="sumber_air" id="sumber_air" class="form-control" placeholder="Input jenis pemakaian sumber air!" required>
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






<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
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
                <h3 class="card-title">Data Mahasiswa</h3>
              </div>
    <div class="card-body">
    <!--<a  data-toggle="modal" data-target="#modal-tambah" class="btn btn-outline-primary" >Tambah Data</a>
    <br><br>-->
       


    
<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>
            <center>No</center>
        </th>
        <th>
            <center>NIM</center>
        </th>
        <th>
            <center>Jurusan</center>
        </th>
        <th>
            <center>Kelompok UKT Awal</center>
        </th>
        <th>
            <center>Jenis Kelamin</center>
        </th>
        <th>
            <center>Jumlah Penghasilah Orang Tua</center>
        </th>
        <th>
            <center>Jenis Pekerjaan Ayah</center>
        </th>
        <th>
            <center>Jenis Pekerjaan Ibu</center>
        </th>
        <th>
            <center>Jumlah Assets</center>
        </th>
        <th>
            <center>Jarak Tinggal (km)</center>
        </th>
        <th>
            <center>Daya Listrik (watt)</center>
        </th>
        <th>
            <center>Sumber Air</center>
        </th>
        <th>
            <center>Aksi</center>
        </th>
    </tr>
    </thead>

<?php
    $i=1;
    $sqlGet = "SELECT * FROM tb_datamahasiswa";
    $query = mysqli_query($conn, $sqlGet);

    while($data = mysqli_fetch_array($query)){
?>
        <tbody>

            <tr>
                <th>
                    <center><?= $i++ ?></center>
                </th>
                <td>
                    <center><?php echo $data["id_nim"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["nama_jurusan"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["golongan_uktawal"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["jenis_kelamin"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["jml_penghasilan_ortu"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["jns_pekerjaan_ayah"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["jns_pekerjaan_ibu"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["assets"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["jarak_tinggal"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["daya_lisrik"] ?></center>
                </td>
                <td>
                    <center><?php echo $data["sumber_air"] ?></center>
                </td>
                <td>
                    <center>
                        <a href="detail.php?id_nim=<?php echo $data["id_nim"]; ?>" class="btn btn-outline-info" > Detail</a>

                        <!--<a data-toggle="modal" data-target="#modal-edit<?php echo $row["id_nim"]; ?>" class="btn btn-outline-primary" > Edit</a>
                        -->
                        
                        <a href="hapus_datamahasiswa.php?id_nim=<?php echo $data["id_nim"]; ?>" class="btn btn-outline-danger" > Hapus</a>
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



<!-- modal edit -->

<?php $i = 0; { ?>
      <div class="modal fade" id="modal-edit<?php echo $row["id_nim"]; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data Mahasiswa SPK Penentuan UKT</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="edit_datamahasiswa.php">
                              <div class="form-group">
                                <label>NIM</label>
                                <input name="id_nim" type="text" class="form-control" id="id_nim" placeholder="" value="<?php echo $row['id_nim']; ?>" readonly />
                              </div>

                              <div class="form-group">
                                <label>Jurusan</label>
                                <input name="nama_jurusan" type="text" class="form-control" id="nama_jurusan" placeholder="nama_jurusan" value="<?php echo $row['nama_jurusan']; ?>" required />
                              </div>

                              <div class="form-group">
                                <label>Id Kelompok UKT Awal</label>
                                <input name="golongan_uktawal" type="text" class="form-control" id="golongan_uktawal" placeholder="golongan_uktawal" value="<?php echo $row['golongan_uktawal']; ?>" required />
                              </div>

                              <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input name="jenis_kelamin" type="text" class="form-control" id="jenis_kelamin" placeholder="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>" required />
                              </div>

                              <div class="form-group">
                                <label>Jumlah Penghasilah Orang Tua</label>
                                <input name="jml_penghasilan_ortu" type="text" class="form-control" id="jml_penghasilan_ortu" placeholder="jml_penghasilan_ortu" value="<?php echo $row['jml_penghasilan_ortu']; ?>" required />
                              </div>

                              <div class="form-group">
                                <label>Jenis Pekerjaan Ayah</label>
                                <input name="jns_pekerjaan_ayah" type="text" class="form-control" id="jns_pekerjaan_ayah" placeholder="jns_pekerjaan_ayah" value="<?php echo $row['jns_pekerjaan_ayah']; ?>" required />
                              </div>

                              <div class="form-group">
                                <label>Jenis Pekerjaan Ibu</label>
                                <input name="jns_pekerjaan_ibu" type="text" class="form-control" id="jns_pekerjaan_ibu" placeholder="jns_pekerjaan_ibu" value="<?php echo $row['jns_pekerjaan_ibu']; ?>" required />
                              </div>

                              <div class="form-group">
                                <label>Jumlah Assets</label>
                                <input name="assets" type="text" class="form-control" id="assets" placeholder="assets" value="<?php echo $row['assets']; ?>" required />
                              </div>

                              <div class="form-group">
                                <label>Jarak Tinggal (km)</label>
                                <input name="jarak_tinggal" type="text" class="form-control" id="jarak_tinggal" placeholder="jarak_tinggal" value="<?php echo $row['jarak_tinggal']; ?>" required />
                              </div>

                              <div class="form-group">
                                <label>Daya Listrik (watt)</label>
                                <input name="daya_lisrik" type="text" class="form-control" id="daya_lisrik" placeholder="daya_lisrik" value="<?php echo $row['daya_lisrik']; ?>" required />
                              </div>

                              <div class="form-group">
                                <label>Sumber Air</label>
                                <input name="sumber_air" type="text" class="form-control" id="sumber_air" placeholder="sumber_air" value="<?php echo $row['sumber_air']; ?>" required />
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

<?php } ?>
<?php 
include "../../AdminLTE/footer.php"; 
?>

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
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
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