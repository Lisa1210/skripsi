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
<caption>LAPORAN DATA PENUNTUTAN</caption>
<thead>
<tr>
<th>No</th>
                                            <th>id</th>
                                            <th>Nama</th>
                                            <th> No Regis</th>
                                            <th>No Tanggal Penerimaan BB</th>
</tr>
 </thead>
 <tbody>
<?php
                                        $sql = mysqli_query ($koneksi,"select * from penuntut");
                                        $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id"];?></td>
                                        <td><?php echo $data["nama"];?></td>
                                        <td><?php echo $data["No_regis"];?></td>
                                        <td><?php echo $data["No_tanggal"];?></td>

                                    </tr>

<?php } ?>

 </tbody>
 </table>
 <br>
<input type ="button" class ="noPrint" value="cetak" onclick="window.print()">
