<link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Warta</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('warta/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table table-responsive">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
						<th>Tanggal Terbit</th>
						<th>Wartajemaat</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($warta as $w){ ?>
                    <tr>
						<td><?php $tgl = $w['tanggal_terbit']; echo date("d F Y", strtotime($tgl)); ?></td>
						<td><?php echo $w['wartajemaat']; ?></td>
						<td>
                            <a href="<?php echo site_url('warta/edit/'.$w['id_warta']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('warta/remove/'.$w['id_warta']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
