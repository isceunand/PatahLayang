<?php
class Alert extends CI_Library{
	public function pesan($type="error", $title="Oops..", $text=null, $time=null, $url=null){
		$pesan =	"<script>
					swal({
						type: '$type',
						title: '$title',
						text: '$text'
					})</script>";
		if($time != null){
			$pesan .= "<meta http-equiv='refresh' content='$time;url=$url'>";
		}
	}

	public function msg($type="error", $title="Oops..", $text=null, $time=null, $url=null){
		$pesan =	"<!DOCTYPE html>
					<html>"
	}
}