<section class='content'>
  <div class='row'>
	<div class='col-xs-12'>
	  <div class='box'>
		<div class='box-header'>
		  <h3 class='box-title'>DATA MAHASISWA</h3>
		  <a href="index.php?m=mahasiswa_form&aksi=tambah" class="btn btn-success btn-sm ">Tambah</a>
		</div><!-- /.box-header -->
		<div class='box-body'>
		<table class="table table-bordered table-striped" id="mytable">
			<thead>
				<tr>
					<th>NIM</th>
					<th>NAMA</th>
					<th>TEMPAT LAHIR</th>
					<th>TANGGAL LAHIR</th>
					<th>NO. HP</th>
					<th>JURUSAN</th>
					
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include ("koneksi.php");
				$qr = mysqli_query($link, "SELECT * FROM tbl_mahasiswa");
				while($row = mysqli_fetch_array($qr, MYSQLI_ASSOC)) {
				 ?>
				
				<tr>
					<td><?php echo $row['nim']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['tp_lahir']; ?></td>
					<td><?php echo $row['tg_lahir']; ?></td>
					<td><?php echo $row['no_hp']; ?></td>
					<td><?php echo $row['jurusan']; ?></td>
					
					<td style="text-align:center" width="140px">
							<a href="index.php?m=mahasiswa_form&aksi=ubah&id=<?php echo $row['nim']; ?>" title="ubah" class="btn btn-primary btn-sm">
								<i class="fa fa-pencil-square-o"></i> Ubah
							</a>  
							<a href="mhs_aksi.php?op=delete&id=<?php echo $row ['nim']; ?>" title="delete" class="btn btn-danger btn-sm" 
							onclick="javasciprt: return confirm('Apakah Anda Yakin ?')">
								<i class="fa fa-trash-o"></i> Hapus
							</a>		    
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<script src="template/js/jquery-1.11.2.min.js"></script>
		<script src="template/datatables/jquery.dataTables.js"></script>
		<script src="template/datatables/dataTables.bootstrap.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$("#mytable").dataTable();
			});
		</script>
		</div><!-- /.box-body -->
	  </div><!-- /.box -->
	</div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->