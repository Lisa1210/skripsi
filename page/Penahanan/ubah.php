<?php
if(isset($_POST['ubah'])){
		$id=$_GET['id'];
		$id_tersangka=$_POST['id_tersangka'];
    $penahanan_penyidik=$_POST['penahanan_penyidik'];
    $penahanan_kejari=$_POST['penahanan_kejari'];
    $penahanan_JPU=$_POST['penahanan_JPU'];
    $penahanan_MH=$_POST['penahanan_MH'];
    $penahanan_PN=$_POST['penahanan_PN'];

	$q=mysqli_query($koneksi,"update penahanan set id_tersangka='$id_tersangka',penahanan_penyidik='$penahanan_penyidik',
														penahanan_kejari='$penahanan_kejari',penahanan_JPU='$penahanan_JPU',
														penahanan_MH='$penahanan_MH',penahanan_PN='$penahanan_PN' where id=$id");

	if($q){
		?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
	}
	?><script>location.href='?page=Penahanan';</script><?php
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$q=mysqli_query($koneksi,"select * from penahanan where id=$id");
	$h=mysqli_fetch_array($q);
}
?>

	<h2>DATA TERSANGKA</h2>
	<br/>
	<form method="POST" action="">
			<div class="form-group">
      <label for="nama">Tersangka</label>
			<select id="nama" name="id_tersangka" class="form-control" >
					<?php
					$q=mysqli_query($koneksi, "select * from tersangka");
					while ($b=mysqli_fetch_array($q)) {
							?>
							<option value="<?php echo $b['id_tersangka']; ?>"
								<?php
								if($b['id_tersangka'] == $h['id_tersangka']){
									echo "selected";
								}
								?>
							><?php echo $b['nama_tersangka']; ?></option>
							<?php
					}
					?>
			</select>
        </div>
        <div class="form-group">
            <label for="nama">Penahanan Penyidik</label>
            <input type="text" id="nama" name="penahanan_penyidik" class="form-control"value="<?php echo $h['penahanan_penyidik']; ?>" />
        <div class="form-group">
            <label for="nama">Penahanan Kejari</label>
            <input type="text" id="nama" name="penahanan_kejari" class="form-control" value="<?php echo $h['penahanan_kejari']; ?>" />
        <div class="form-group">
            <label for="nama">Penahanan JPU</label>
            <input type="text" id="nama" name="penahanan_JPU" class="form-control" value="<?php echo $h['penahanan_JPU']; ?>" />
        <div class="form-group">
            <label for="nama">Penahanan MH</label>
            <input type="text" id="nama" name="penahanan_MH" class="form-control" value="<?php echo $h['penahanan_MH']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Penahanan PN</label>
            <input type="text" id="nama" name="penahanan_PN" class="form-control" value="<?php echo $h['penahanan_PN']; ?>" />
        </div>



        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Penahanan'">Batal</button>
	</form>
