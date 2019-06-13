<?php
if(isset($_POST['tambah'])){
	$nama_jaksa=$_POST['Nama_jaksa'];
	$nip=$_POST['NIP'];
	$Jabatan=$_POST['Jabatan'];
	$golongan=$_POST['golongan'];


	$q=mysqli_query($koneksi,"insert into jaksa values (null, '$nama_jaksa','$nip','$Jabatan','$golongan')");

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
            <input type="text" id="nama" name="Nama_jaksa" class="form-control" placeholder="nama_jaksa" />
            </div>
        <div class="form-group">
            <label for="nama">NIP</label>
            <input type="text" id="nama" name="NIP" class="form-control" placeholder="NIP" />
        </div>
        <div class="form-group">
            <label for="Jabatan">Jabatan</label>
            <select name="Jabatan" id="Jabatan" class="form-control">
            	<option value="">- Pilih -</option>
            	<option value="Ajun Jaksa Madya">Ajun Jaksa Madya</option>
            	<option value="Ajun Jaksa">Ajun Jaksa</option>
            	<option value="Jaksa Pratama">Jaksa Pratama</option>
            	<option value="Jaksa Muda">Jaksa Muda</option>
            	<option value="Jaksa Madya">Jaksa Madya</option>
            	<option value="Jaksa Utama Pratama">Jaksa Utama Pratama</option>
                <option value="Jaksa Utama Madya">Jaksa Utama Madya</option>
                <option value="Jaksa Utama">Jaksa Utama</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nama">golongan</label>
            <select name="golongan" id="golongan" class="form-control">
                <option value="">- Pilih -</option>
                <option value="III/a">III/a</option>
                <option value="III/b">III/b</option>
                <option value="III/c">III/c</option>
                <option value="III/d">III/d</option>
                <option value="IV/a">IV/a</option>
                <option value="IV/b">IV/b</option>
                <option value="IV/c">IV/c</option>
                <option value="IV/d">IV/d</option>
                <option value="IV/e">IV/d</option>
            </select>
        </div>

        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Jaksa'">Batal</button>
	</form>
