<?php 

require 'koneksi.php';

ini_set('date.timezone', 'Asia/Jakarta');

$now = new DateTime();
$datenow = $now->format("Y-m-d H:i:s");
$ruangan = $_POST['ruangan'];
$suhu = $_POST['suhu'];
$kelembaban = $_POST['kelembaban'];

$sql = "INSERT INTO sensor(ruangan, suhu, kelembaban, waktu) VALUES ('$ruangan', '$suhu', '$kelembaban', '$datenow')";

if ($conn->query($sql) === TRUE) {
	echo json_encode("Ok");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
 ?>