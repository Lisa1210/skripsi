<?php
if(isset($_POST['tambah'])){
	$No_regis=$_POST['No_regis'];
	$nama=$_POST['namabarangbukti'];
	$jumlah=$_POST['jumlah'];
	$satuan=$_POST['satuan'];
	$pemilik=$_POST['pemilik'];
	$tgl_eksekusi=date('Y-m-d',strtotime($_POST['tgl_eksekusi']));

	$q=mysqli_query($koneksi,"insert into barang_bukti values (null, '$No_regis','$nama','$jumlah','$satuan','$pemilik','$tgl_eksekusi')");

	if($q){
		?><script>alert('SUKSES\n\nData berhasil diinput');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal diinput');</script><?php
	}
	?><script>location.href='?page=BarangBukti';</script><?php
}
?>

	<h2>DATA BARANG BUKTI</h2>
	<br/>
	<form method="POST" action="">
				<div class="form-group">
						<label for="nama">No registrasi</label>
						<input type="text" id="nama" name="No_regis" class="form-control" placeholder="Nomor registrasi" />
				</div>
				<div class="form-group">
            <label for="nama">Nama Barang Bukti</label>
            <input type="text" id="nama" name="namabarangbukti" class="form-control" placeholder="Nama Barang Bukti" />
        </div>
        <div class="form-group">
            <label for="nama">Jumlah</label>
            <input type="text" id="nama" name="jumlah" class="form-control" placeholder="jumlah" />
        </div>
        <div class="form-group">
            <label for="nama">Satuan</label>
            <input type="text" id="nama" name="satuan" class="form-control" placeholder="satuan" />
        </div>
         <div class="form-group">
            <label for="nama">pemilik</label>
            <input type="text" id="nama" name="pemilik" class="form-control" placeholder="pemilik" />
        </div>
        <div class="form-group">
            <label for="nama">Tanggl Eksekusi</label>
            <input type="text" id="datetimepicker1" name="tgl_eksekusi" class="form-control" />
        </div>

        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=BarangBukti'">Batal</button>
	</form>
