<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="http://localhost:8080/admin_gereja/index.php/admin/struktur"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/struktur/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nama_jemaat">Nama Jemaat*</label>
								<input class="form-control <?php echo form_error('nama_jemaat') ? 'is-invalid':'' ?>"
								 type="text" name="nama_jemaat" placeholder="Struktur nama_jemaat" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_jemaat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan">Jabatan*</label>
								<select>
								<?php 
									foreach ($jabatan as $data){
										echo "<option value='$data->jabatan'>$data->jabatan</option>";
									}
								?>
								</select><br>
								<div class="invalid-feedback">
									<?php echo form_error('jabatan') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="name">Periode*</label>
								<textarea class="form-control <?php echo form_error('periode') ? 'is-invalid':'' ?>"
								 name="periode" placeholder="Struktur Periode"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('periode') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>