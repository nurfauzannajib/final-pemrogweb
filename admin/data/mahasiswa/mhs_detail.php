<?php
$id = $_GET['id'];
$query = $conn->query("SELECT nim, nama_mhs FROM tb_mahasiswa WHERE nim = '$id' ");
$data1 = $query->fetch_assoc();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Nilai Mahasiswa</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table>
          <tr>
            <td>Nim</td>
            <td>:</td>
            <td><?= $data1['nim']; ?></td>
          </tr>
          <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td><?= $data1['nama_mhs']; ?></td>
          </tr>
        </table>


        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Mata Kuliah</th>
              <th>Sks</th>
              <th>Nilai</th>
              <th>Nilai Mutu</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $id = $_GET['id'];
            $no=1;
            $query2 = $conn->query("SELECT nama_matkul, sks, nilai FROM tb_nilai JOIN tb_matkul WHERE tb_nilai.nim = '$id' AND tb_nilai.kode_matkul = tb_matkul.kode_matkul ");

            $sks_x_mutu=0;
            $jml_sks=0;
            $ipk=0;

            while ($data2 = $query2->fetch_assoc()) {
              ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $data2['nama_matkul']; ?></td>
                <td><?= $data2['sks']; ?></td>
                <td><?= $data2['nilai']; ?></td>
                <td>
                  <?php
                  if ($data2['nilai'] >= 85 && $data2['nilai'] <= 100) {

                    echo "A";
                    $jml_sks = $data2['sks'];
                    $sks_x_mutu = 4 * $data2['sks'];

                  } elseif ($data2['nilai'] >= 70 && $data2['nilai'] <= 85) {

                    echo "B";
                    $jml_sks = $data2['sks'];
                    $sks_x_mutu = 3 * $data2['sks'];

                  } elseif ($data2['nilai'] >= 60 && $data2['nilai'] <= 70) {

                    echo "C";
                    $jml_sks = $data2['sks'];
                    $sks_x_mutu = 2 * $data2['sks'];

                  } elseif ($data2['nilai'] >= 50 && $data2['nilai'] <= 60) {

                    echo "D";
                    $jml_sks = $data2['sks'];
                    $sks_x_mutu = 1 * $data2['sks'];

                  } else {

                    echo "E";
                    $jml_sks = $data2['sks'];
                    $sks_x_mutu = 0 * $data2['sks'];

                  }

                  $jumlahx += $sks_x_mutu;
                  $sksx += $jml_sks;
                  $ipk = $jumlahx / $sksx;

                  ?>  
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
        <table>
          <tr>
            <td>IPK</td>
            <td>:</td>
            <td>
              <?= number_format($ipk, 2); ?>   
            </td>
          </tr>
        </table>
                     
      </div>
    </div>
  </div>

</div>
  <!-- /.container-fluid -->