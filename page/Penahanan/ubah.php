<?php
if(isset($_POST['ubah'])){
	$id=$_POST['id'];
	$id_tersangka=$_POST['id_tersangka'];
    $penahanan_penyidik=$_POST['penahanan_penyidik'];
    $penahanan_kejari=$_POST['penahanan_kejari'];
    $penahanan_JPU=$_POST['penahanan_JPU'];
    $penahanan_MH=$_POST['penahanan_MH'];
    $penahanan_PN=$_POST['penahanan_PN'];

	$q=mysqli_query($koneksi,"update Penahanan set id_tersangka='$id_tersangka',penahanan_PN='$penahanan_PN',penahanan_kejari='$penahanan_kejari',penahanan_JPU='$penahanan_JPU',penahanan_MH='$penahanan_MH',penahanan_PN='$penahanan_PN' where id_tersangka=$id");
	
	if($q){
		?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
	}
	?><script>location.href='?page=Penahanan';</script><?php
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$q=mysqli_query($koneksi,"select * from Penahanan where id_tersangka=$id");
	$h=mysqli_fetch_array($q);
}
?>
 
	<h2>DATA TERSANGKA</h2>
	<br/>
	<form method="POST" action="">

      <label for="nama">id Tersangka</label>
            <input type="text" id="nama" name="id_Tersangka" class="form-control" value="<?php echo $h['id_tersangka']; ?>" />
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
            <input type="text" id="nama" name="penahanan_MH" class="form-control" value="<?php echo $h['penahanan_mh']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Penahanan PN</label>
            <input type="text" id="nama" name="penahanan_PN" class="form-control" value="<?php echo $h['penahanan_PN']; ?>" />
        </div>
		


        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Penahanan'">Batal</button>
	</form>
