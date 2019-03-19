<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Warta Add</h3>
            </div>
            <?php echo form_open_multipart('warta/add'); ?>
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
									$selected = ($admin['id_admin'] == $this->input->post('id_admin')) ? ' selected="selected"' : "";

									echo '<option value="'.$admin['id_admin'].'" '.$selected.'>'.$admin['username'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_terbit" class="control-label"><span class="text-danger">*</span>Tanggal Terbit</label>
						<div class="form-group">
							<input type="text" name="tanggal_terbit" value="<?php echo $this->input->post('tanggal_terbit'); ?>" class="has-datepicker form-control" id="tanggal_terbit" />
							<span class="text-danger"><?php echo form_error('tanggal_terbit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="wartajemaat" class="control-label"><span class="text-danger">*</span>Wartajemaat</label>
						<div class="form-group">
							<input type="file" name="wartajemaat" class="form-control" required="required">
							<!-- <input type="text" name="wartajemaat" value="<?php echo $this->input->post('wartajemaat'); ?>" class="form-control" id="wartajemaat" /> -->
							<span class="text-danger"><?php echo form_error('wartajemaat');?></span>
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