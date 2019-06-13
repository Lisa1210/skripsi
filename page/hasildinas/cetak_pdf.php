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
<caption>LAPORAN DATA HASIL DINAS</caption>
<thead>
<tr>
  <th>No</th>
  <th>Tersangka</th>
  <th>Hasil Dinas</th>
  <th>Setor</th>
  <th>No_SSBP</th>
  <th>Tanggal Setor</th>
  <th>Amar Putusan </th>
</tr>
 </thead>
 <tbody>
<?php
                                        $sql = mysqli_query ($koneksi,"select hasil_dinas.*, tersangka.nama_tersangka from hasil_dinas
                                                                        LEFT JOIN tersangka ON hasil_dinas.id_tersangka = tersangka.id_tersangka");
                                        $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                     <td><?php echo $data["nama_tersangka"];?></td>
                                     <td><?php echo $data["hasil_dinas"];?></td>
                                     <td><?php echo $data["setor"];?></td>
                                     <td><?php echo $data["no_ssbp"];?></td>
                                     <td><?php echo $data["tanggal_setor"];?></td>
                                     <td><?php echo $data["amar_putusan"];?></td>
                                    </tr>

<?php } ?>

 </tbody>
 </table>
 <br>
<input type ="button" class ="noPrint" value="cetak" onclick="window.print()">
