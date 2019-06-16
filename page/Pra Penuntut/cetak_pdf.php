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
<caption>LAPORAN DATA PRA PENUNTUT </caption>
<thead>
<tr>
  <th>No</th>
  <th>Jaksa</th>
  <th>hasil konsultasi</th>
  <th>isi konsultasi</th>
  <th>P_17</th>
  <th>P_18</th>
  <th>isipetunjuk</th>
  <th>P_21</th>
  <th>P_22</th>
  <th>Penyelesai</th>
</tr>
 </thead>
 <tbody>
<?php
                                        $sql = mysqli_query ($koneksi,"select pra_penuntut.*, jaksa.Nama_jaksa FROM pra_penuntut LEFT JOIN jaksa ON pra_penuntut.id_jaksa = jaksa.id_jaksa");
                                        $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                     <td><?php echo $data["Nama_jaksa"];?></td>
                                     <td><?php echo $data["Hasil_konsultasi"];?></td>
                                     <td><?php echo $data["Isi_Konsultasi"];?></td>
                                     <td><?php echo $data["P_17"];?></td>
                                     <td><?php echo $data["P_18"];?></td>
                                     <td><?php echo $data["isipetunjuk"];?></td>
                                     <td><?php echo $data["P_21"];?></td>
                                     <td><?php echo $data["P_22"];?></td>
                                     <td><?php echo $data["Penyelesai"];?></td>

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
