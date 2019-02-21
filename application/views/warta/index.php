<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Warta Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('warta/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Warta</th>
						<th>Id Admin</th>
						<th>Tanggal Terbit</th>
						<th>Wartajemaat</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($warta as $w){ ?>
                    <tr>
						<td><?php echo $w['id_warta']; ?></td>
						<td><?php echo $w['id_admin']; ?></td>
						<td><?php echo $w['tanggal_terbit']; ?></td>
						<td><?php echo $w['wartajemaat']; ?></td>
						<td>
                            <a href="<?php echo site_url('warta/edit/'.$w['id_warta']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('warta/remove/'.$w['id_warta']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
