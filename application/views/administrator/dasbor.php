<div class="container-fluid">
  <style>
    .custom-alert {
      background-color: #007bff;
      color: #fff;
    }
  </style>
  <div class="alert custom-alert" role="alert">
    <i class="fas fa-tachometer-alt"></i> Dashboard
  </div>

  <div class="alert alert-secondary" role="alert" style=" height: 820px;">

    <h4 class="alert-heading">Selamat Datang!</h4>
    <p>Selamat Datang <strong><?php echo $user['username']; ?></strong> Di Pendaftaran Online Praktik Kerja Lapangan Perumda Air Minum Tugu Tirta Kota Malang. Anda Sedang Login sebagai <strong><?php echo $user['level']; ?></strong></p>
    <ol>
      <li>Masuk ke menu Daftar PKL.</li>
      <li>Tekan tombol tambah data.</li>
      <li>Masukan tanggal mulai PKL, tanggal selesai PKL, institusi pendidikan, PIC (Person in charge)/penanggung jawab, nomor telepon, list nama peserta, dan upload dokumen (Proposal).</li>
      <li>Pada penambahan list peserta masukan nama, nomor telepon, foto masing-masing peserta, dan bukti screenshot sudah memberi bintang 5 pada google review Perumda Air Minum Tugu Tirta Kota Malang.</li>
      <li>Setelah selesai memasukan semua data, tekan tombol simpan untuk menyimpan data.</li>
      <li>Setelah proses pendaftaran selesai, tunggu perubahan pada status pendaftaran yang telah diajukan (pendaftaran hanya bisa dilakukan sekali pada setiap akun).</li>
      <li>Setelah kegiatan PKL telah selesai dilaksanakan, masuk ke menu Upload Dokumen untuk mengunggah dokumen laporan akhir kegiatan PKL.</li>
      <li>Masuk ke menu Cetak Sertifikat untuk mencetak sertifikat PKL.</li>
    </ol>
    <center><img src="https://seru.co.id/wp-content/uploads/2020/05/IMG_20200508_064636_resize_67.jpg" alt="" style="width: 800px; height: auto"></center>
  </div>
</div>



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/mahasiswa') ?>" style="text-decoration: none;">
              <p class="nav-link small text-info">MAHASISWA</p>
            </a>
            <i class="fas fa-3x fa-user-graduate"></i>
          </div>

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/dosen') ?>" style="text-decoration: none;">
              <p class="nav-link small text-info">DOSEN</p>
            </a>
            <i class="fas fa-3x fa-user-graduate"></i>
          </div>

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/pendaftaran') ?>" style="text-decoration: none;">
              <p class="nav-link small text-info">PENDAFTARAN</p>
            </a>
            <i class="fas fa-3x fa-file-alt"></i>
          </div>

          <div class="col-md-3 text-info text-center">
            <a href="<?php echo base_url('administrator/jadwal/viewjadwal') ?>" style="text-decoration: none;">
              <p class="nav-link small text-info">JADWAL</p>
            </a>
            <i class="fas fa-3x fa-calendar-alt"></i>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
      </div>
    </div>
  </div>
</div>