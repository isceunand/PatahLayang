<?php $data = $this->db->query("SELECT * FROM panitia WHERE email = '".$this->session->userdata("panitiaDD18")."'")->row(); ?>
<div class="container-fulid mt--7 bg-light">
	<ul class="list-group">
		<li class="list-group-item">
			<h1>List Kegiatan Donor Darah</h1>
		</li>
		<li class="list-group-item">
			<table class="table">
				<tr>
					<th>No</th>
					<th>Nama Kegiatan</th>
					<th>Tanggal Kegiatan</th>
					<th>Kode</th>
					<th>Lembar Pengesahan</th>
					<th>Status</th>
				</tr>
				<?php
				$no = 1;
				$query = $this->db->query("SELECT * FROM kegiatan WHERE panitia = '".$data->id."' ORDER BY id DESC");
				foreach ($query->result() as $key) { ?>
					<tr>
						<td><?= $no++; ?></td>
						<td><a href='<?= base_url(); ?>kegiatan?kode=<?= $key->kode; ?>'><?= $key->nama; ?></a></td>
						<td><?= $key->tanggal; ?></td>
						<td><?= $key->kode; ?></td>
						<td><a href="<?= base_url(); ?>assets/lampiran/<?= $key->lampiran; ?>"><?= $key->lampiran; ?></a></td>
						<td>
							<?php
							if($key->status == 0){
								echo "Belum selesai";
							}else{
								echo "<font class='text-success'>Selesai</font>";
							} ?>
						</td>
					</tr>
				<?php
				} ?>
			</table>
		</li>
	</ul>
</div>