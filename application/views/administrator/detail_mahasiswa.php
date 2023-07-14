<div class="container-fluid">
  <style>
    .custom-alert {
      background-color: #007bff;
      color: #fff;
    }
  </style>
  <div class="alert custom-alert" role="alert">
    <i class="fas fa-users"></i> DAFTAR PENDAFTAR
  </div>


  <?php echo $this->session->flashdata('pesan') ?>


  <?php foreach ($detail as $dtl) : ?>

    <style>
      .custom-alert {
        background-color: #007bff;
        color: #fff;
      }
    </style>

    <div class="alert custom-alert d-inline-block" role="alert">
      <i class="fas fa-users"></i> Peserta 1
    </div>
    <div style="display: flex; margin-right: 20px;">
      <div style=" margin-right: 20px;">
        <img src="https://i1.sndcdn.com/artworks-pnmHD3vIzjTqqsgS-ZDgiDQ-t500x500.jpg" alt="" style="width: 250px;">
      </div>
      <div style="margin-left: 20px; display:contents;">
        <table class="table table-hover table-bordered table-striped">
          <tr>
            <td>Nama :</td>
            <td><?php echo $dtl->nama_lengkap; ?></td>
          </tr>
          <tr>
            <td>No Telp :</td>
            <td>0941948141</td>
          </tr>
          <tr>
            <td>Institusi Pendidikan :</td>
            <td>Politeknik Negeri Malang</td>
          </tr>
        </table>
      </div>
    </div>



    <br>

    <div class="alert custom-alert d-inline-block" role="alert">
      <i class="fas fa-users"></i> Peserta 2
    </div>
    <div style="display: flex; margin-right: 20px;">
      <div style=" margin-right: 20px;">
        <img src="https://media.licdn.com/dms/image/D5603AQFggdC3t9apjA/profile-displayphoto-shrink_800_800/0/1677680187551?e=2147483647&v=beta&t=bdpSGq2sbKzs0-w0lmdyAAQHl_l9RGLz95bQj3r_sig" alt="" style="width: 250px;">
      </div>
      <div style="margin-left: 20px; display:contents;">
        <table class="table table-hover table-bordered table-striped">
          <tr>
            <td>Nama :</td>
            <td>Muhammad Reza Khatami</td>
          </tr>
          <tr>
            <td>No Telp :</td>
            <td>11515151</td>
          </tr>
          <tr>
            <td>Institusi Pendidikan :</td>
            <td>Politeknik Negeri Malang</td>
          </tr>
        </table>
      </div>
    </div>

    <br>

    <div class="alert custom-alert d-inline-block" role="alert">
      <i class="fas fa-users"></i> Peserta 3
    </div>
    <div style="display: flex; margin-right: 20px;">
      <div style=" margin-right: 20px;">
        <img src="https://media.licdn.com/dms/image/D5603AQHaqLf14zCaZw/profile-displayphoto-shrink_800_800/0/1677805452054?e=2147483647&v=beta&t=Z0p3UcZdklImz5og3Ked9TCvADLtLu9OoB09wxIb8eI" alt="" style="width: 250px;">
      </div>
      <div style="margin-left: 20px; display:contents;">
        <table class="table table-hover table-bordered table-striped">
          <tr>
            <td>Nama :</td>
            <td>Judamtar</td>
          </tr>
          <tr>
            <td>No Telp :</td>
            <td>115151511</td>
          </tr>
          <tr>
            <td>Institusi Pendidikan :</td>
            <td>Politeknik Negeri Malang</td>
          </tr>
        </table>
      </div>
    </div>



  <?php endforeach;
  ?>

  </table>

  <div class="pull-right">
    <?php echo anchor('administrator/mahasiswa', '<div class="btn btn-sm btn-primary" style="margin-top: 20px"><i class="fa fa-undo"></i>Kembali</div>') ?>
    <br><br><br><br>
  </div>
</div>