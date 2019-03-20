<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Struktur Organisasi Add</h3>
            </div>
            <?php echo form_open_multipart('struktur_organisasi/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_admin" class="control-label"><span class="text-danger">*</span>Admin</label>
						<div class="form-group">
							<select name="id_admin" class="form-control">
								<option value="">select admin</option>
								<?php 
								foreach($all_admin as $admin)
								{
									$selected = ($admin['id_admin'] == $this->input->post('id_admin')) ? ' selected="selected"' : "";

									echo '<option value="'.$admin['id_admin'].'" '.$selected.'>'.$admin['username'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_admin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_jemaat" class="control-label"><span class="text-danger">*</span>Jemaat</label>
						<div class="form-group">
							<select name="id_jemaat" class="form-control">
								<option value="">select jemaat</option>
								<?php 
								foreach($all_jemaat as $jemaat)
								{
									$selected = ($jemaat['id_jemaat'] == $this->input->post('id_jemaat')) ? ' selected="selected"' : "";

									echo '<option value="'.$jemaat['id_jemaat'].'" '.$selected.'>'.$jemaat['nama_jemaat'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_jemaat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jabatan" class="control-label"><span class="text-danger">*</span>Jabatan</label>
						<div class="form-group">
							<select name="jabatan" class="form-control">
								<option value="">select</option>
								<?php 
								$jabatan_values = array(
									'Sekertaris'=>'Sekertaris',
									'Bendahara'=>'Bendahara',
									'Majelis'=>'Majelis',
									'Diaken'=>'Diaken',
									'Pendeta'=>'Pendeta',
								);

								foreach($jabatan_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('jabatan')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('jabatan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="periode" class="control-label"><span class="text-danger">*</span>Periode</label>
						<div class="form-group">
							<input type="text" name="periode" value="<?php echo $this->input->post('periode'); ?>" class="form-control" id="periode" />
							<span class="text-danger"><?php echo form_error('periode');?></span>
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