<?php
if(isset($_POST['tambah'])){
    $NIP=$_POST['NIP'];
    $id_jaksa=$_POST['id_jaksa'];
    $Jabatan=$_POST['Jabatan'];
    $golongan=$_POST['golongan'];
    $id_tersangka=$_POST['id_tersangka'];


    $q=mysqli_query($koneksi,"insert into upaya_hukum values (null, '$NIP','$id_jaksa','$Jabatan','$golongan','$id_tersangka')");

    if($q){
        ?><script>alert('SUKSES\n\nData berhasil diinput');</script><?php
    }else{
        ?><script>alert('ERROR!\n\nData gagal diinput');</script><?php
    }
    ?><script>location.href='?page=upayahukum';</script><?php
}
?>

    <h2>DATA JAKSA</h2>
    <br/>
    <form method="POST" action="">

        <div class="form-group">
            <label for="nama">NIP</label>
            <input type="text" id="nama" name="NIP" class="form-control" placeholder="NIP" />
        </div>
        <div class="form-group">
            <label for="nama">Jaksa</label>
            <select id="nama" name="id_jaksa" class="form-control" >
                <option value="">- Pilih -</option>
                <?php
                $q=mysqli_query($koneksi,"select * from jaksa");
                while($h=mysqli_fetch_array($q)){
                    ?><option value="<?php echo $h['id_jaksa']; ?>"><?php echo $h['id_jaksa']." - ".$h['Nama_jaksa']; ?></option><?php
                }
                ?>
            </select>
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
        <button type="submit" name="tambah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=upayahukum'">Batal</button>
    </form>
