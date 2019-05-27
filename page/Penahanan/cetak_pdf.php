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
<caption>LAPORAN DATA PENAHANAN</caption>
<thead>
<tr>

                                             <th>No</th>
                                            <th>id tersangka</th>
                                            <th> Penahanan Penyidik</th>
                                            <th>Penahanan Kejari</th>
                                            <th>Penahanan JPU</th>
                                            <th>Penahanan MH</th>
                                            <th>Penahanan PN </th>
</tr>
 </thead>
 <tbody>
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from Penahanan");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id_tersangka"];?></td>
                                        <td><?php echo $data["penahanan_penyidik"];?></td>
                                        <td><?php echo $data["penahanan_kejari"];?></td>
                                        <td><?php echo $data["penahanan_JPU"];?></td>
                                        <td><?php echo $data["penahanan_MH"];?></td>
                                        <td><?php echo $data["penahanan_PN"];?></td>
                                    
                                    </tr>
                                     
<?php } ?>


 </tbody>
 </table>
 <br>
<input type ="button" class ="noPrint" value="cetak" onclick="window.print()">

       