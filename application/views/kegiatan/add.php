<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Kegiatan Add</h3>
            </div>
            <?php echo form_open_multipart('kegiatan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
						<div class="form-group">
							<select name="status" class="form-control">
								<option value="">select</option>
								<?php 
								$status_values = array(
									'Confirm'=>'Confirm',
									'Waiting'=>'Waiting',
								);

								foreach($status_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('status')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('status');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_kegiatan" class="control-label"><span class="text-danger">*</span>Nama Kegiatan</label>
						<div class="form-group">
							<input type="text" name="nama_kegiatan" value="<?php echo $this->input->post('nama_kegiatan'); ?>" class="form-control" id="nama_kegiatan" />
							<span class="text-danger"><?php echo form_error('nama_kegiatan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jam_kegiatan" class="control-label"><span class="text-danger">*</span>Jam Kegiatan</label>
						<div class="form-group">
							<input type="time" name="jam_kegiatan" class="form-control" id="jam_kegiatan" />
							<span class="text-danger"><?php echo form_error('jam_kegiatan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_kegiatan" class="control-label"><span class="text-danger">*</span>Tanggal Kegiatan</label>
						<div class="form-group">
							<input type="date" name="tanggal_kegiatan" class="form-control" id="waktu_kegiatan" />
							<span class="text-danger"><?php echo form_error('tanggal_kegiatan'); ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tempat_kegiatan" class="control-label"><span class="text-danger">*</span>Tempat Kegiatan</label>
						<div class="form-group">
							<input type="text" name="tempat_kegiatan" value="<?php echo $this->input->post('tempat_kegiatan'); ?>" class="form-control" id="tempat_kegiatan" />
							<span class="text-danger"><?php echo form_error('tempat_kegiatan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact_person" class="control-label"><span class="text-danger">*</span>Contact Person</label>
						<div class="form-group">
							<input type="text" name="contact_person" value="<?php echo $this->input->post('contact_person'); ?>" class="form-control" id="contact_person" />
							<span class="text-danger"><?php echo form_error('contact_person');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pamflet" class="control-label"><span class="text-danger">*</span>Pamflet</label>
						<div class="form-group">
							<input type="file" name="pamflet" class="form-control" required="required">
							
							<span class="text-danger"><?php echo form_error('pamflet');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dipimpin" class="control-label"><span class="text-danger">*</span>Dipimpin oleh</label>
						<div class="form-group">
							<input type="text" name="dipimpin" class="form-control" id="dipimpin" />
							<span class="text-danger"><?php echo form_error('dipimpin');?></span>
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