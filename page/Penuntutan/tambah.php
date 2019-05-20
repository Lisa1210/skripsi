<?php
if(isset($_POST['tambah'])){
                                          
    $idjaksa=$_POST['id_jaksa'];
	$nama=$_POST['nama'];
    $no_regis=$_POST['no_regis'];
	$No_Tanggal_Penerimaan_BB=date('Y-m-d',strtotime($_POST['ttl']));

	$q=mysqli_query($koneksi,"insert into penuntut values (null, '$id_jaksa','$nama','$no_regis','$No_Tanggal_Penerimaan_BB')");
	
	if($q){
		?><script>alert('SUKSES\n\nData berhasil diinput');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal diinput');</script><?php
	}
	?><script>location.href='?page=Penuntutan';</script><?php
}
?>
 
	<h2>DATA PENUNTUTAN</h2>
	<br/>
	<form method="POST" action="">
    <div class="form-group">
            <label for="id">id jaksa</label>
            <input type="text" id="id_jaksa" name="id_jaksa" class="form-control" placeholder="id_jaksa" />
        </div>
		<div class="form-group">
            <label for="nama">Nama jaksa</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama_jaksa" />
        </div>
        <div class="form-group">
            <label for="nama">No registrasi</label>
             <input type="text" id="nama" name="nama" class="form-control" placeholder="No_regis" />
        </div>
        <div class="form-group">
            <label for="nama">Tanggal Penerimaan Barang Bukti</label>
            <input type="text" id="datetimepicker1" name="No_Tanggal_Penerimaan_BB" class="form-control" />
        </div>
        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Penuntutan'">Batal</button>
	</form>
