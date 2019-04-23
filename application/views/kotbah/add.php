<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Kotbah Add</h3>
            </div>
            <?php echo form_open_multipart('kotbah/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tema" class="control-label"><span class="text-danger">*</span>Tema</label>
						<div class="form-group">
							<input type="text" name="tema" value="<?php echo $this->input->post('tema'); ?>" class="form-control" id="tema" />
							<span class="text-danger"><?php echo form_error('tema');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="judul" class="control-label"><span class="text-danger">*</span>Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo $this->input->post('judul'); ?>" class="form-control" id="judul" />
							<span class="text-danger"><?php echo form_error('judul');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_kotbah" class="control-label"><span class="text-danger">*</span>Tanggal Kotbah</label>
						<div class="form-group">
							<input type="text" name="tanggal_kotbah" value="<?php echo $this->input->post('tanggal_kotbah'); ?>" class="has-datepicker form-control" id="tanggal_kotbah" />
							<span class="text-danger"><?php echo form_error('tanggal_kotbah');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="kotbah_mingguan" class="control-label"><span class="text-danger">*</span>Kotbah Mingguan</label>
						<div class="form-group">
							<input type="file" name="kotbah_mingguan" class="form-control" required="required">
							
							<span class="text-danger"><?php echo form_error('kotbah_mingguan');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>