<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Kotbah Edit</h3>
            </div>
			<?php echo form_open('kotbah/edit/'.$kotbah['id_kotbah']); ?>
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
									$selected = ($admin['id_admin'] == $kotbah['id_admin']) ? ' selected="selected"' : "";

									echo '<option value="'.$admin['id_admin'].'" '.$selected.'>'.$admin['id_admin'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tema" class="control-label"><span class="text-danger">*</span>Tema</label>
						<div class="form-group">
							<input type="text" name="tema" value="<?php echo ($this->input->post('tema') ? $this->input->post('tema') : $kotbah['tema']); ?>" class="form-control" id="tema" />
							<span class="text-danger"><?php echo form_error('tema');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="judul" class="control-label"><span class="text-danger">*</span>Judul</label>
						<div class="form-group">
							<input type="text" name="judul" value="<?php echo ($this->input->post('judul') ? $this->input->post('judul') : $kotbah['judul']); ?>" class="form-control" id="judul" />
							<span class="text-danger"><?php echo form_error('judul');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_kotbah" class="control-label"><span class="text-danger">*</span>Tanggal Kotbah</label>
						<div class="form-group">
							<input type="text" name="tanggal_kotbah" value="<?php echo ($this->input->post('tanggal_kotbah') ? $this->input->post('tanggal_kotbah') : $kotbah['tanggal_kotbah']); ?>" class="has-datepicker form-control" id="tanggal_kotbah" />
							<span class="text-danger"><?php echo form_error('tanggal_kotbah');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="kotbah_mingguan" class="control-label"><span class="text-danger">*</span>Kotbah Mingguan</label>
						<div class="form-group">
							<textarea name="kotbah_mingguan" class="form-control" id="kotbah_mingguan"><?php echo ($this->input->post('kotbah_mingguan') ? $this->input->post('kotbah_mingguan') : $kotbah['kotbah_mingguan']); ?></textarea>
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