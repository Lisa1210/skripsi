<?php
if(isset($_POST['ubah'])){
	$id=$_GET['id'];
	$nama=$_POST['nama'];
	$regis=$_POST['No_regis'];
	$tanggal= date('Y-m-d',strtotime($_POST['No_tanggal']));

	$q=mysqli_query($koneksi,"update penuntut set nama='$nama',No_regis='$regis',No_tanggal='$tanggal' where id=$id");

	if($q){
		?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
	}
	?><script>location.href='?page=Penuntutan';</script><?php
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$q=mysqli_query($koneksi,"select * from penuntut where id=$id");
	$h=mysqli_fetch_array($q);
}
?>

	<h2>DATA Penuntutan</h2>
	<br/>
	<form method="POST" action="">
		<div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $h['nama']; ?>" />
        </div>
				<div class="form-group">
						<label for="nama">No Regis</label>
						<input type="text" id="no" name="No_regis" class="form-control" value="<?php echo $h['No_regis']; ?>" />
				</div>
        <div class="form-group">
            <label for="nama">Tanggal Penerimaan BB</label>
            <input type="text" id="datetimepicker1" name="No_tanggal" class="form-control" value="<?php echo date('d-m-Y',strtotime($h['No_tanggal'])); ?>" />
        </div>
        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Penuntutan'">Batal</button>
	</form>
