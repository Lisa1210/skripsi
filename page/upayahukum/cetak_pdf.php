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
<caption>LAPORAN DATA UPAYA HUKUM</caption>
<thead>
<tr>
 <th>No</th>
                                            <th>NIP</th>
                                            <th>id_jaksa</th>
                                            <th>Jabatan</th>
                                            <th>Golongan</th>
                                         
</tr>
 </thead>
 <tbody>
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from upaya_hukum");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["NIP"];?></td>
                                         <td><?php echo $data["id_jaksa"];?></td>
                                        <td><?php echo $data["Jabatan"];?></td>
                                        <td><?php echo $data["golongan"];?></td>
                                        
                                     
                                        </td>
                                    </tr>
                                     
<?php } ?>


 </tbody>
 </table>
 <br>
<input type ="button" class ="noPrint" value="cetak" onclick="window.print()">

       