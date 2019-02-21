<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Struktur Organisasi Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('struktur_organisasi/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Struktur</th>
						<th>Id Admin</th>
						<th>Id Jemaat</th>
						<th>Jabatan</th>
						<th>Periode</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($struktur_organisasi as $s){ ?>
                    <tr>
						<td><?php echo $s['id_struktur']; ?></td>
						<td><?php echo $s['id_admin']; ?></td>
						<td><?php echo $s['id_jemaat']; ?></td>
						<td><?php echo $s['jabatan']; ?></td>
						<td><?php echo $s['periode']; ?></td>
						<td>
                            <a href="<?php echo site_url('struktur_organisasi/edit/'.$s['id_struktur']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('struktur_organisasi/remove/'.$s['id_struktur']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
