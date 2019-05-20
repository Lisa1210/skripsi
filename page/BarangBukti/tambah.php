<?php
if(isset($_POST['tambah'])){
	$nama=$_POST['nama'];
	$ttl=date('Y-m-d',strtotime($_POST['ttl']));
	$jk=$_POST['jk'];
	$agama=$_POST['agama'];
	$alamat=$_POST['alamat'];
	$pekerjaan=$_POST['pekerjaan'];
	$status=$_POST['status'];
	$pasal=$_POST['pasal'];

	$q=mysqli_query($koneksi,"insert into tersangka values (null, '$nama','$ttl','$jk','$agama','$alamat','$pekerjaan','$status','$pasal')");
	
	if($q){
		?><script>alert('SUKSES\n\nData berhasil diinput');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal diinput');</script><?php
	}
	?><script>location.href='?page=Tersangka';</script><?php
}
?>
 
	<h2>DATA TERSANGKA</h2>
	<br/>
	<form method="POST" action="">
		<div class="form-group">
            <label for="nama">Nama Tersangka</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Tersangka" />
        </div>
        <div class="form-group">
            <label for="nama">Tanggal Lahir</label>
            <input type="text" id="datetimepicker1" name="ttl" class="form-control" />
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-control">
            	<option value="">- Pilih -</option>
            	<option value="Laki-Laki">Laki-Laki</option>
            	<option value="Perempuan">Perempuan</option>
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
        </div>
        <div class="form-group">
            <label for="nama">Alamat</label>
            <input type="text" id="nama" name="alamat" class="form-control" placeholder="Alamat Lengkap" />
        </div>
        <div class="form-group">
            <label for="nama">Pekerjaan</label>
            <input type="text" id="nama" name="pekerjaan" class="form-control" placeholder="Pekerjaan" />
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
            <input type="text" id="nama" name="pasal" class="form-control" placeholder="Pasal Tersangka" />
        </div>
        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=BarangBukti'">Batal</button>
	</form>
