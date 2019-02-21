<title>Tambah Data</title>
<h5 class="blue-text">Tambah Data Anggota</h2>
<div class="row">
	<form class="col m6 s12" method="post">
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="nama" required />
				<label>Nama</label>
			</div>
		</div>
		<div class="row">
			<label style="margin-left: 10px;">Jenis Kelamin</label>
			<div class="input-field col s12">
				<select class="browser-default" name="jk" required>
					<option value="">- Pilih -</option>
					<option value="laki-laki">Laki-laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<textarea class="materialize-textarea" name="alamat" required></textarea>
				<label>Alamat</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input type="text" name="telp" required />
				<label>No.Telepon</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input type="submit" class="btn orange right" name="tambah" value="Tambah" />
			</div>
		</div>
	</form>
	<?php 
	if(@$_POST['tambah']){
		$nama = @$_POST['nama'];
		$jk = @$_POST['jk'];
		$alamat = @$_POST['alamat'];
		$telp = @$_POST['telp'];
		mysqli_query($db, "insert into tb_anggota(nama, jk, alamat, telp) values ('$nama', '$jk', '$alamat', '$telp')") or die ($db->error);
		header("location:?page=tampil");
	}
	?>
</div>