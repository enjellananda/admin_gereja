<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jemaat Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('jemaat/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
            	<div class="table table-responsive">
                <table class="table table-striped">
                    <tr>
                    	<th>Nama Jemaat</th>
						<th>Username</th>
						<th>Password</th>
						<th>Tanggal Lahir</th>
						<th>Alamat</th>
						<th>Nomer Telfon</th>
						<th>Email</th>
                    	<th>Status</th>
						<th>Jenis Kelamin</th>
						<th>Gereja Asal</th>
						<th>Umur</th>
						<th>Pekerjaan</th>
						<th>Ktp Sim</th>
						<th>Kk</th>
						<th>Status Jemaat</th>
						<th>Pengingat</th>
						<th>Id Admin</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($jemaat as $j){ ?>
                    <tr>
                    	<td><?php echo $j['nama_jemaat']; ?></td>
						<td><?php echo $j['username']; ?></td>
						<td><?php echo $j['password']; ?></td>
						<td><?php echo $j['tanggal_lahir']; ?></td>
						<td><?php echo $j['alamat']; ?></td>
						<td><?php echo $j['nomer_telfon']; ?></td>
						<td><?php echo $j['email']; ?></td>
						<td><?php echo $j['status']; ?></td>
						<td><?php echo $j['jenis_kelamin']; ?></td>
						<td><?php echo $j['gereja_asal']; ?></td>
						<td><?php echo $j['umur']; ?></td>
						<td><?php echo $j['pekerjaan']; ?></td>
						<td><?php echo $j['ktp_sim']; ?></td>
						<td><?php echo $j['kk']; ?></td>
						<td><?php echo $j['status_jemaat']; ?></td>
						<td><?php echo $j['pengingat']; ?></td>
						<td><?php echo $j['id_admin']; ?></td>
						<td>
                            <a href="<?php echo site_url('jemaat/edit/'.$j['id_jemaat']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('jemaat/remove/'.$j['id_jemaat']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
