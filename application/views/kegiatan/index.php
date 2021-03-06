<link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Kegiatan</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('kegiatan/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table table-responsive">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Waktu Kegiatan</th>
                        <th>Tempat Kegiatan</th>
                        <th>Contact Person</th>
                        <th>Pamflet</th>
                        <th>Dipimpin</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($kegiatan as $k){ ?>
                    <tr>
                        <td><?php echo $k['nama_kegiatan']; ?></td>
                        <td><?php $tgl = $k['tanggal_kegiatan']; echo date("d F Y", strtotime($tgl)); ?></td>
                        <td><?php $wkt = $k['jam_kegiatan']; echo date("H:i", strtotime($wkt)); ?></td>
                        <td><?php echo $k['tempat_kegiatan']; ?></td>
                        <td><?php echo $k['contact_person']; ?></td>
                        <td>
                            <!-- <a href="<?=base_url('Kegiatan/viewMinutesFile/'.$k['pamflet'])?>" target="_blank">   <?php echo $k['pamflet']; ?>
                            </a> -->
                            <a href="<?=base_url('Kegiatan/download/'.$k['pamflet'])?>">
                                <img src="<?php echo $k['pamflet'];?>" width="100px" height="100px">
                            </a>
                        </td>
                        <td><?php echo $k['dipimpin']; ?></td>
                        <td><?php echo $k['status']; ?></td>
                        <td>
                            <a href="<?php echo site_url('kegiatan/edit/'.$k['id_kegiatan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('kegiatan/remove/'.$k['id_kegiatan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>