<?php 
	if(!isset($_GET['aksi'])){
		echo"<script> window.location = 'index.php?m=mahasiswa';
		</script>";
		exit;
	}

	if($_GET['aksi'] == 'tambah'){
		$button = "Simpan";
		$aksi = "mhs_aksi.php?op=tambah";
		$nim = "";
		$nama = "";
		$tempatlahir = "";
		$tanggallahir = "";
		$nomorhp = "";
		$jurusan = "";
	}

	elseif($_GET['aksi'] == 'ubah'){
		$button = "Ubah";
		$aksi = "mhs_aksi.php?op=ubah";
		include ("koneksi.php");
		$query = mysqli_query($link,"SELECT * FROM tbl_mahasiswa WHERE nim = '$_GET[id]'");
		$row = mysqli_fetch_array($query);
		$nim = $row['nim'];
		$nama = $row['nama'];
		$tempatlahir = $row['tp_lahir'];
		$tanggallahir = $row['tg_lahir'];
		$nomorhp = $row['no_hp'];
		$jurusan = $row['jurusan'];
	}

 ?>

<section class='content'>
  <div class='row'>
	<div class='col-xs-12'>
	  <div class='box'>
		<div class='box-header'>
		  <h3 class='box-title'>FORM DATA MAHASISWA</h3>
		</div>
		<div class='box box-primary'>
			<form action="<?= $aksi ?>" method="post">
				<table class='table table-bordered'>
				<tr>
					<td style = "width:20%;">NIM</td>
					<td>
						<input type="text" class="form-control" name="nim" id="nim" 
						placeholder="masukkan NIM" value="<?= $nim ?>" />
					</td>
				</tr>
				<tr>
					<td >Nama</td>
					<td>
						<input type="text" class="form-control" name="nama" id="nama" 
						placeholder="masukkan nama lengkap" value="<?=$nama?>" />
					</td>
				</tr>
				<tr>
					<td >Tempat Lahir</td>
					<td>
						<input type="text" class="form-control" name="tempatlahir" id="tempatlahir" 
						placeholder="masukkan tempat lahir" value="<?=$tempatlahir?>" />
					</td>
				</tr>
				<tr>
					<td >Tanggal Lahir</td>
					<td>
						<div class="input-group date col-xs-4 tanggal" data-date="1997-06-21" >
						<input type="text" readonly="" class="form-control" name="tanggallahir" id="tanggallahir" 
						placeholder="yyyy-mm-dd" value="<?=$tanggallahir?>" />
						<div class="input-group-addon">
							<span class="add-on"><i class="fa fa-calendar"></i></span>
						</div>
					</div>
					</td>
				</tr>
				<tr>
					<td >No. HP</td>
					<td>
						<input type="text" class="form-control" name="nomorhp" id="nomorhp" 
						placeholder="+628**********" value="<?=$nomorhp?>" />
					</td>
				</tr>
				<tr>
					<td >Jurusan</td>
					<td>
						<input type="text" class="form-control" name="jurusan" id="jurusan" 
						placeholder="Sistem Informasi/Teknik Informatika/Sistem Komputer" value="<?=$jurusan?>" />
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<button type="submit" class="btn btn-primary"><?=$button?></button>
						<a href="index.php?m=mahasiswa" class="btn btn-default">Batal</a>
					</td>
				</tr>
				</table>
			</form>
		</div><!-- /.box-body -->
	  </div><!-- /.box -->
	</div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
