<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Struktur Organisasi Edit</h3>
            </div>
			<?php echo form_open('struktur_organisasi/edit/'.$struktur_organisasi['id_struktur']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_admin" class="control-label">Admin</label>
						<div class="form-group">
							<select name="id_admin" class="form-control">
								<option value="">select admin</option>
								<?php 
								foreach($all_admin as $admin)
								{
									$selected = ($admin['id_admin'] == $struktur_organisasi['id_admin']) ? ' selected="selected"' : "";

									echo '<option value="'.$admin['id_admin'].'" '.$selected.'>'.$admin['username'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_jemaat" class="control-label">Jemaat</label>
						<div class="form-group">
							<select name="id_jemaat" class="form-control">
								<option value="">select jemaat</option>
								<?php 
								foreach($all_jemaat as $jemaat)
								{
									$selected = ($jemaat['id_jemaat'] == $struktur_organisasi['id_jemaat']) ? ' selected="selected"' : "";

									echo '<option value="'.$jemaat['id_jemaat'].'" '.$selected.'>'.$jemaat['nama_jemaat'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jabatan" class="control-label"><span class="text-danger">*</span>Jabatan</label>
						<div class="form-group">
							<select name="jabatan" class="form-control">
								<option value="">select</option>
								<?php 
								$jabatan_values = array(
								);

								foreach($jabatan_values as $value => $display_text)
								{
									$selected = ($value == $struktur_organisasi['jabatan']) ? ' selected="selected"' : "";

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
							<input type="text" name="periode" value="<?php echo ($this->input->post('periode') ? $this->input->post('periode') : $struktur_organisasi['periode']); ?>" class="form-control" id="periode" />
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