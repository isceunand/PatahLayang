<?php
$query = $this->db->query("SELECT * FROM panitia WHERE email = '".$this->session->userdata("panitiaDD18")."'");
$data = $query->row();
?>
<div class="container-fluid mt--7 bg-light">
	<ul class="list-group">
		<li class="list-group-item">
			<h1>Buat Kegiatan Donor Darah</h1>
		</li>
		<li class="list-group-item">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
				<div class="form-group">
					<input type="text" name="nama" class="form-control" placeholder="Nama kegiatan..." value="<?= @$_POST['nama']; ?>">
				</div>
				<div class="form-group">
					<input type="date" name="tanggal" class="form-control" placeholder="Tanggal kegiatan..." value="<?= @$_POST['tanggal']; ?>">
				</div>
				<div class="form-group">
					<input type="text" name="tempat" class="form-control" placeholder="Tempat kegiatan..." value="<?= @$_POST['tempat']; ?>">
				</div>
				<div class="form-group">
					<textarea name="deskripsi" class="form-control" placeholder="Deskripsi kegiatan..."><?= @$_POST["deskripsi"]; ?></textarea>
				</div>
				<div class="form-group">
					<label>Lembar Pengesahan :</label>
					<input type="file" name="lampiran" class="form-control" placeholder="Lembar pengesahan" value="<?= @$_POST['file']; ?>">
					<small class="text-danger"><i>Format harus pdf</i></small>
				</div>
				<input type="submit" name="buat" class="btn btn-primary" value="Buat">
			</form>
			<?php
			if(isset($_POST["buat"])){
				$nama = $this->db->escape_str($this->input->post("nama", TRUE));
				$tanggal = $this->db->escape_str($this->input->post("tanggal", TRUE));
				$deskripsi = $this->db->escape_str($this->input->post("deskripsi", TRUE));
				$tempat = $this->db->escape_str($this->input->post("tempat", TRUE));

				$nama_file = $this->db->escape_str($_FILES["lampiran"]["name"]);
				$tmp_file  = $_FILES["lampiran"]["tmp_name"];
				$ext_file  = $this->db->escape_str(pathinfo($nama_file, PATHINFO_EXTENSION));

				$kode = date("His");
				$kode2 = date("dHis").".pdf";

				if($nama == ""){
					$this->alert->mes("", "", "Nama harus diisi...");
				}else if($tanggal == ""){
					$this->alert->mes("", "", "Tanggal kegiatan harus diisi...");
				}else if($deskripsi == ""){
					$this->alert->mes("", "", "Deskripsi kegiatan wajib diisi...");
				}else{
					if($ext_file == "pdf" or $ext_file == "PDF"){
						$update = $this->db->query("INSERT INTO kegiatan(nama, tanggal, $tempat, deskripsi, panitia, lampiran, kode) VALUES('$nama', '$tanggal', '$tempat', '$deskripsi', $data->id, '$kode2', '$kode')");
						if($update){
							$upload = move_uploaded_file($tmp_file, "assets/lampiran/$kode2");
							if($upload){
								$this->alert->mes("success", "Berhasil (Kode : $kode)", "Kegiatan berhasil dibuat...");
							}else{
								$this->alert->mes("", "", "Terjadi kesalahan tidak diketahui");
							}
						}else{
							$this->alert->mes("", "", "Terjadi kesalahan tidak diketahui");
						}
					}else{
						$this->alert->mes("", "", "Format file harus pdf...");
					}
				}
			} ?>
		</li>
	</ul>
</div>