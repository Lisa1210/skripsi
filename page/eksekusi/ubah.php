<?php
if(isset($_POST['ubah'])){
	$nama=$_POST['nama'];
    $putusan=$_POST['putusan'];
    $amar=$_POST['amar_putusan'];
    $masapercobaan=$_POST['masa_percobaan'];
    $pidanabadan=$_POST['pidana_badan'];
    $denda=$_POST['denda'];
    $biayaperkara=$_POST['biaya_perkara'];
	$q=mysqli_query($koneksi,"update eksekusi set nama='$nama',putusan='$putusan',amar='$amar_putusan',
        masapercobaan='$masa_percobaan',pidanabadan='$pidana_badan=denda='$denda', biayaperkara='$biaya_perkara' where id_tersangka=$id");
	
	if($q){
		?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
	}
	?><script>location.href='?page=eksekusi';</script><?php
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$q=mysqli_query($koneksi,"select * from eksekusi where id_tersangka=$id");
	$h=mysqli_fetch_array($q);
}
?>
 
	<h2>DATA EKSEKUSI</h2>
	<br/>
	<form method="POST" action="">
		<input type="hidden" name="id" value="<?php echo $h['id_tersangka']; ?>" />
		<div class="form-group">
            <label for="nama">Nama jaksa</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $h['nama_jaksa']; ?>" />
        </div>
        
        <div class="form-group">
            <label for="nama">Putusan</label>
            <input type="text" id="nama" name="putusan" class="form-control" value="<?php echo $h['putusan']; ?>" />
        </div>
         <div class="form-group">
            <label for="nama">amar</label>
            <input type="text" id="nama" name="amar_putusan" class="form-control" value="<?php echo $h['amar_putusan']; ?>" />
        </div>
         <div class="form-group">
            <label for="nama">masa</label>
            <input type="text" id="nama" name="masa_percobaan" class="form-control" value="<?php echo $h['masa_percobaan']; ?>" />
        </div>
         <div class="form-group">
            <label for="nama">Pidanabadana</label>
            <input type="text" id="nama" name="pidana_badan" class="form-control" value="<?php echo $h['pidana_badan']; ?>" />
        </div>
         <div class="form-group">
            <label for="nama">denda</label>
            <input type="text" id="nama" name="denda" class="form-control" value="<?php echo $h['denda']; ?>" />
        </div>
         <div class="form-group">
            <label for="nama">biayaperkara</label>
            <input type="text" id="nama" name="biaya_perkara" class="form-control" value="<?php echo $h['biaya_perkara']; ?>" />
        </div>
        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=eksekusi'">Batal</button>
	</form>
