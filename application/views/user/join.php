<div class="container-fluid mt--7 bg-light">
	<ul class="list-group">
		<li class="list-group-item">
			<h1>Daftar Jadi Pendonor</h1>
		</li>
		<li class="list-group-item">
			<div class="row">
				<div class="col-md-8 text-center" style="margin:auto;">
					<form action="" method="get">
						<div class="form-group">
							<input type="text" name="kode" class="form-control" placeholder="Masukkan kode...">
						</div>
						<input type="submit" class="btn btn-primary" value="Join">
					</form>
				</div>
			</div>
		</li>
		<?php
		if(@$this->db->escape_str($_GET["kode"])){
			$kode = $this->db->escape_str($_GET["kode"]);
			$kegiatan = $this->db->query("SELECT * FROM kegiatan WHERE kode = '$kode'");
			if($kegiatan->num_rows() == 1){$key = $kegiatan->row(); ?>
				<table class="table">
					<tr>
						<th>Nama Kegiatan</th>
						<th>Tempat</th>
						<th>Waktu</th>
						<th>Lembar Pengesahan</th>
					</tr>
					<tr>
						<td><?= $key->nama; ?></td>
						<td><?= $key->tempat; ?></td>
						<td><?= $key->tanggal; ?></td>
						<td><a href="<?= base_url(); ?>assets/lampiran/<?= $key->lampiran; ?>"><?= $key->lampiran; ?></a></td>
					</tr>
				</table>
				<ul class="list-group">
					<li class="list-group-item">
						<form action="" method="post">
							<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
							<div class="form-group">
								<input type="text" name="berat" class="form-control" placeholder="Berat badan">
							</div>
							<div class="form-group">
								<input type="text" name="obat" class="form-control" placeholder="Obat yang dikonsumsi seminggu terakhir">
							</div>
							<div class="form-group">
								<textarea name="keterangan" class="form-control" placeholder="Keterangan kesehatan lainnya"></textarea>
							</div>
							<input type="submit" name="kirim" class="btn btn-primary" value="Kirim">
						</form>
						<?php
						if(isset($_POST["kirim"])){
							$berat= $this->db->escape_str($this->input->post("berat", TRUE));
							$obat= $this->db->escape_str($this->input->post("obat", TRUE));
							$keterangan= $this->db->escape_str($this->input->post("keterangan", TRUE));
							$id_user = $this->db->query("SELECT * FROM user WHERE username = '".$this->session->userdata("userDD18")."'")->row()->id;
							$insert = $this->db->query("INSERT INTO peserta(id_user, kode_kegiatan, status, berat,obat, keterangan) VALUES('$id_user', '$kode', '0', '$berat', '$obat', '$keterangan')");

							if($insert){
								$this->alert->mes("success", "Berhasil mendaftar");
							}
						} ?>
					</li>
				</ul>
			<?php
			}else{
				redirect(base_url("user/join"));
			}
		} ?>
	</ul>
</div>