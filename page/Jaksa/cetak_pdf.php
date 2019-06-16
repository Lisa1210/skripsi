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
                                        $sql = mysqli_query($koneksi, "select * from jaksa");
    $No = 1;
    while ($data=mysqli_fetch_array($sql)) {
        ?>
                                    <tr>
                                     <td><?php echo $No++; ?></td>
                                        <td><?php echo $data["Nama_jaksa"]; ?></td>
                                        <td><?php echo $data["NIP"]; ?></td>
                                        <td><?php echo $data["Jabatan"]; ?></td>
                                        <td><?php echo $data["golongan"]; ?></td>


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
