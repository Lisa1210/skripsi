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
<caption>LAPORAN DATA PRA PENUNTUT </caption>
<thead>
<tr>
 <th>No</th>
                                            <th>id_Jaksa</th>
                                            <th>Hasil_Konsultasi</th>
                                            <th>isi_konsultasi</th>
                                            <th>P_17</th>
                                            <th>P_18</th>
                                            <th>isipetunjuk</th>
                                            <th>P_22</th>
                                            <th>Penyelesaia</th>
</tr>
 </thead>
 <tbody>
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from pra penuntut");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id_jaksa"];?></td>
                                        <td><?php echo $data["Hasil_Konsultasi"];?></td>
                                        <td><?php echo $data["isi_konsultasi"];?></td>
                                        <td><?php echo $data["P_17"];?></td>
                                        <td><?php echo $data["P_18"];?></td>
                                        <td><?php echo $data["isipetunjuk"];?></td>
                                        <td><?php echo $data["P_22"];?></td>
                                        <td><?php echo $data["Penyelesaia"];?></td>

                                        
                                   
                                    </tr>
                                     
<?php } ?>

 </tbody>
 </table>
 <br>
<input type ="button" class ="noPrint" value="cetak" onclick="window.print()">

       