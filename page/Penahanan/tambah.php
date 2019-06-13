<?php
if(isset($_POST['tambah'])){
	$id_tersangka=$_POST['id_tersangka'];
  $penahanan_penyidik=$_POST['penahanan_penyidik'];
	$penahanan_kejari=$_POST['penahanan_kejari'];
	$penahanan_JPU=$_POST['penahanan_JPU'];
	$penahanan_MH=$_POST['penahanan_MH'];
	$penahanan_PN=$_POST['penahanan_PN'];


	$q=mysqli_query($koneksi,"insert into penahanan values (null, '$id_tersangka','$penahanan_penyidik',
																													'$penahanan_kejari','$penahanan_JPU',
																													'$penahanan_MH','$penahanan_PN')");

	if($q){
		?><script>alert('SUKSES\n\nData berhasil diinput');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal diinput');</script><?php
	}
	?><script>location.href='?page=Penahanan';</script><?php
}
?>

	<h2>DATA PENAHANAN</h2>
	<br/>
	<form method="POST" action="">
				<div class="form-group">
        <label for="nama">Tersangka</label>
				<select id="nama" name="id_tersangka" class="form-control" >
						<option value="">- Pilih -</option>
						<?php
						$q=mysqli_query($koneksi,"select * from tersangka");
						while($h=mysqli_fetch_array($q)){
								?><option value="<?php echo $h['id_tersangka']; ?>"><?php echo $h['id_tersangka']." - ".$h['nama_tersangka']; ?></option><?php
						}
						?>
				</select>
        </div>
        <div class="form-group">
            <label for="nama">Penahanan Penyidik</label>
            <input type="text" id="nama" name="penahanan_penyidik" class="form-control" placeholder="penahanan_penyidik" />
        </div>
        <div class="form-group">
            <label for="nama">Penahanan Kejari</label>
            <input type="text" id="nama" name="penahanan_kejari" class="form-control" placeholder="penahanan_kejari" />
        </div>
        <div class="form-group">
            <label for="nama">Penahanan JPU</label>
            <input type="text" id="nama" name="penahanan_JPU" class="form-control" placeholder="penahanan_JPU" />
        </div>
        <div class="form-group">
            <label for="nama">Penahanan MH</label>
            <input type="text" id="nama" name="penahanan_MH" class="form-control" placeholder="penahanan_MH" />
        </div>
        <div class="form-group">
            <label for="nama">Penahanan PN</label>
            <input type="text" id="nama" name="penahanan_PN" class="form-control" placeholder="penahanan_PN" />
        </div>
        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Penahanan'">Batal</button>
	</form>
