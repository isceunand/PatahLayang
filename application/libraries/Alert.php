<?php
class Alert{
	public function pesan($type="error", $title="Oops..", $text=null, $time=null, $url=null){
		if($type == ""){
			$type = "error";
		}
		if($title == ""){
			$title = "Oops..";
		}
		$pesan =	"<script>
					swal({
						type: '$type',
						title: '$title',
						text: '$text'
					})</script>";
		if($time != null){
			$pesan .= "<meta http-equiv='refresh' content='$time;url=$url'>";
		}

		echo $pesan;
	}

	public function msg($type="error", $title="Oops..", $text=null, $time=null, $url=null){
		if($type == ""){
			$type = "error";
		}
		if($title == ""){
			$title = "Oops..";
		}
		$pesan =	"<!DOCTYPE html>
					<html>
						<head>
							<link rel='stylesheet' href='".base_url("/assets/css/sweetalert2.min.css")."'>
							<script src='".base_url("/assets/js/sweetalert2.min.js")."'></script>
						</head>
						<body>
							<script>
								swal({
									type: '$type',
									title: '$title',
									text: '$text'
								})
							</script>";
		if($time != null){
			$pesan .= "<meta http-equiv='refresh' content='$time;url=$url'>";
		}

		$pesan .= "</body></html>";

		echo $pesan;
	}

	public function mes($type="error", $title="Oops..", $text=null, $time=null, $url=null){
		if($type == ""){
			$type = "error";
		}
		if($title == ""){
			$title = "Oops..";
		}
		$pesan =	"
						<link rel='stylesheet' href='".base_url("/assets/css/sweetalert2.min.css")."'>
						<script src='".base_url("/assets/js/sweetalert2.min.js")."'></script>
						<body>
							<script>
								swal({
									type: '$type',
									title: '$title',
									text: '$text'
								})
							</script>";
		if($time != null){
			$pesan .= "<meta http-equiv='refresh' content='$time;url=$url'>";
		}

		$pesan .= "</body></html>";

		echo $pesan;	
	}
}