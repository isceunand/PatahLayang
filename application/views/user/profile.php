<div class="container-fluid mt--7 bg-light">
	<style type="text/css">
		#profile{
			background-image: url("<?= base_url(); ?>assets/img/bg.jpg");
			background-size: cover;
			color: black;
			padding-top: 20px;
		}
		#profile h3{
			font-weight: bolder;
			-webkit-text-stroke: 1px white;
		}
		@media screen and (max-width: 768px){
			#profile{
				text-align: center;
			}
			#profile #namaUser, #profile #navigasi{
				text-align: center;
				padding-top: 0 !important;
			}
		}
	</style>
	<ul class="list-group">
		<li class="list-group-item">
			<div id="profile">
				<div class="row">
					<div class="col-md-3 col-lg-3 text-center">
						<img src="<?= base_url(); ?>assets/img/user-full-color.svg" height="200px">
					</div>
					<div class="col-md-5 col-lg-5" id="namaUser" style="padding-top: 150px">
						<h3>Muhammad Irfan</h3>
					</div>
					<div class="col-md-2 col-lg-4" style="padding-top: 150px" id="navigasi">
						<a href="<?= base_url(); ?>user/setting" class="btn btn-warning" id="foto"><i class="fas fa-user"></i> Edit Profile</a> 
						<a href="<?= base_url(); ?>user/logout" class="btn btn-danger"><i class="fas fa-power-off"></i> Logout</a>
					</div>
				</div>
			</div>
		</li>
		<li class="list-group-item">
			<?php
		  	$query = $this->db->query("SELECT * FROM user WHERE username = '".$this->session->userdata("userDD18")."'");
		  	$data = $query->row();
		  	?>
			<table class="table">
				<tr>
					<td>Nama</td>
					<td><?= $data->nama; ?></td>
				</tr>
				<tr>
					<td>Nomor Identitas (KTP/SIM)</td>
					<td><?= $data->identitas; ?></td>
				</tr>
				<tr>
					<td>Nomor HP</td>
					<td><?= $data->nohp; ?></td>
				</tr>
				<tr>
					<td>TTL</td>
					<td>
						<?= $data->tempat_lahir; ?>, <?= $data->tgl_lahir; ?>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><?= $data->alamat; ?></td>
				</tr>
				<tr>
					<td>Golongan Darah</td>
					<td><?= $data->darah; ?></td>
				</tr>
				<tr>
					<td>Total Donor</td>
					<td><?= $data->total_donor; ?></td>
				</tr>
			</table>
		</li>
	</ul>
</div>