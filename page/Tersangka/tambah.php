
CTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA </h2>
	<br/>
	<a href="tambah.php">+ TAMBAH TERSANGKA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
		<th>No</th>
 		<th>Nama Tersangka</th>
		<th>Tanggal Lahir</th>                                      
	 	<th>Jenis Kelamin</th>              
 		<th>Agama</th>                                           
 		<th>Alamat</th>
 		<th>pekerjaan</th>
 		 <th>status</th>
  		<th>pasal tersangka</th>   
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tersangka");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $No++;?></td>
                                        <td><?php echo $data["nama_tersangka"];?></td>
                                        <td><?php echo $data["TTL"];?></td>                                   
                                        <td><?php echo $data["jk"];?></td>
                                        <td><?php echo $data["agama"];?></td>
                                        <td><?php echo $data["alamat"];?></td>
                                        <td><?php echo $data["pekerjaan"];?></td>                                                             
                                        <td><?php echo $data["status"];?></td>
                                        <td><?php echo $data["pasal_tersangka"];?></td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
