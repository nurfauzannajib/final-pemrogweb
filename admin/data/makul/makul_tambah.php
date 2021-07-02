        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Mata Kuliah</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form method="post">
                  <table>
                    <div class="form-group">
                      <label>Kode Mata Kuliah</label>
                      <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode Makul">
                    </div>
                    <div class="form-group">
                      <label>Nama Mata Kuliah</label>
                      <input type="text" name="nama" class="form-control" placeholder="Masukkan Mata Kuliah">
                    </div>
                    <div class="form-group">
                      <label>Bobot SKS</label>
                      <input type="text" name="sks" class="form-control" placeholder="Masukkan Jumlah Sks">
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
                    $Sks      = $_POST['sks'];

                    $query2   = $conn->query("INSERT INTO tb_matkul (kode_matkul,nama_matkul, sks) VALUES('$Kode', '$Nama', '$Sks')");
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
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
