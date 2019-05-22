<?php
if(isset($_POST['tambah'])){
	$nama=$_POST['nama'];
	$putusan=$_POST['putusan'];
	$amar=$_POST['amar_putusan'];
	$masapercobaan=$_POST['masa_percobaan'];
	$pidanabadan=$_POST['pidana_badan'];
	$denda=$_POST['denda'];
	$biayaperkara=$_POST['biaya_perkara'];

	$q=mysqli_query($koneksi,"insert into eksekusi values (null, '$nama','$putusan','$amar_putusan','$masa_percobaan','$pidana_badan','$denda','$biaya_perkara')");
	
	if($q){
		?><script>alert('SUKSES\n\nData berhasil diinput');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal diinput');</script><?php
	}
	?><script>location.href='?page=eksekusi';</script><?php
}
?>
 
	<h2>DATA EKSEKUSI</h2>
	<br/>
	<form method="POST" action="">
		<div class="form-group">
            <label for="nama">Nama Jaksa</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama_jaksa" />
        </div>
       
        <div class="form-group">
            <label for="nama">putusan</label>
            <input type="text" id="nama" name="putusan" class="form-control" placeholder="putusan" />
        </div>
        <div class="form-group">
            <label for="nama">amar putusan</label>
            <input type="text" id="nama" name="amar_putusan" class="form-control" placeholder="amar_putusan" />
        </div>
        <div class="form-group">
            <label for="nama">masa percobaan</label>
            <input type="text" id="nama" name="masa_percobaan" class="form-control" placeholder="masa_percobaan" />
        </div>
         <div class="form-group">
            <label for="nama">pidana badan</label>
            <input type="text" id="nama" name="pidana_badan" class="form-control" placeholder="pidana_badan" />
        </div>
         <div class="form-group">
            <label for="nama">denda</label>
            <input type="text" id="nama" name="denda" class="form-control" placeholder="denda" />
        </div>
         <div class="form-group">
            <label for="nama">biaya perkara</label>
            <input type="text" id="nama" name="biaya_perkara" class="form-control" placeholder="biaya_perkara" />
        </div>
        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=eksekusi'">Batal</button>
	</form>
