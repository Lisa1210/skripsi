<?php
if(isset($_POST['tambah'])){
	$nama=$_POST['nama'];
  $No_regis=$_POST['No_regis'];
	$No_tanggal = date('Y-m-d',strtotime($_POST['No_tanggal']));

	$q=mysqli_query($koneksi,"insert into penuntut values (null,'$nama','$No_regis','$No_tanggal')");

	if($q){
		?><script>alert('SUKSES\n\nData berhasil diinput');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal diinput');</script><?php
	}
	?><script>location.href='?page=Penuntutan';</script><?php
}
?>

	<h2>DATA PENUNTUTAN</h2>
	<br/>
	<form method="POST" action="">
		<div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" />
        </div>
        <div class="form-group">
            <label for="nama">No registrasi</label>
             <input type="text" id="nama" name="No_regis" class="form-control" placeholder="No_regis" />
        </div>
        <div class="form-group">
            <label for="nama">Tanggal Penerimaan Barang Bukti</label>
            <input type="text" id="datetimepicker1" name="No_tanggal" class="form-control" />
        </div>
        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Penuntutan'">Batal</button>
	</form>
