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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="http://localhost:8080/admin_gereja/index.php/admin/jemaat"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/jemaat/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id_jemaat" value="<?php echo $jemaat->id_jemaat?>" />

							<div class="form-group">
								<label for="nama_jemaat">ID Admin*</label>
								<input class="form-control <?php echo form_error('id_admin') ? 'is-invalid':'' ?>"
								 type="text" name="id_admin" placeholder="Isi Id Admin" value="<?php echo $jemaat-->id_admin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_admin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_jemaat">Nama Jemaat*</label>
								<input class="form-control <?php echo form_error('nama_jemaat') ? 'is-invalid':'' ?>"
								 type="text" name="nama_jemaat" placeholder="Nama Jemaat" value="<?php echo $jemaat-->nama_jemaat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_jemaat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="username">Username</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" min="0" placeholder="Username" value="<?php echo $jemaat->username ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="text" name="password" min="0" placeholder="Password" value="<?php echo $jemaat->password ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="tanggal_lahir">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal_lahir" placeholder=" tanggal_lahir" value="<?php echo $jemaat-->tanggal_lahir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal_lahir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Alamat" value="<?php echo $jemaat-->alamat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="gereja_asal">Gereja Asal*</label>
								<input class="form-control <?php echo form_error('gereja_asal') ? 'is-invalid':'' ?>"
								 type="text" name="gereja_asal" placeholder="Gereja Asal" value="<?php echo $jemaat-->gereja_asal ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('gereja_asal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin*</label>
								<input class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>"
								 type="enum" name="jenis_kelamin" placeholder="jenis kelamin" value="<?php echo $jemaat-->jenis_kelamin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="umur">Umur*</label>
								<input class="form-control <?php echo form_error('umur') ? 'is-invalid':'' ?>"
								 type="number" name="umur" placeholder="Umur" value="<?php echo $jemaat-->umur ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('umur') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pekerjaan">Pekerjaan*</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $jemaat-->pekerjaan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nomer_telfon">Nomor Telepon*</label>
								<input class="form-control <?php echo form_error('nomer_telfon') ? 'is-invalid':'' ?>"
								 type="text" name="nomer_telfon" placeholder="Nomor Telepon" value="<?php echo $jemaat-->nomer_telfon ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nomer_telfon') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="email">Email*</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" placeholder="Email" value="<?php echo $jemaat-->email ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status">Status*</label>
								<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								 type="enum" name="status" placeholder="Status" value="<?php echo $jemaat-->status ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="ktp_sim">KTP SIM*</label>
								<input class="form-control <?php echo form_error('ktp_sim') ? 'is-invalid':'' ?>"
								 type="text" name="ktp_sim" placeholder="KTP SIM" value="<?php echo $jemaat-->ktp_sim ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('ktp_sim') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kk">KK*</label>
								<input class="form-control <?php echo form_error('kk') ? 'is-invalid':'' ?>"
								 type="text" name="kk" placeholder="KK" value="<?php echo $jemaat-->kk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status_jemaat">Status Jemaat*</label>
								<input class="form-control <?php echo form_error('status_jemaat') ? 'is-invalid':'' ?>"
								 type="enum" name="status_jemaat" placeholder="Status Jemaat" value="<?php echo $jemaat-->status_jemaat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('status_jemaat') ?>
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

		<?php $this->load->view("admin/_partials/scrollop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>