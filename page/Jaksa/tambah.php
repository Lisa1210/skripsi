<?php
if(isset($_POST['tambah'])){
	$nama=$_POST['nama'];
	$NIP=$_POST['NIP'];
	$Jabatan=$_POST['Jabatan'];
	$golongan=$_POST['golongan'];
	

	$q=mysqli_query($koneksi,"insert into Jaksa values (null, '$nama','$NIP','$Jabatan','$golongan')");
	
	if($q){
		?><script>alert('SUKSES\n\nData berhasil diinput');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal diinput');</script><?php
	}
	?><script>location.href='?page=Jaksa';</script><?php
}
?>
 
	<h2>DATA JAKSA</h2>
	<br/>
	<form method="POST" action="">
		<div class="form-group">
            <label for="nama">Nama Jaksa</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="nama_jaksa" />
        <div class="form-group">
            <label for="nama">NIP</label>
            <input type="text" id="nama" name="NIP" class="form-control" placeholder="NIP" />
        </div>
        <div class="form-group">
            <label for="nama">Jabatan</label>
            <input type="text" id="nama" name="Jabatan" class="form-control" placeholder="Jabatan" />
        </div>

        <div class="form-group">
            <label for="nama">golongan</label>
            <input type="text" id="nama" name="golongan" class="form-control" placeholder="golongan" />
        </div>
        <div class="form-group">
            <label for="golongan">golongan</label>
            <select name="golongan" id="golongan" class="form-control">
            	<option value="">- Pilih -</option>
            	<option value="Laki-Laki">Laki-Laki</option>
            	<option value="Perempuan">Perempuan</option>
            </select>
        </div>
        
        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Jaksa'">Batal</button>
	</form>
