<?php
$server = "localhost"
$username = "id13987321_root"
$password = "R^&SvNuZ#1gGGp7-"
$dbname = "id13987321_jsonangga"

//koneksi
$conn = new mysqli($server, $username, $password, $dbname);

//check koneksi
if ($conn->connect_error) {
	die("koneksi gagal/failed ".$conn->connect_error);
	# code...
}
$sql="Select * from t_katalog";
$result=$conn->query($sql);
$data = array();

if (result->num_rows>0) {
	# code...
	while ($row=$result->fetch_assoc()){
		$data[]=$row;
	}
	else{
		echo"data kosong
	}
}
 ?>