<?php
if(isset($_POST['tambah'])){
	$id_jaksa=$_POST['id_jaksa'];
	$Hasil_Konsultasi=$_POST['hasil_konsultasi'];
	$P_17=$_POST['P_17'];
	$P_18=$_POST['P_18'];
	$isipetunjuk=$_POST['isipetunjuk'];
	$P_22=$_POST['P_22'];
	$Penyelesaia=$_POST['Penyelesaia'];

	$q=mysqli_query($koneksi,"insert into `Pra Penuntut` values (null, $id_jaksa,'$Hasil_Konsultasi','$P_17','$P_18','$isipetunjuk','$P_22','$Penyelesaia')");
	
	if($q){
		?><script>alert('SUKSES\n\nData berhasil diinput');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal diinput');</script><?php
	}
	?><script>location.href='?page=Pra Penuntut';</script><?php
}
?>
 
	<h2>DATA PRA PENUNTUT</h2>
	<br/>
	<form method="POST" action="">
		<div class="form-group">
            <label for="nama">Jaksa</label>
            <select id="nama" name="id_jaksa" class="form-control" >
                <option value="">- Pilih -</option>
                <?php
                $q=mysqli_query($koneksi,"select * from jaksa");
                while($h=mysqli_fetch_array($q)){
                    ?><option value="<?php echo $h['id_jaksa']; ?>"><?php echo $h['Nama_jaksa']; ?></option><?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Hasil_konsultasi</label>
            <input type="text" id="nama" name="hasil_konsultasi" class="form-control" placeholder="Hasil_konsultasi" />
        </div>
        <div class="form-group">
            <label for="nama">P_17</label>
            <input type="text" id="nama" name="P_17" class="form-control" placeholder="P-17" />
        </div>
        <div class="form-group">
            <label for="nama">P_18</label>
            <input type="text" id="nama" name="P_18" class="form-control" placeholder="P_18" />
        </div>
        <div class="form-group">
            <label for="nama">isipetunjuk</label>
            <input type="text" id="nama" name="isipetunjuk" class="form-control" placeholder="isipetunjuk" />
        </div>
        <div class="form-group">
            <label for="nama">P_22</label>
            <input type="text" id="nama" name="P_22" class="form-control" placeholder="P_22" />
        </div>
        <div class="form-group">
            <label for="nama">Penyelesaia</label>
            <input type="text" id="nama" name="Penyelesaia" class="form-control" placeholder="Penyelesaia" />
        </div>
    
        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Pra Penuntut'">Batal</button>
	</form>
