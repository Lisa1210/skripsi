<?php
include "../../koneksi.php";
 ?>

 <style>
@media print{
	input.noPrint{
		display: none;
	}
}

 </style>
<table border ="1" width="100%" style="border-collapse:collapse;">
<caption>LAPORAN DATA TERSANGKA</caption>
<thead>
<tr>
<th>No</th>
                                            <th>Nama Tersangka</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>pekerjaan</th>
                                            <th>status</th>
                                            <th>pasal tersangka</th>
</tr>
 </thead>
 <tbody>
<?php
                                        $sql = mysqli_query ($koneksi,"select * from tersangka");
                                        $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["nama_tersangka"];?></td>
                                        <td><?php echo $data["tempat_lahir"];?></td>
                                        <td><?php echo $data["TTL"];?></td>
                                        <td><?php echo $data["jk"];?></td>
                                        <td><?php echo $data["agama"];?></td>
                                        <td><?php echo $data["alamat"];?></td>
                                        <td><?php echo $data["pekerjaan"];?></td>
                                        <td><?php echo $data["status"];?></td>
                                        <td><?php echo $data["pasal_tersangka"];?></td>



                                    </tr>

<?php } ?>


 </tbody>
 </table>
 <br>
<input type ="button" class ="noPrint" value="cetak" onclick="window.print()">
