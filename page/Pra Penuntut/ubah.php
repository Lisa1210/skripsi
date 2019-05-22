<?php
if(isset($_POST['ubah'])){
    $id_jaksa=$_POST['id_jaksa'];
    $Hasil_Konsultasi=$_POST['Hasil_konsultasi'];
    $P_17=$_POST['P_17'];
    $P_18=$_POST['P_18'];
    $isipetunjuk=$_POST['isipetunjuk'];
    $P_22=$_POST['P_22'];
    $Penyelesaia=$_POST['Penyelesaia'];

    $q=mysqli_query($koneksi,"update pra penuntut set nama_tersangka='$nama',TTL='$ttl',jk='$jk',agama='$agama',alamat='$alamat',pekerjaan='$pekerjaan',status='$status',pasal_tersangka='$pasal' where id_tersangka=$id");
    
    if($q){
        ?><script>alert('SUKSES\n\nData berhasil di perbaharui');</script><?php
    }else{
        ?><script>alert('ERROR!\n\nData gagal di perbaharui');</script><?php
    }
    ?><script>location.href='?page=Pra penuntut';</script><?php
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $q=mysqli_query($koneksi,"select * from pra penuntut where id_jaksa=$id");
    $h=mysqli_fetch_array($q);
}
?>
 
    <h2>DATA Pra penuntut</h2>
    <br/>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $h['id_jaksa']; ?>" />
        <div class="form-group">
<label for="nama">id_jaksa</label>
            <input type="text" id="nama" name="id_jaksa" class="form-control" value="<?php echo $h['nama_tersangka']; ?>"="id_jaksa" />
        </div>
        <div class="form-group">
            <label for="nama">Hasil_konsultasi</label>
            <input type="text" id="nama" name="hasil_konsultasi" class="form-control" value="<?php echo $h['Hasil_konsultasi']; ?>        </div>
        <div class="form-group">
            <label for="nama">P_17</label>
            <input type="text" id="nama" name="P_17" class="form-control" value="<?php echo $h['P-17']; ?>
        </div>
        <div class="form-group">
            <label for="nama">P_18</label>
            <input type="text" id="nama" name="P_18" class="form-control" value="<?php echo $h['P_18']; ?>
        </div>
        <div class="form-group">
            <label for="nama">isipetunjuk</label>
            <input type="text" id="nama" name="isipetunjuk" class="form-control" value="<?php echo $h['isipetunjuk']; ?>
        </div>
        <div class="form-group">
            <label for="nama">P_22</label>
            <input type="text" id="nama" name="P_22" class="form-control" value="<?php echo $h['P_22']; ?>
        </div>
        <div class="form-group">
            <label for="nama">Penyelesaia</label>
            <input type="text" id="nama" name="Penyelesaia" class="form-control" value="<?php echo $h['Penyelesaia']; ?>
        </div>


           
        <button type="submit" name="ubah" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-danger mb-2" onclick="location.href='?page=pra penuntut'">Batal</button>
    </form>
