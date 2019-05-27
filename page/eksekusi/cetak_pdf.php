<?php 
$koneksi = mysqli_connect("localhost", "root","","Simkari");
if (mysqli_connect_errno()){
    echo "koneksi database gagal:".mysqli_connect_error();
}
 ?>

 <style>
@media print{
	input.noPrint{
		display: none;
	}
}

 </style>
<table border ="1" width="100%" style="border-collapse:collapse;">
<caption>LAPORAN DATA EKSEKUSI</caption>
<thead>
<tr>
 <th>No</th>
                                            <th>id tersangka</th>
                                            <th>Nama Jaksa</th>
                                            <th>putusan</th>
                                            <th>amar putusan</th>
                                            <th>masa percobaan</th>
                                            <th>pidana badan</th>
                                            <th>denda</th>
                                            <th>Biaya Perkara</th>
                                          
</tr>
 </thead>
 <tbody>
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from eksekusi");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id_tersangka"];?></td>
                                        <td><?php echo $data["Nama_jaksa"];?></td>
                                        <td><?php echo $data["putusan"];?></td>
                                        <td><?php echo $data["amar_putusan"];?></td>
                                        <td><?php echo $data["masa_percobaan"];?></td>
                                        <td><?php echo $data["pidana_badan"];?></td>
                                        <td><?php echo $data["denda"];?></td>
                                         <td><?php echo $data["biaya perkara"];?></td>

                                 
                                    </tr>
                                     
<?php } ?>

 </tbody>
 </table>
 <br>
<input type ="button" class ="noPrint" value="cetak" onclick="window.print()">

       