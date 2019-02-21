<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Kegiatan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('kegiatan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Kegiatan</th>
						<th>Id Admin</th>
						<th>Status</th>
						<th>Nama Kegiatan</th>
						<th>Waktu Kegiatan</th>
						<th>Tempat Kegiatan</th>
						<th>Contact Person</th>
						<th>Pamflet</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($kegiatan as $k){ ?>
                    <tr>
						<td><?php echo $k['id_kegiatan']; ?></td>
						<td><?php echo $k['id_admin']; ?></td>
						<td><?php echo $k['status']; ?></td>
						<td><?php echo $k['nama_kegiatan']; ?></td>
						<td><?php echo $k['waktu_kegiatan']; ?></td>
						<td><?php echo $k['tempat_kegiatan']; ?></td>
						<td><?php echo $k['contact_person']; ?></td>
						<td><?php echo $k['pamflet']; ?></td>
						<td>
                            <a href="<?php echo site_url('kegiatan/edit/'.$k['id_kegiatan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('kegiatan/remove/'.$k['id_kegiatan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
