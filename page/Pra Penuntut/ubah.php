<?php
if (isset($_POST['ubah'])) {
    $id_pra=$_GET['id'];
    $id_jaksa=$_POST['id_jaksa'];
    $Hasil_Konsultasi=$_POST['Hasil_konsultasi'];
    $Isi_Konsultasi=$_POST['Isi_Konsultasi'];
    $P_17=$_POST['P_17'];
    $P_18=$_POST['P_18'];
    $isipetunjuk=$_POST['isipetunjuk'];
    $P_21=$_POST['P_21'];
    $P_22=$_POST['P_22'];
    $Penyelesai=$_POST['Penyelesai'];


    $q=mysqli_query($koneksi, "update pra_penuntut set id_jaksa='$id_jaksa', Hasil_konsultasi='$Hasil_Konsultasi',
														Isi_Konsultasi='$Isi_Konsultasi', P_17='$P_17', P_18='$P_18', isipetunjuk = '$isipetunjuk',
														P_21='$P_21',P_22='$P_22',Penyelesai = '$Penyelesai' WHERE id_pra ='$id_pra'");
    if ($q) {
        ?><script>alert('SUKSES\n\nData berhasil diperbaharui');</script><?php
    } else {
        ?><script>alert('ERROR!\n\nData gagal diperbaharui');</script><?php
    } ?>
		<script>location.href='?page=Pra Penuntut';</script>
		<?php
}

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$q=mysqli_query($koneksi,"select * from pra_penuntut where id_pra=$id");
	$h=mysqli_fetch_array($q);
}
?>

	<h2>DATA PRA PENUNTUT</h2>
	<br/>
	<form method="POST" action="">
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
            <label for="nama">Hasil_konsultasi</label>
            <input type="text" id="nama" name="Hasil_konsultasi" class="form-control" value ="<?php echo $h['Hasil_konsultasi'];?>" />
        </div>
				<div class="form-group">
						<label for="nama">Isi_konsultasi</label>
						<input type="text" id="nama" name="Isi_Konsultasi" class="form-control" value ="<?php echo $h['Isi_Konsultasi'];?>" />
				</div>
        <div class="form-group">
            <label for="nama">P_17</label>
            <input type="text" id="nama" name="P_17" class="form-control" value ="<?php echo $h['P_17'];?>" />
        </div>
        <div class="form-group">
            <label for="nama">P_18</label>
            <input type="text" id="nama" name="P_18" class="form-control"value ="<?php echo $h['P_18'];?>" />
        </div>
        <div class="form-group">
            <label for="nama">isipetunjuk</label>
            <input type="text" id="nama" name="isipetunjuk" class="form-control" value ="<?php echo $h['isipetunjuk'];?>" />
        </div>
        <div class="form-group">
            <label for="nama">P_21</label>
            <input type="text" id="nama" name="P_21" class="form-control" value ="<?php echo $h['P_21'];?>" />
        </div>
				<div class="form-group">
            <label for="nama">P_22</label>
            <input type="text" id="nama" name="P_22" class="form-control" value ="<?php echo $h['P_22'];?>" />
        </div>
				<div class="form-group">
						<label for="nama">Penyelesai</label>
						<input type="text" id="nama" name="Penyelesai" class="form-control" value ="<?php echo $h['Penyelesai'];?>" />
				</div>

        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Pra Penuntut'">Batal</button>
	</form>
