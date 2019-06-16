<?php
include "../../koneksi.php";
require_once '../../assets/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

if (isset($_POST['pdf'])) {
    $dompdf = new Dompdf();
    $html =file_get_contents("$_POST[link]");
    $html = substr($html, 0, strpos($html, '<div class="noPrint">'));
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream();
} else {
 ?>

 <style>
@media print{
	.noPrint{
		display: none;
	}
}

 </style>
<table border ="1" width="100%" style="border-collapse:collapse;">
<caption>LAPORAN DATA EKSEKUSI</caption>
<thead>
<tr>
 <th>No</th>
 <th>Tersangka</th>
 <th>Jaksa</th>
 <th>putusan</th>
 <th>amar putusan</th>
 <th>masa percobaan</th>
 <th>pidana badan</th>
 <th>denda</th>
 <th>Biaya Perkara</th>

</tr>
 </thead>
 <tbody>
<?php
                                        $sql = mysqli_query ($koneksi,"select eksekusi.*, tersangka.nama_tersangka, jaksa.Nama_jaksa from eksekusi
                                                                       LEFT JOIN tersangka ON eksekusi.id_tersangka = tersangka.id_tersangka
                                                                       LEFT JOIN jaksa ON eksekusi.id_jaksa = jaksa.id_jaksa");
                                         $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                     <td><?php echo $data["nama_tersangka"];?></td>
                                     <td><?php echo $data["Nama_jaksa"];?></td>
                                     <td><?php echo $data["putusan"];?></td>
                                     <td><?php echo $data["amar_putusan"];?></td>
                                     <td><?php echo $data["masa_percobaan"];?></td>
                                     <td><?php echo $data["pidana_badan"];?></td>
                                     <td><?php echo $data["denda"];?></td>
                                      <td><?php echo $data["biaya_perkara"];?></td>


                                    </tr>

                                    <?php
                                        } ?>

                                     </tbody>
                                     </table>
                                     <?php
                                     $link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
                                     <br>
                                    <div class="noPrint">
                                    <form method="POST" action="">
                                      <input type ="button" value="Cetak Printer" onclick="window.print()">
                                      <input type ="hidden" name="link" value="<?php echo $link; ?>">
                                      <input type ="submit" name="pdf" value="Export PDF">
                                    </form>
                                    </div>
                                    <?php
                                    } ?>
