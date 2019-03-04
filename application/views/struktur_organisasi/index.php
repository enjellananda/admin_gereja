<<link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
						<th>Id Struktur</th>
						<th>Id Admin</th>
						<th>Nama Jemaat</th>
						<th>Jabatan</th>
						<th>Periode</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($struktur_organisasi as $s){ ?>
                    <tr>
						<td><?php echo $s['id_struktur']; ?></td>
						<td><?php echo $s['id_admin']; ?></td>
						<td><?php echo $s['nama_jemaat']; ?></td>
						<td><?php echo $s['jabatan']; ?></td>
						<td><?php echo $s['periode']; ?></td>
						<td>
                            <a href="<?php echo site_url('struktur_organisasi/edit/'.$s['id_struktur']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('struktur_organisasi/remove/'.$s['id_struktur']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
