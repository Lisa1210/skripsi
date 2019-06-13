<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             DATA PENAHANAN
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tersangka</th>
                                            <th>Penahanan Penyidik</th>
                                            <th>Penahanan Kejari</th>
                                            <th>Penahanan JPU</th>
                                            <th>Penahanan MH</th>
                                            <th>Penahanan PN </th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>

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
                                     <td>
                                            <a href="?page=Penahanan&aksi=ubah&id=<?php echo $data['id']; ?>" class = "btn btn-info">ubah</a>
                                            <a href="?page=Penahanan&aksi=hapus&id=<?php echo $data['id']; ?>" class = "btn btn-danger">hapus</a>
                                        </td>
                                    </tr>

<?php } ?>
</tbody></table>
<a href="?page=Penahanan&aksi=tambah" class="btn btn-success"
style="color: white; margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa-plus"></i> TAMBAH DATA </a>
<a href="page/Penahanan/cetak_pdf.php" target ="blank" class="btn btn-default"
style="margin: 5px 8px;  font-size: 14px;"><i
 class="fa fa-print"></i>cetak</a>
</div>
</div>
</div>
</div>
</div>

<footer>
      <center><p>Kejaksaan Negeri Kapuas &copy; 2019</p></center>
      <!--<p class="pull-right">Powered by:</p>-->
    </footer>
