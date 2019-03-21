<link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Kotbah</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('kotbah/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table table-responsive">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
						<th>Id Kotbah</th>
                        <th>Id Admin</th>
                        <th>Tema</th>
                        <th>Judul</th>
                        <th>Tanggal Kotbah</th>
                        <th>Kotbah Mingguan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($kotbah as $k){ ?>
                    <tr>
						<td><?php echo $k['id_kotbah']; ?></td>
                        <td><?php echo $k['id_admin']; ?></td>
                        <td><?php echo $k['tema']; ?></td>
                        <td><?php echo $k['judul']; ?></td>
                        <td><?php echo $k['tanggal_kotbah']; ?></td>
                        <td><?php echo $k['kotbah_mingguan']; ?></td>
						<td>
                            <a href="<?php echo site_url('kotbah/edit/'.$k['id_admin']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('kotbah/remove/'.$k['id_admin']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>