<?php
if(isset($_POST['tambah'])){
	$id_tersangka=$_POST['id_tersangka'];
	$hasil_dinas=$_POST['hasil_dinas'];
	$setor=$_POST['setor'];
	$no_ssbp=$_POST['no_ssbp'];
  $tanggal_setor=date('Y-m-d',strtotime($_POST['tanggal_setor']));
	$amar_putusan=$_POST['amar_putusan'];


	$q=mysqli_query($koneksi,"insert into hasil_dinas values (null, '$id_tersangka','$hasil_dinas','$setor',
																														'$no_ssbp','$tanggal_setor','$amar_putusan')");

	if($q){
		?><script>alert('SUKSES\n\nData berhasil diinput');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal diinput');</script><?php
	}
	?><script>location.href='?page=hasildinas';</script><?php
}
?>

	<h2>DATA HASIL DINAS</h2>
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
            <label for="nama">Hasil DInas</label>
            <input type="text" id="nama" name="hasil_dinas" class="form-control" placeholder="hasil_dinas" />
        </div>
       <div class="form-group">
            <label for="nama">setor</label>
            <input type="text" id="nama" name="setor" class="form-control" placeholder="setor" />
        </div>
        <div class="form-group">
            <label for="nama">no_ssbp</label>
            <input type="text" id="nama" name="no_ssbp" class="form-control" placeholder="no_ssbp" />
        </div>
        <div class="form-group">
            <label for="nama">tanggal Setor</label>
            <input type="text" id="datetimepicker1" name="tanggal_setor" class="form-control" />
        </div>
        <div class="form-group">
            <label for="nama">amar putusan</label>
            <input type="text" id="nama" name="amar_putusan" class="form-control" placeholder="amar_putusan" />
        </div>

        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=hasildinas'">Batal</button>
	</form>
