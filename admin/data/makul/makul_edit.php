<?php
$id = $_GET['id'];
$query = $conn->query("SELECT * FROM tb_matkul WHERE kode_matkul = '$id' ");
$data = $query->fetch_assoc();

?>        
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Mata Kuliah</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <form method="post">
          <table>
            <div class="form-group">
              <label>Kode Mata Kuliah</label>
              <input type="text" name="kode" class="form-control" value="<?= $data['kode_matkul']; ?>">
            </div>
            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input type="text" name="nama" class="form-control" value="<?= $data['nama_matkul']; ?>">
            </div>
            <div class="form-group">
              <label>Bobot SKS</label>
              <input type="text" name="sks" class="form-control" value="<?= $data['sks']; ?>">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </div>
          </table>
        </form>

        <?php

        if (isset($_POST['submit'])) {

          $Kode     = $_POST['kode'];
          $Nama     = $_POST['nama'];
          $Sks    = $_POST['sks'];

          $query2   = $conn->query("UPDATE tb_matkul SET 
            kode_matkul = '$Kode',
            nama_matkul = '$Nama',
            sks = $Sks
            WHERE kode_matkul = '$id'");
          if ($query2) {
            ?>
            <script type="text/javascript">
              alert("Berhasil");
              document.location = '?halaman=tampilMakul';
            </script>
            <?php
          } else {
            ?>
            <script type="text/javascript">
              alert("Gagal");
              document.location = '?halaman=tampilMakul';
            </script>
            <?php
          }
        }
        ?>