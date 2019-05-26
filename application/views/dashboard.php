<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                Hi, <?php echo $user['username']; ?>
                </h3>
            </div>
        </div>
    </div>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $get_jemaat; ?></h3>

              <p>Jumlah Jemaat waiting</p>
            </div>
            <div class="icon">
              <i class="fa fa-child"></i>
            </div>
            <a href="<?php echo base_url('Jemaat/index') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $get_jemaat_confirm; ?><sup style="font-size: 20px"></sup></h3>

              <p>Jumlah Jemaat confirm</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url('Jemaat/index') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $get_kegiatan; ?><sup style="font-size: 20px"></sup></h3>

              <p>Jumlah Kegiatan Waiting</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url('Kegiatan/index') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $get_kegiatan_confirm; ?><sup style="font-size: 20px"></sup></h3>

              <p>Jumlah Kegiatan Confirm</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
           <a href="<?php echo base_url('Kegiatan/index') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
</div>