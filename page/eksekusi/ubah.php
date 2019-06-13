<?php
if(isset($_POST['ubah'])){
		$id = $_GET['id'];
		$id_jaksa=$_POST['id_jaksa'];
		$id_tersangka=$_POST['id_tersangka'];
    $putusan=$_POST['putusan'];
    $amar=$_POST['amar_putusan'];
    $masapercobaan=$_POST['masa_percobaan'];
    $pidanabadan=$_POST['pidana_badan'];
    $denda=$_POST['denda'];
    $biayaperkara=$_POST['biaya_perkara'];
				$q=mysqli_query($koneksi,"update eksekusi set id_jaksa='$id_jaksa',id_tersangka='$id_tersangka',
																  putusan='$putusan',amar_putusan='$amar',masa_percobaan='$masapercobaan',
																	pidana_badan='$pidanabadan',denda='$denda',biaya_perkara='$biayaperkara'
																	where id=$id");

	if($q){
		?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
	}
	?>
	<script>location.href='?page=eksekusi';</script>
	<?php
}
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$q=mysqli_query($koneksi,"select * from eksekusi where id=$id");
	$h=mysqli_fetch_array($q);
}
?>

	<h2>DATA EKSEKUSI</h2>
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
            <label for="nama">Jaksa</label>
						<select id="nama" name="id_jaksa" class="form-control" >
                <?php
                $q=mysqli_query($koneksi, "select * from jaksa");
                while ($b=mysqli_fetch_array($q)) {
                    ?>
										<option value="<?php echo $b['id_jaksa']; ?>"
											<?php
											if($b['id_jaksa'] == $h['id_jaksa']){
												echo "selected";
											}
											?>
										>
											<?php echo $b['Nama_jaksa']; ?>
										</option>
										<?php
                }
                ?>
            </select>
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
