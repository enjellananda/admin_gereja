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
						<label for="nama_jemaat" class="control-label">Nama Jemaat</label>
						<div class="form-group">
							<input type="text" name="nama_jemaat" value="<?php echo ($this->input->post('nama_jemaat') ? $this->input->post('nama_jemaat') : $jemaat['nama_jemaat']); ?>" class="form-control" id="nama_jemaat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $jemaat['username']); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $jemaat['password']); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
						<div class="form-group">
							<select name="jenis_kelamin" class="form-control">
								<option value="">select</option>
								<?php 
								$jenis_kelamin_values = array(
									'Perempuan'=>'Perempuan',
									'Laki-Laki'=>'Laki-Laki',
								);

								foreach($jenis_kelamin_values as $value => $display_text)
								{
									$selected = ($value == $jemaat['jenis_kelamin']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tempat_lahir" class="control-label">Tempat Lahir</label>
						<div class="form-group">
							<input type="text" name="tempat_lahir" value="<?php echo ($this->input->post('tempat_lahir') ? $this->input->post('tempat_lahir') : $jemaat['tempat_lahir']); ?>" class="form-control" id="tempat_lahir" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
						<div class="form-group">
							<input type="text" name="tanggal_lahir" value="<?php echo ($this->input->post('tanggal_lahir') ? $this->input->post('tanggal_lahir') : $jemaat['tanggal_lahir']); ?>" class="has-datepicker form-control" id="tanggal_lahir" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_ayah" class="control-label">Nama Ayah</label>
						<div class="form-group">
							<input type="text" name="nama_ayah" value="<?php echo ($this->input->post('nama_ayah') ? $this->input->post('nama_ayah') : $jemaat['nama_ayah']); ?>" class="form-control" id="nama_ayah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_ibu" class="control-label">Nama Ibu</label>
						<div class="form-group">
							<input type="text" name="nama_ibu" value="<?php echo ($this->input->post('nama_ibu') ? $this->input->post('nama_ibu') : $jemaat['nama_ibu']); ?>" class="form-control" id="nama_ibu" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gereja_baptis" class="control-label">Gereja Baptis</label>
						<div class="form-group">
							<input type="text" name="gereja_baptis" value="<?php echo ($this->input->post('gereja_baptis') ? $this->input->post('gereja_baptis') : $jemaat['gereja_baptis']); ?>" class="form-control" id="gereja_baptis" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal baptis" class="control-label">Tanggal Baptis</label>
						<div class="form-group">
							<input type="text" name="tanggal baptis" value="<?php echo ($this->input->post('tanggal baptis') ? $this->input->post('tanggal baptis') : $jemaat['tanggal baptis']); ?>" class="has-datepicker form-control" id="tanggal baptis" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gereja_sidi" class="control-label">Gereja Sidi</label>
						<div class="form-group">
							<input type="text" name="gereja_sidi" value="<?php echo ($this->input->post('gereja_sidi') ? $this->input->post('gereja_sidi') : $jemaat['gereja_sidi']); ?>" class="form-control" id="gereja_sidi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_sidi" class="control-label">Tanggal Sidi</label>
						<div class="form-group">
							<input type="text" name="tanggal_sidi" value="<?php echo ($this->input->post('tanggal_sidi') ? $this->input->post('tanggal_sidi') : $jemaat['tanggal_sidi']); ?>" class="has-datepicker form-control" id="tanggal_sidi" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<select name="status" class="form-control">
								<option value="">select</option>
								<?php 
								$status_values = array(
									'Menikah'=>'Menikah',
									'Belum Menikah'=>'Belum Menikah'
								);

								foreach($status_values as $value => $display_text)
								{
									$selected = ($value == $jemaat['status']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_pasangan" class="control-label">Nama Pasangan</label>
						<div class="form-group">
							<input type="text" name="nama_pasangan" value="<?php echo ($this->input->post('nama_pasangan') ? $this->input->post('nama_pasangan') : $jemaat['nama_pasangan']); ?>" class="form-control" id="nama_pasangan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gereja_pasangan" class="control-label">Gereja Pasangan</label>
						<div class="form-group">
							<input type="text" name="gereja_pasangan" value="<?php echo ($this->input->post('gereja_pasangan') ? $this->input->post('gereja_pasangan') : $jemaat['gereja_pasangan']); ?>" class="form-control" id="gereja_pasangan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomor induk_perkawinan" class="control-label">Nomor Induk Perkawinan</label>
						<div class="form-group">
							<input type="text" name="nomor induk_perkawinan" value="<?php echo ($this->input->post('nomor induk_perkawinan') ? $this->input->post('nomor induk_perkawinan') : $jemaat['nomor induk_perkawinan']); ?>" class="form-control" id="nomor induk_perkawinan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tempat_catatan_sipil" class="control-label">Tempat Catatan Sipil</label>
						<div class="form-group">
							<input type="text" name="tempat_catatan_sipil" value="<?php echo ($this->input->post('tempat_catatan_sipil') ? $this->input->post('tempat_catatan_sipil') : $jemaat['tempat_catatan_sipil']); ?>" class="form-control" id="tempat_catatan_sipil" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_catatan_sipil" class="control-label">Tanggal Catatan Sipil</label>
						<div class="form-group">
							<input type="text" name="tanggal_catatan_sipil" value="<?php echo ($this->input->post('tanggal_catatan_sipil') ? $this->input->post('tanggal_catatan_sipil') : $jemaat['tanggal_catatan_sipil']); ?>" class="has-datepicker form-control" id="tanggal_catatan_sipil" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gereja_pemberkatan" class="control-label">Gereja Pemberkatan</label>
						<div class="form-group">
							<input type="text" name="gereja_pemberkatan" value="<?php echo ($this->input->post('gereja_pemberkatan') ? $this->input->post('gereja_pemberkatan') : $jemaat['gereja_pemberkatan']); ?>" class="form-control" id="gereja_pemberkatan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_pemberkatan" class="control-label">Tanggal Pemberkatan</label>
						<div class="form-group">
							<input type="text" name="tanggal_pemberkatan" value="<?php echo ($this->input->post('tanggal_pemberkatan') ? $this->input->post('tanggal_pemberkatan') : $jemaat['tanggal_pemberkatan']); ?>" class="has-datepicker form-control" id="tanggal_pemberkatan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_cerai" class="control-label">Tanggal Cerai</label>
						<div class="form-group">
							<input type="text" name="tanggal_cerai" value="<?php echo ($this->input->post('tanggal_cerai') ? $this->input->post('tanggal_cerai') : $jemaat['tanggal_cerai']); ?>" class="has-datepicker form-control" id="tanggal_cerai" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alasan_cerai" class="control-label">Alasan Cerai</label>
						<div class="form-group">
							<textarea name="alasan_cerai" class="form-control" id="alasan_cerai"><?php echo ($this->input->post('alasan_cerai') ? $this->input->post('alasan_cerai') : $jemaat['alasan_cerai']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pindah_gereja" class="control-label">Pindah Gereja</label>
						<div class="form-group">
							<input type="text" name="pindah_gereja" value="<?php echo ($this->input->post('pindah_gereja') ? $this->input->post('pindah_gereja') : $jemaat['pindah_gereja']); ?>" class="form-control" id="pindah_gereja" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_pindah_gereja" class="control-label">Tanggal Pindah Gereja</label>
						<div class="form-group">
							<input type="text" name="tanggal_pindah_gereja" value="<?php echo ($this->input->post('tanggal_pindah_gereja') ? $this->input->post('tanggal_pindah_gereja') : $jemaat['tanggal_pindah_gereja']); ?>" class="has-datepicker form-control" id="tanggal_pindah_gereja" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomor_surat_pindah" class="control-label">Nomor Surat Pindah</label>
						<div class="form-group">
							<input type="text" name="nomor_surat_pindah" value="<?php echo ($this->input->post('nomor_surat_pindah') ? $this->input->post('nomor_surat_pindah') : $jemaat['nomor_surat_pindah']); ?>" class="form-control" id="nomor_surat_pindah" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tanggal_keluar" class="control-label">Tanggal Keluar</label>
						<div class="form-group">
							<input type="text" name="tanggal_keluar" value="<?php echo ($this->input->post('tanggal_keluar') ? $this->input->post('tanggal_keluar') : $jemaat['tanggal_keluar']); ?>" class="has-datepicker form-control" id="tanggal_keluar" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="keterangan" class="control-label">Keterangan</label>
						<div class="form-group">
							<textarea name="keterangan" class="form-control" id="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $jemaat['keterangan']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $jemaat['alamat']); ?>" class="form-control" id="alamat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomer_telfon" class="control-label">Nomer Telfon</label>
						<div class="form-group">
							<input type="text" name="nomer_telfon" value="<?php echo ($this->input->post('nomer_telfon') ? $this->input->post('nomer_telfon') : $jemaat['nomer_telfon']); ?>" class="form-control" id="nomer_telfon" />
						</div>
					</div>
						<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $jemaat['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="surat_keterangan" class="control-label">Surat Keterangan</label>
						<div class="form-group">
							<input type="text" name="surat_keterangan" value="<?php echo ($this->input->post('surat_keterangan') ? $this->input->post('surat_keterangan') : $jemaat['surat_keterangan']); ?>" class="form-control" id="surat_keterangan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pengingat" class="control-label">Pengingat</label>
						<div class="form-group">
							<input type="text" name="pengingat" value="<?php echo ($this->input->post('pengingat') ? $this->input->post('pengingat') : $jemaat['pengingat']); ?>" class="has-datetimepicker form-control" id="pengingat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status_jemaat" class="control-label">Status Jemaat</label>
						<div class="form-group">
							<select name="status_jemaat" class="form-control">
								<option value="">select</option>
								<?php 
								$status_jemaat_values = array(
									'Confirm'=>'Confirm',
									'Waiting'=>'Waiting',
								);

								foreach($status_jemaat_values as $value => $display_text)
								{
									$selected = ($value == $jemaat['status_jemaat']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>

					<div class="col-md-6">
						<label for="id_admin" class="control-label">Admin</label>
						<div class="form-group">
							<select name="id_admin" class="form-control">
								<option value="">select admin</option>
								<?php 
								foreach($all_admin as $admin)
								{
									$selected = ($admin['id_admin'] == $jemaat['id_admin']) ? ' selected="selected"' : "";

									echo '<option value="'.$admin['id_admin'].'" '.$selected.'>'.$admin['id_admin'].'</option>';
								} 
								?>
							</select>
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