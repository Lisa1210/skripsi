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
<caption>LAPORAN DATA PENAHANAN</caption>
<thead>
<tr>

                                             <th>No</th>
                                             <th>Tersangka</th>
                                             <th>Penahanan Penyidik</th>
                                             <th>Penahanan Kejari</th>
                                             <th>Penahanan JPU</th>
                                             <th>Penahanan MH</th>
                                             <th>Penahanan PN </th>
</tr>
 </thead>
 <tbody>
<?php
                                        $sql = mysqli_query ($koneksi,"select penahanan.*, tersangka.nama_tersangka from penahanan LEFT JOIN tersangka ON penahanan.id_tersangka = tersangka.id_tersangka");
                                         $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                     <td><?php echo $data["nama_tersangka"];?></td>
                                     <td><?php echo $data["penahanan_penyidik"];?></td>
                                     <td><?php echo $data["penahanan_kejari"];?></td>
                                     <td><?php echo $data["penahanan_JPU"];?></td>
                                     <td><?php echo $data["penahanan_MH"];?></td>
                                     <td><?php echo $data["penahanan_PN"];?></td>

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
