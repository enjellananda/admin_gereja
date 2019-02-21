<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Jemaat Edit</h3>
            </div>
			<?php echo form_open('jemaat/edit/'.$jemaat['id_jemaat']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
						<div class="form-group">
							<select name="status" class="form-control">
								<option value="">select</option>
								<?php 
								$status_values = array(
									'Menikah'=>'Menikah',
								);

								foreach($status_values as $value => $display_text)
								{
									$selected = ($value == $jemaat['status']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('status');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status_jemaat" class="control-label"><span class="text-danger">*</span>Status Jemaat</label>
						<div class="form-group">
							<select name="status_jemaat" class="form-control">
								<option value="">select</option>
								<?php 
								$status_jemaat_values = array(
									'Waiting'=>'Waiting',
								);

								foreach($status_jemaat_values as $value => $display_text)
								{
									$selected = ($value == $jemaat['status_jemaat']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('status_jemaat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_admin" class="control-label"><span class="text-danger">*</span>Admin</label>
						<div class="form-group">
							<select name="id_admin" class="form-control">
								<option value="">select admin</option>
								<?php 
								foreach($all_admin as $admin)
								{
									$selected = ($admin['id_admin'] == $jemaat['id_admin']) ? ' selected="selected"' : "";

									echo '<option value="'.$admin['id_admin'].'" '.$selected.'>'.$admin['username'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('id_admin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis_kelamin" class="control-label"><span class="text-danger">*</span>Jenis Kelamin</label>
						<div class="form-group">
							<select name="jenis_kelamin" class="form-control">
								<option value="">select</option>
								<?php 
								$jenis_kelamin_values = array(
									'Perempuan'=>'Perempuan',
								);

								foreach($jenis_kelamin_values as $value => $display_text)
								{
									$selected = ($value == $jemaat['jenis_kelamin']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('jenis_kelamin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $jemaat['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ktp_sim" class="control-label"><span class="text-danger">*</span>Ktp Sim</label>
						<div class="form-group">
							<input type="text" name="ktp_sim" value="<?php echo ($this->input->post('ktp_sim') ? $this->input->post('ktp_sim') : $jemaat['ktp_sim']); ?>" class="form-control" id="ktp_sim" />
							<span class="text-danger"><?php echo form_error('ktp_sim');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="kk" class="control-label"><span class="text-danger">*</span>Kk</label>
						<div class="form-group">
							<input type="text" name="kk" value="<?php echo ($this->input->post('kk') ? $this->input->post('kk') : $jemaat['kk']); ?>" class="form-control" id="kk" />
							<span class="text-danger"><?php echo form_error('kk');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pengingat" class="control-label">Pengingat</label>
						<div class="form-group">
							<input type="text" name="pengingat" value="<?php echo ($this->input->post('pengingat') ? $this->input->post('pengingat') : $jemaat['pengingat']); ?>" class="has-datetimepicker form-control" id="pengingat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_jemaat" class="control-label"><span class="text-danger">*</span>Nama Jemaat</label>
						<div class="form-group">
							<input type="text" name="nama_jemaat" value="<?php echo ($this->input->post('nama_jemaat') ? $this->input->post('nama_jemaat') : $jemaat['nama_jemaat']); ?>" class="form-control" id="nama_jemaat" />
							<span class="text-danger"><?php echo form_error('nama_jemaat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $jemaat['username']); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_lahir" class="control-label"><span class="text-danger">*</span>Tanggal Lahir</label>
						<div class="form-group">
							<input type="text" name="tanggal_lahir" value="<?php echo ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $jemaat['tanggal_lahir']); ?>" class="has-datepicker form-control" id="tanggal_lahir" />
							<span class="text-danger"><?php echo form_error('tanggal_lahir');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $jemaat['alamat']); ?>" class="form-control" id="alamat" />
							<span class="text-danger"><?php echo form_error('alamat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gereja_asal" class="control-label">Gereja Asal</label>
						<div class="form-group">
							<input type="text" name="gereja_asal" value="<?php echo ($this->input->post('gereja_asal') ? $this->input->post('gereja_asal') : $jemaat['gereja_asal']); ?>" class="form-control" id="gereja_asal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="umur" class="control-label"><span class="text-danger">*</span>Umur</label>
						<div class="form-group">
							<input type="text" name="umur" value="<?php echo ($this->input->post('umur') ? $this->input->post('umur') : $jemaat['umur']); ?>" class="form-control" id="umur" />
							<span class="text-danger"><?php echo form_error('umur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pekerjaan" class="control-label"><span class="text-danger">*</span>Pekerjaan</label>
						<div class="form-group">
							<input type="text" name="pekerjaan" value="<?php echo ($this->input->post('pekerjaan') ? $this->input->post('pekerjaan') : $jemaat['pekerjaan']); ?>" class="form-control" id="pekerjaan" />
							<span class="text-danger"><?php echo form_error('pekerjaan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomer_telfon" class="control-label"><span class="text-danger">*</span>Nomer Telfon</label>
						<div class="form-group">
							<input type="text" name="nomer_telfon" value="<?php echo ($this->input->post('nomer_telfon') ? $this->input->post('nomer_telfon') : $jemaat['nomer_telfon']); ?>" class="form-control" id="nomer_telfon" />
							<span class="text-danger"><?php echo form_error('nomer_telfon');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $jemaat['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
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