<?php
if(isset($_POST['ubah'])){
		$id=$_GET['id'];
		$No_regis=$_POST['No_regis'];
    $nama=$_POST['namabarangbukti'];
    $jumlah=$_POST['jumlah'];
    $satuan=$_POST['satuan'];
    $pemilik=$_POST['pemilik'];
    $tgl_eksekusi=date('Y-m-d',strtotime($_POST['tgl_eksekusi']));

    $q=mysqli_query($koneksi,"update barang_bukti set No_regis='$No_regis',namabarangbukti='$nama',jumlah='$jumlah',
															satuan='$satuan',pemilik='$pemilik', tgl_eksekusi = '$tgl_eksekusi' where id=$id");

	if($q){
		?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
	}
	?><script>location.href='?page=BarangBukti';</script><?php
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$q=mysqli_query($koneksi,"select * from barang_bukti where id=$id");
	$h=mysqli_fetch_array($q);
}
?>

	<h2>DATA BARANG BUKTI</h2>
	<br/>
	<form method="POST" action="">
				<div class="form-group">
						<label for="nama">No registrasi</label>
						<input type="text" id="nama" name="No_regis" class="form-control" value="<?php echo $h['No_regis']; ?>" />
				</div>
				<div class="form-group">
            <label for="nama">Nama Barang Bukti</label>
            <input type="text" id="nama" name="namabarangbukti" class="form-control" value="<?php echo $h['namabarangbukti']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">jumlah</label>
            <input type="text" id="nama" name="jumlah" class="form-control" value="<?php echo $h['jumlah']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Satuan</label>
            <input type="text" id="nama" name="satuan" class="form-control" value="<?php echo $h['satuan']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Pemilik</label>
            <input type="text" id="nama" name="pemilik" class="form-control" value="<?php echo $h['pemilik']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Tanggal Eksekusi</label>
            <input type="text" id="datetimepicker1" name="tgl_eksekusi" class="form-control" value="<?php echo date('d-m-Y',strtotime($h['tgl_eksekusi'])); ?>" />
        </div>
        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=BarangBukti'">Batal</button>
	</form>
