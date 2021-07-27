<?php 
include("koneksi.php");
if(isset($_GET['op']))
{
	if($_GET['op'] == 'tambah'){
		$qr = mysqli_query($link,"insert into tbl_mahasiswa values(
			'$_POST[nim]',
			'$_POST[nama]',
			'$_POST[tempatlahir]',
			'$_POST[tanggallahir]',
			'$_POST[nomorhp]',
			'$_POST[jurusan]'
			)");
		if($qr)
		{
			echo "<script>
					alert('Data Berhasil Ditambah');
					window.location = 'index.php?m=mahasiswa';
				</script>";
			exit;
		}
		else
		{
			echo "<script>
					alert('Data Gagal Ditambah');
					window.location = 'index.php?m=mahasiswa';
				</script>";
			exit;	
		}
	}

	elseif ($_GET['op'] == 'delete') {
		$qr = mysqli_query($link,"delete from tbl_mahasiswa where nim = '$_GET[id]'");
		if($qr)
		{
			echo "<script>
					alert('Data Berhasil Dihapus');
					window.location = 'index.php?m=mahasiswa';
				</script>";
			exit;
		}
		else
		{
			echo "<script>
					alert('Data Gagal Dihapus');
					window.location = 'index.php?m=mahasiswa';
				</script>";
			exit;	
		}
	}

	elseif($_GET['op'] == 'ubah'){
		$qr = mysqli_query($link,"UPDATE tbl_mahasiswa set 
															nama = '$_POST[nama]',
															tp_lahir = '$_POST[tempatlahir]',
															tg_lahir = '$_POST[tanggallahir]',
															no_hp = '$_POST[nomorhp]',
															jurusan = '$_POST[jurusan]'
															WHERE nim = '$_POST[nim]'");

		if($qr)
		{
			echo "<script>
					alert('Data Berhasil Diubah');
					window.location = 'index.php?m=mahasiswa';
				</script>";
			exit;
		}
		else
		{
			echo "<script>
					alert('Data Gagal Diubah');
					window.location = 'index.php?m=mahasiswa';
				</script>";
			exit;	
		}
	}

	
 }
 ?>
