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
<caption>LAPORAN DATA PENUNTUTAN</caption>
<thead>
<tr>
<th>No</th>
                                            <th>id Jaksa</th>
                                            <th>Nama Jaksa</th>
                                            <th> No Regis</th>
                                            <th>No Tanggal Penerimaan BB</th>  
</tr>
 </thead>
 <tbody>
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from penuntut");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id_jaksa"];?></td>
                                        <td><?php echo $data["Nama_jaksa"];?></td>
                                        <td><?php echo $data["No_regis"];?></td>
                                        <td><?php echo $data["No_Tanggal Penerimaan BB"];?></td>
                                    
                                    </tr>
                                  
<?php } ?>

 </tbody>
 </table>
 <br>
<input type ="button" class ="noPrint" value="cetak" onclick="window.print()">

       