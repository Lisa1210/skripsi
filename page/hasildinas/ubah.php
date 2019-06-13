<?php
if(isset($_POST['ubah'])){
		$id=$_GET['id'];
		$id_tersangka = $_POST['id_tersangka'];
    $hasil_dinas=$_POST['hasil_dinas'];
    $setor=$_POST['setor'];
    $no_ssbp=$_POST['no_ssbp'];
    $tanggal_setor=date('Y-m-d',strtotime($_POST['tanggal_setor']));
    $amar_putusan=$_POST['amar_putusan'];

	$q=mysqli_query($koneksi,"update hasil_dinas set id_tersangka='$id_tersangka',hasil_dinas='$hasil_dinas',
														setor='$setor',no_ssbp='$no_ssbp',tanggal_setor='$tanggal_setor',
														amar_putusan='$amar_putusan' where id=$id");

	if($q){
		?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
	}
	?><script>location.href='?page=hasildinas';</script><?php
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$q=mysqli_query($koneksi,"select * from hasil_dinas where id=$id");
	$h=mysqli_fetch_array($q);
}
?>

	<h2>DATA HASIL DINAS</h2>
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
								>
									<?php echo $b['nama_tersangka']; ?>
								</option>
								<?php
						}
						?>
				</select>
			</div>
        <div class="form-group">
            <label for="nama">hasil dinas</label>
            <input type="text" id="nama" name="hasil_dinas" class="form-control" value="<?php echo $h['hasil_dinas']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">setor</label>
            <input type="text" id="nama" name="setor" class="form-control" value="<?php echo $h['setor']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">no ssbp</label>
            <input type="text" id="nama" name="no_ssbp" class="form-control" value="<?php echo $h['no_ssbp']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Tanggal setorr</label>
            <input type="text" id="datetimepicker1" name="tanggal_setor" class="form-control" value="<?php echo date('d-m-Y',strtotime($h['tanggal_setor'])); ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Amar putusan</label>
            <input type="text" id="nama" name="amar_putusan" class="form-control" value="<?php echo $h['amar_putusan']; ?>" />
        </div>

        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=hasildinas'">Batal</button>
	</form>
