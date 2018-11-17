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
						
			<?php
			}else{
				redirect(base_url("user/join"));
			}
		} ?>
	</ul>
</div>