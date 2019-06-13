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
<caption>LAPORAN DATA BARANG BUKTI</caption>
<thead>
<tr>

                                          <th>No</th>
                                          <th>No Regis</th>
                                          <th>Nama Barang Bukti</th>
                                          <th>Jumlah</th>
                                          <th>Satuan</th>
                                          <th>Pemilik</th>
                                          <th>Tanggal Eksekusi</th>

 </thead>
 <tbody>
<?php
                                        $sql = mysqli_query ($koneksi,"select * from barang_bukti");
                                        $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                     <td><?php echo $data["No_regis"];?></td>
                                        <td><?php echo $data["namabarangbukti"];?></td>
                                        <td><?php echo $data["jumlah"];?></td>
                                        <td><?php echo $data["satuan"];?></td>
                                        <td><?php echo $data["pemilik"];?></td>
                                        <td><?php echo $data["tgl_eksekusi"];?></td>

                                    </tr>

<?php } ?>


 </tbody>
 </table>
 <br>
<input type ="button" class ="noPrint" value="cetak" onclick="window.print()">
