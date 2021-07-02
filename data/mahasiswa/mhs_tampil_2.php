        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nim</th>
                      <th>Nama Mahasiswa</th>
                      <th>Lihat Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no=1;
                      $query = $conn->query("SELECT nim, nama_mhs FROM tb_mahasiswa");
                      while ($data = $query->fetch_assoc()) {

                        ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $data['nim']; ?></td>
                          <td><?= $data['nama_mhs']; ?></td>
                          <td>
                            <a class="btn btn-success" href="?halaman=detailMhs&id=<?= $data['nim']; ?>">Detail</a>
                          </td>
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
