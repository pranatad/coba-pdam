<div class="container-fluid">
	<style>
		.custom-alert {
			background-color: #007bff;
			color: #fff;
		}
	</style>
	<div class="alert custom-alert" role="alert">
		<i class="fas fa-university"></i> Dokumen
	</div>

	<?php echo $this->session->flashdata('pesan') ?>

	<!-- <?php echo anchor('administrator/dosen/tambah_dosen', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Dokumen</button>') ?> -->


	<div class="card-body">
		<div class="table-responsive">

			<div class="form-group">
				<h6 class="m-0 font-weight-bold text-primary"><a href="<?php echo base_url('administrator/dosen') ?>" style="text-decoration: none;">Upload Dokumen Laporan Akhir</a></h6><br>
				<label>Dokumen Proposal</label><br>
				<input type="file" name="photo">
			</div>
		</div>
	</div>
</div>
</div>