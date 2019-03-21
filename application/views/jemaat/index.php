<link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jemaat</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('jemaat/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table table-responsive">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    	<th>Nomer Induk</th>
						<th>Nama Jemaat</th>
						<th>Username</th>
						<th>Password</th>
						<th>Jenis Kelamin</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Nama Ayah</th>
						<th>Nama Ibu</th>
						<th>Gereja Baptis</th>
						<th>Tanggal Baptis</th>
						<th>Gereja Sidi</th>
						<th>Tanggal Sidi</th>
						<th>Status</th>
						<th>Nama Pasangan</th>
						<th>Gereja Pasangan</th>
						<th>Nomor Induk Perkawinan</th>
						<th>Tempat Catatan Sipil</th>
						<th>Tanggal Catatan Sipil</th>
						<th>Gereja Pemberkatan</th>
						<th>Tanggal Pemberkatan</th>
						<th>Tanggal Cerai</th>
						<th>Alasan Cerai</th>
						<th>Pindah Ke Gereja</th>
						<th>Tanggal Pindah Gereja</th>
						<th>Nomor Surat Pindah</th>
						<th>Tanggal Keluar</th>
						<th>Keterangan</th>
						<th>Alamat</th>
						<th>Nomer Telfon</th>
						<th>Email</th>
						<th>Surat Keterangan</th>
						<th>Pengingat</th>
						<th>Status Jemaat</th>
						<th>Id Admin</th>
						<th>Actions</th>
                    </tr>
                	</thead>
                	<tbody>
                    <?php foreach($jemaat as $j){ ?>
                    <tr>
                    	<td><?php echo $j['nomor_induk']; ?></td>
                    	<td><?php echo $j['nama_jemaat']; ?></td>
						<td><?php echo $j['username']; ?></td>
						<td><?php echo $j['password']; ?></td>
						<td><?php echo $j['jenis_kelamin']; ?></td>
						<td><?php echo $j['tempat_lahir']; ?></td>
						<td><?php echo $j['tanggal_lahir']; ?></td>
						<td><?php echo $j['nama_ayah']; ?></td>
						<td><?php echo $j['nama_ibu']; ?></td>
						<td><?php echo $j['gereja_baptis']; ?></td>
						<td><?php echo $j['tanggal baptis']; ?></td>
						<td><?php echo $j['gereja_sidi']; ?></td>
						<td><?php echo $j['tanggal_sidi']; ?></td>
						<td><?php echo $j['status']; ?></td>
						<td><?php echo $j['nama_pasangan']; ?></td>
						<td><?php echo $j['gereja_pasangan']; ?></td>
						<td><?php echo $j['nomor induk_perkawinan']; ?></td>
						<td><?php echo $j['tempat_catatan_sipil']; ?></td>
						<td><?php echo $j['tanggal_catatan_sipil']; ?></td>
						<td><?php echo $j['gereja_pemberkatan']; ?></td>
						<td><?php echo $j['tanggal_pemberkatan']; ?></td>
						<td><?php echo $j['tanggal_cerai']; ?></td>
						<td><?php echo $j['alasan_cerai']; ?></td>
						<td><?php echo $j['pindah_gereja']; ?></td>
						<td><?php echo $j['tanggal_pindah_gereja']; ?></td>
						<td><?php echo $j['nomor_surat_pindah']; ?></td>
						<td><?php echo $j['tanggal_keluar']; ?></td>
						<td><?php echo $j['keterangan']; ?></td>
						<td><?php echo $j['alamat']; ?></td>
						<td><?php echo $j['nomer_telfon']; ?></td>
						<td><?php echo $j['email']; ?></td>
						<td><?php echo $j['surat_keterangan']; ?></td>
						<td><?php echo $j['pengingat']; ?></td>
						<td><?php echo $j['status_jemaat']; ?></td>		
						<td><?php echo $j['id_admin']; ?></td>
						<td>
                            <a href="<?php echo site_url('jemaat/edit/'.$j['id_jemaat']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('jemaat/remove/'.$j['id_jemaat']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
                </table>
            </div>        
            
        </div>
    </div>
</div>