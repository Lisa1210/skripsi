<?php
if(isset($_POST['ubah'])){
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$ttl=date('Y-m-d',strtotime($_POST['ttl']));
	$jk=$_POST['jk'];
	$agama=$_POST['agama'];
	$alamat=$_POST['alamat'];
	$pekerjaan=$_POST['pekerjaan'];
	$status=$_POST['status'];
	$pasal=$_POST['pasal'];

	$q=mysqli_query($koneksi,"update tersangka set nama_tersangka='$nama',TTL='$ttl',jk='$jk',agama='$agama',alamat='$alamat',pekerjaan='$pekerjaan',status='$status',pasal_tersangka='$pasal' where id_tersangka=$id");
	
	if($q){
		?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
	}
	?><script>location.href='?page=Tersangka';</script><?php
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$q=mysqli_query($koneksi,"select * from tersangka where id_tersangka=$id");
	$h=mysqli_fetch_array($q);
}
?>
 
	<h2>DATA TERSANGKA</h2>
	<br/>
	<form method="POST" action="">
		<input type="hidden" name="id" value="<?php echo $h['id_tersangka']; ?>" />
		<div class="form-group">
            <label for="nama">Nama Tersangka</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $h['nama_tersangka']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Tanggal Lahir</label>
            <input type="text" id="datetimepicker1" name="ttl" class="form-control" value="<?php echo date('d-m-Y',strtotime($h['TTL'])); ?>" />
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-control">
            	<option value="">- Pilih -</option>
            	<option value="Laki-Laki" <?php echo ($h['jk']=='Laki-Laki')?'selected':''; ?> >Laki-Laki</option>
            	<option value="Perempuan" <?php echo ($h['jk']=='Perempuan')?'selected':''; ?> >Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Agama</label>
            <select name="agama" id="agama" class="form-control">
                <option value="">- Pilih -</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen Protestan</option>
                <option value="Kristen">Kristen Katolik</option>
                <option value="Kristen">Hindu</option>
                <option value="Kristen">Budhha</option>

            </select>
        <div class="form-group">
            <label for="nama">Alamat</label>
            <input type="text" id="nama" name="alamat" class="form-control" value="<?php echo $h['alamat']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Pekerjaan</label>
            <input type="text" id="nama" name="pekerjaan" class="form-control" value="<?php echo $h['pekerjaan']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="">- Pilih -</option>
                <option value="pernah dihukum">pernah dihukum</option>
                <option value="belum pernah dihukum">belum pernah dihukum</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Pasal Tersangka</label>
            <input type="text" id="nama" name="pasal" class="form-control" value="<?php echo $h['pasal_tersangka']; ?>" />
        </div>
        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=BarangBukti'">Batal</button>
	</form>
