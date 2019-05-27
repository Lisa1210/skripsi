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
<caption>LAPORAN DATA BARANG BUKTI</caption>
<thead>
<tr>

                                          <th>No</th>
                                            <th>Nama Barang Bukti</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Pemilik</th>
                                            <th>Tanggal Eksekusi</th>
                                      
 </thead>
 <tbody>
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from barang_bukti");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
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

       