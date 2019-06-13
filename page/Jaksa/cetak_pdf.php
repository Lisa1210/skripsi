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
<caption>LAPORAN DATA JAKSA</caption>
<thead>
<tr>
<th>No</th>
<th>Nama Jaksa</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Golongan</th>

</tr>
 </thead>
 <tbody>
<?php
                                        $sql = mysqli_query ($koneksi,"select * from jaksa");
                                         $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["Nama_jaksa"];?></td>
                                        <td><?php echo $data["NIP"];?></td>
                                        <td><?php echo $data["Jabatan"];?></td>
                                        <td><?php echo $data["golongan"];?></td>


                                    </tr>

<?php } ?>
 </tbody>
 </table>
 <br>
 <input type ="button" class ="noPrint" value="cetak" onclick="window.print()">
