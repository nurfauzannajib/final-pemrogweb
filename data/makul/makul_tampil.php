        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Mata Kuliah</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Makul</th>
                      <th>Nama Makul</th>
                      <th>Bobot SKS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    $query = $conn->query("SELECT kode_matkul, nama_matkul, sks FROM tb_matkul");
                    while ($data = $query->fetch_assoc()) {

                      ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['kode_matkul']; ?></td>
                        <td><?= $data['nama_matkul']; ?></td>
                        <td><?= $data['sks']; ?></td>
                      </tr>
                      <?php
                    }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->