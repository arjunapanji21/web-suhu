<?php 


$servername = "localhost";
$username = "root";
$password = "";
$database = "sensor";

$conn = mysqli_connect($servername, $username, $password, $database);

function query($query){
	global $conn;
	$hasil = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($hasil)){
		$rows[] = $row;
	}
	return $rows;
}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM sensor WHERE id = $id");

return mysqli_affected_rows($conn);
}

function insert($data){
	global $conn;
	$ruangan = $data["ruangan"];
	$temp = $data["temp"];
	$humi = $data["humi"];
	$now = new DateTime();
	$datenow = $now->format("Y-m-d H:i:s");
		$query = "INSERT INTO sensor VALUES('','$ruangan','$temp', '$humi', '$datenow')";

	mysqli_query($conn, $query); 

return mysqli_affected_rows($conn);
}

?>