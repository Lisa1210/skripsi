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
<caption>LAPORAN DATA UPAYA HUKUM</caption>
<thead>
<tr>
 <th>No</th>
 <th>NIP</th>
 <th>Jaksa</th>
 <th>Jabatan</th>
 <th>Golongan</th>
 <th>Tersangka</th>
</tr>
 </thead>
 <tbody>
<?php
                                        $sql = mysqli_query ($koneksi,"select upaya_hukum.*, jaksa.nama_jaksa, tersangka.nama_tersangka from upaya_hukum
                                                                       LEFT JOIN jaksa ON upaya_hukum.id_jaksa = jaksa.id_jaksa
                                                                       LEFT JOIN tersangka ON upaya_hukum.id_tersangka = tersangka.id_tersangka");
                                         $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                     <td><?php echo $data["NIP"];?></td>
                                      <td><?php echo $data["nama_jaksa"];?></td>
                                     <td><?php echo $data["Jabatan"];?></td>
                                     <td><?php echo $data["golongan"];?></td>
                                     <td><?php echo $data["nama_tersangka"];?></td>
                                    </tr>

<?php } ?>


 </tbody>
 </table>
 <br>
<input type ="button" class ="noPrint" value="cetak" onclick="window.print()">
