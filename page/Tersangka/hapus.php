<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$q=mysqli_query($koneksi,"delete from tersangka where id_tersangka=$id");
	if($q){
		?><script>alert('SUKSES\n\nData berhasil di hapus');</script><?php
	}else{
		?><script>alert('ERROR!\n\nData gagal di hapus');</script><?php
	}
	?><script>location.href='?page=Tersangka';</script><?php
}
?>