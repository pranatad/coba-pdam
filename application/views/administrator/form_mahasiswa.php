<div class="container-fluid">
	<style>
		.custom-alert {
			background-color: #007bff;
			color: #fff;
		}
	</style>
	<div class="alert custom-alert" role="alert">
		<i class="fas fa-user-plus"></i> FORM TAMBAH DATA PENDAFTAR
	</div>

	<?php echo $this->session->flashdata('pesan') ?>
	<div class="pull-right">
		<?php echo anchor('administrator/mahasiswa', '<div class="btn btn-sm btn-primary"><i class="fa fa-undo"></i> Kembali</div>') ?>
	</div>
	<br>
	<br>

	<form method="post" action="<?php echo base_url('administrator/mahasiswa/tambah_mahasiswa_aksi') ?>" enctype="multipart/form-data">
		<div class="form-group">
			<label>Tanggal Mulai</label>
			<input type="text" name="nama_lengkap" placeholder="Masukkan Tanggal Mulai" class="form-control">
			<?php echo form_error('nama', '<div class="text-danger small ml-3">', '</div>') ?>
		</div>

		<div class="form-group">
			<label>Tanggal Selesai</label>
			<input type="text" name="nim" placeholder="Masukkan Tanggal Selesai" class="form-control">
			<?php echo form_error('nim', '<div class="text-danger small ml-3">', '</div>') ?>
		</div>

		<div class="form-group">
			<label>Institusi Pendidikan</label>
			<input type="text" name="email" placeholder="Masukkan Nama Institusi" class="form-control">
			<?php echo form_error('email', '<div class="text-danger small ml-3">', '</div>') ?>
		</div>
		<div class="form-group">
			<label>Jurusan</label>
			<input type="password" name="password" placeholder="Masukkan Jurusan" class="form-control">
			<?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
		</div>
		<div class="form-group">
			<label>Person In Charge</label>
			<input type="password" name="password" placeholder="Masukkan PIC" class="form-control">
			<?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
		</div>
		<div class="form-group">
			<label>Peserta Praktik Kerja Lapangan</label><br>
			<button class="btn btn-primary">Tambah Peserta</button>
		</div>
		<div class="form-group">
			<label>Dokumen Proposal</label><br>
			<input type="file" name="photo">
		</div>

		<!-- <div class="form-group">
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin" class="form-control">
				<?php
				if ($jenis_kelamin == 'Laki-laki') {
				?>
					<option value="Laki-laki" selected>Laki - Laki</option>
					<option value="Perempuan">Perempuan</option>

				<?php
				} elseif ($jenis_kelamin == 'Perempuan') {
				?>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan" selected>Perempuan</option>

				<?php
				} else {
				?>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>

				<?php } ?>
			</select>
			<?php echo form_error('jenis_kelamin', '<div class="text-danger small ml-3">', '</div>') ?>
		</div>

		<div class="form-group">
			<label>telepon</label>
			<input type="number" name="telepon" placeholder="Masukkan No. Telepon" class="form-control">
			<?php echo form_error('telepon', '<div class="text-danger small ml-3">', '</div>') ?>
		</div>

		<div class="form-group">
			<label>Blokir</label>
			<select name="blokir" class="form-control">
				<?php
				if ($blokir == 'Y') {
				?>
					<option value="Y" selected>Ya</option>
					<option value="N">Tidak</option>

				<?php
				} elseif ($blokir == 'N') {
				?>
					<option value="Y">Ya</option>
					<option value="N" selected>Tidak</option>

				<?php
				} else {
				?>
					<option value="Y">Ya</option>
					<option value="N">Tidak</option>

				<?php } ?>
			</select>
			<?php echo form_error('blokir', '<div class="text-danger small ml-3">', '</div>') ?>
		</div> -->



		<button type="submit" class="btn btn-primary mb-5 mt-3"><i class="fa fa-save"></i> Simpan</button>
	</form>


</div>