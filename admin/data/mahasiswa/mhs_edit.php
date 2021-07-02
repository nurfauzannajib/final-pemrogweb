<?php
$id = $_GET['id'];
$query = $conn->query("SELECT * FROM tb_mahasiswa WHERE nim = '$id' ");
$data = $query->fetch_assoc();

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Mahasiswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form method="post">
                  <table>
                    <div class="form-group">
                      <label>Nim</label>
                      <input type="text" name="nim" class="form-control" value="<?= $data['nim']; ?>">
                    </div>
                    <div class="form-group">
                      <label>Nama Mahasiswa</label>
                      <input type="text" name="nama" class="form-control" value="<?= $data['nama_mhs']; ?>">
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                  </table>
                </form>

                <?php

                if (isset($_POST['submit'])) {
                  
                  $Nim    = $_POST['nim'];
                  $Nama     = $_POST['nama'];

                  $query2   = $conn->query("UPDATE tb_mahasiswa SET 
                              nim = '$Nim', 
                              nama_mhs = '$Nama' 
                              WHERE nim = '$id' ");
                  if ($query2) {
                    ?>
                    <script type="text/javascript">
                      alert("Berhasil");
                      document.location = '?halaman=tampilMhs';
                    </script>
                    <?php
                  } else {
                    ?>
                    <script type="text/javascript">
                      alert("Gagal");
                      document.location = '?halaman=tampilMhs';
                    </script>
                    <?php
                  }
                }
                ?>

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
