<?php
if(isset($_POST['ubah'])){
    $id=$_POST['id'];
   $nama=$_POST['nama'];
    $NIP=$_POST['NIP'];
    $Jabatan=$_POST['Jabatan'];
    $golongan=$_POST['golongan'];
    

    $q=mysqli_query($koneksi,"update Jaksa set nama_jaksa='$nama',NIP='$NIP',Jabatan='$Jabatan' where id_jaksa=$id");
    
    if($q){
        ?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
    }else{
        ?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
    }
    ?><script>location.href='?page=Jaksa';</script><?php
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $q=mysqli_query($koneksi,"select * from Jaksa where id_jaksa=$id");
    $h=mysqli_fetch_array($q);
}
?>
 
    <h2>DATA JAKSA</h2>
    <br/>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $h['id_jaksa']; ?>" />
        <div class="form-group">
            <label for="nama">Nama Jaksa</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $h['nama_jaksa']; ?>" />
        </div>
       
        <div class="form-group">
            <label for="nama">NIP</label>
            <input type="text" id="nama" name="NIP" class="form-control" value="<?php echo $h['NIP']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">Jabatan</label>
            <input type="text" id="nama" name="jabatan" class="form-control" value="<?php echo $h['jabatan']; ?>" />
        </div>
        <div class="form-group">
            <label for="nama">golongan</label>
            <input type="text" id="nama" name="golongan" class="form-control" value="<?php echo $h['golongan']; ?>" />
        </div>
       


        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=Jaksa'">Batal</button>
    </form>