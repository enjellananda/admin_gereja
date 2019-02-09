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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="http://localhost:8080/admin_gereja/index.php/admin/jemaat/add"><i class="fas fa-plus"></i> Add New</a>


					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID Admin</th>
										<th>Nama Jemaat</th>
										<th>Username</th>
										<th>Password</th>
										<th>Tanggal Lahir</th>
										<th>Alamat</th>
										<th>Gereja Asal</th>
										<th>Jenis Kelamin</th>
										<th>Umur</th>
										<th>Pekerjaan</th>
										<th>Nomer Telfon</th>
										<th>Email</th>
										<th>Status</th>
										<th>KTP SIM</th>
										<th>KK</th>
										<th>Status Jemaat</th>
										<th> Action </th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($jemaat as $jemaat): ?>
									<tr>
										<td width="150">
											<?php echo $jemaat->id_admin ?>
										</td>
										<td>
											<?php echo $jemaat->nama_jemaat ?>
										</td>
										<td>
											<?php echo $jemaat->username ?>
										</td>
										<td>
											<?php echo $jemaat->password ?>
										</td>
										<td>
											<?php echo $jemaat->tanggal_lahir ?>
										</td>
										<td>
											<?php echo $jemaat->alamat ?>
										</td>
										<td>
											<?php echo $jemaat->gereja_asal ?>
										</td>
										<td>
											<?php echo $jemaat->jenis_kelamin?>
										</td>
										<td>
											<?php echo $jemaat->umur ?>
										</td>
										<td>
											<?php echo $jemaat->pekerjaan ?>
										</td>
										<td>
											<?php echo $jemaat->nomer_telfon?>
										</td>
										<td>
											<?php echo $jemaat->email ?>
										</td>
										<td>
											<?php echo $jemaat->status?>
										</td>
										<td>
											<?php echo $jemaat->ktp_sim ?>
										</td>
										<td>
											<?php echo $jemaat->kk ?>
										</td>
										<td>
											<?php echo $jemaat->status_jemaat ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/jemaat/edit/'.$jemaat->id_jemaat) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/jemaat/delete/'.$jemaat->id_jemaat) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>