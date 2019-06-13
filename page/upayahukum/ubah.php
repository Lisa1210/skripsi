<?php
if(isset($_POST['ubah'])){
    $id=$_GET['id'];
    $NIP=$_POST['NIP'];
    $id_jaksa=$_POST['id_jaksa'];
    $Jabatan=$_POST['Jabatan'];
    $golongan=$_POST['golongan'];
    $id_tersangka=$_POST['id_tersangka'];

    $q=mysqli_query($koneksi,"update upaya_hukum set NIP='$NIP',id_jaksa='$id_jaksa',
                              Jabatan='$Jabatan', golongan = '$golongan', id_tersangka = '$id_tersangka'
                              where id=$id");

    if($q){
        ?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
    }else{
        ?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
    }
    ?><script>location.href='?page=upayahukum';</script><?php
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $q=mysqli_query($koneksi,"select * from upaya_hukum where id=$id");
    $h=mysqli_fetch_array($q);
}
?>

    <h2>DATA UPAYA HUKUM</h2>
    <br/>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $h['id_jaksa']; ?>" />
        <div class="form-group">
            <label for="nama">NIP</label>
            <input type="text" id="nama" name="NIP" class="form-control" value="<?php echo $h['NIP']; ?>" />
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
            <label for="Jabatan">Jabatan</label>
            <select name="Jabatan" id="Jabatan" class="form-control">
                <option value="">- Pilih -</option>
                <option value="Ajun Jaksa Madya" <?php echo ($h['Jabatan']=='Ajun Jaksa Madya')?'selected':''; ?> >Ajun Jaksa Madya</option>
                <option value="Ajun Jaksa" <?php echo ($h['Jabatan']=='Ajun Jaksa')?'selected':''; ?> >Ajun Jaksa</option>
                <option value="Jaksa Pratama" <?php echo ($h['Jabatan']=='Jaksa Pratama')?'selected':''; ?> >Jaksa Pratama</option>
                <option value="Jaksa Muda" <?php echo ($h['Jabatan']=='Jaksa Muda')?'selected':''; ?> >Jaksa Muda</option>
                 <option value="Jaksa Madya" <?php echo ($h['Jabatan']=='Jaksa Madya')?'selected':''; ?> >Jaksa Madya</option>
                <option value="Jaksa Utama Pratama" <?php echo ($h['Jabatan']=='Jaksa Utama Pratama')?'selected':''; ?> >Jaksa Utama Pratama</option>
                 <option value="Jaksa Utama Madya" <?php echo ($h['Jabatan']=='Jaksa Utama Madya')?'selected':''; ?> >Jaksa Utama Madya</option>
                <option value="Jaksa Utama" <?php echo ($h['Jabatan']=='Jaksa Utama')?'selected':''; ?> >Jaksa Utama</option>
            </select>
        </div>
       <div class="form-group">
            <label for="nama">golongan</label>
            <select name="golongan" id="golongan" class="form-control">
                <option value="">- Pilih -</option>
                <option value="III/a" <?php echo ($h['golongan']=='III/a')?'selected':'';?>>III/a</option>
                <option value="III/b" <?php echo ($h['golongan']=='III/b')?'selected':'';?>>III/b</option>
                <option value="III/c" <?php echo ($h['golongan']=='III/c')?'selected':'';?>>III/c</option>
                <option value="III/d" <?php echo ($h['golongan']=='III/d')?'selected':'';?>>III/d</option>
                <option value="IV/a" <?php echo ($h['golongan']=='IV/a')?'selected':'';?>>IV/a</option>
                <option value="IV/b" <?php echo ($h['golongan']=='IV/b')?'selected':'';?>>IV/b</option>
                <option value="IV/c" <?php echo ($h['golongan']=='IV/c')?'selected':'';?>>IV/c</option>
                <option value="IV/d" <?php echo ($h['golongan']=='IV/d')?'selected':'';?>>IV/d</option>
                <option value="IV/e" <?php echo ($h['golongan']=='IV/e')?'selected':'';?>>IV/e</option>
            </select>
        </div>
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

        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=upayahukum'">Batal</button>
    </form>
