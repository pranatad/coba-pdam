<div class="container-fluid">
  <style>
    .custom-alert {
      background-color: #007bff;
      color: #fff;
    }
  </style>
  <div class="alert custom-alert" role="alert">
    <i class="fas fa-university"></i> DATA PENDAFTAR PRAKTIK KERJA LAPANGAN
  </div>

  <?php echo $this->session->flashdata('pesan') ?>


  <?php echo anchor('administrator/mahasiswa/tambah_mahasiswa', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Data</button>') ?>
  <div class="card shadow mb-4">

    <div class="card-body">
      <h6 class="m-0 font-weight-bold text-primary"><a href="<?php echo base_url('administrator/mahasiswa') ?>" style="text-decoration: none;">Data Pendaftar</a></h6><br>
      <div class="table-responsive">
        <?php foreach ($mahasiswa as $mhs) : ?>
          <table class="table table-bordered table-striped" id="tables">
            <tbody>
              <tr>
                <th>Tanggal Mulai</th>
                <td>03-07-2023</td>
              </tr>
              <tr>
                <th>Tanggal Selesai</th>
                <td>03-01-2024</td>
              </tr>
              <tr>
                <th>Institusi Pendidikan</th>
                <td>
                  <a class="a-href" title="Kirim Password?" text="Ini akan mengubah password dan akan di kirim melalui email." href="<?php base_url('auth/sendPassword/' . $mhs->id) ?>"></a>
                  Politeknik Negeri Malang
                </td>
              </tr>
              <tr>
                <th>Jurusan</th>
                <td>Teknik Informatika</td>
              </tr>
              <tr>
                <th>Person In Charge</th>
                <td>Kadek Suarjuna</td>
              </tr>
              <th>Peserta</th>
              <td>
                <?php echo anchor('administrator/mahasiswa/detail/' . $mhs->id, '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>') ?>
              </td>
              </tr>
              <tr>
                <th>Status</th>
                <td>
                  <button class="btn btn-success" disabled>Disetujui</button>
                </td>
              </tr>
              <tr>

                <!-- <tr>
                <th colspan="2">Peserta</th>
              </tr> -->
            </tbody>
          </table>
        <?php endforeach; ?>
      </div>
    </div>


  </div>
  <!-- /.container-fluid -->

</div>

<!-- End of Main Content -->