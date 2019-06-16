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
<caption>LAPORAN DATA TERSANGKA</caption>
<thead>
<tr>
<th>No</th>
                                            <th>Nama Tersangka</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>pekerjaan</th>
                                            <th>status</th>
                                            <th>pasal tersangka</th>
</tr>
 </thead>
 <tbody>
<?php
    if (isset($_GET['jkel']) && (!empty($_GET['jkel']) || !empty($_GET['status'])) || !empty($_GET['pasal_tersangka'])) {
        $query = "select * from tersangka WHERE ";
        if (!empty($_GET['jkel']) && !empty($_GET['status']) && !empty($_GET['pasal_tersangka'])) {
            $query .= " jk='$_GET[jkel]' AND status='$_GET[status]' AND pasal_tersangka='$_GET[pasal_tersangka]' ";
        } elseif (!empty($_GET['jkel']) && !empty($_GET['pasal_tersangka'])) {
            $query .= " jk='$_GET[jkel]' ";
            $query .= " AND ";
            $query .= " pasal_tersangka='$_GET[pasal_tersangka]' ";
        } elseif (!empty($_GET['status']) && !empty($_GET['pasal_tersangka'])) {
            $query .= " status='$_GET[status]' ";
            $query .= " AND ";
            $query .= " pasal_tersangka='$_GET[pasal_tersangka]' ";
        } elseif (!empty($_GET['jkel'])) {
            $query .= " jk='$_GET[jkel]' ";
        } elseif (!empty($_GET['status'])) {
            $query .= " status='$_GET[status]' ";
        } elseif (!empty($_GET['pasal_tersangka'])) {
            $query .= " pasal_tersangka='$_GET[pasal_tersangka]' ";
        }
        $sql = mysqli_query($koneksi, $query);
    } else {
        $sql = mysqli_query($koneksi, "select * from tersangka");
    }
    $No = 1;
    while ($data=mysqli_fetch_array($sql)) {
        ?>
                                    <tr>
                                     <td><?php echo $No++; ?></td>
                                        <td><?php echo $data["nama_tersangka"]; ?></td>
                                        <td><?php echo $data["tempat_lahir"]; ?></td>
                                        <td><?php echo $data["TTL"]; ?></td>
                                        <td><?php echo $data["jk"]; ?></td>
                                        <td><?php echo $data["agama"]; ?></td>
                                        <td><?php echo $data["alamat"]; ?></td>
                                        <td><?php echo $data["pekerjaan"]; ?></td>
                                        <td><?php echo $data["status"]; ?></td>
                                        <td><?php echo $data["pasal_tersangka"]; ?></td>



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
