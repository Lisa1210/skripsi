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
