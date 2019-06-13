<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             DATA UPAYA HUKUM
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Jaksa</th>
                                            <th>Jabatan</th>
                                            <th>Golongan</th>
                                            <th>Tersangka</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>

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

                                     <td>
                                            <a href="?page=upayahukum&aksi=ubah&id=<?php echo $data['id']; ?>" class = "btn btn-info">ubah</a>
                                            <a href="?page=upayahukum&aksi=hapus&id=<?php echo $data['id']; ?>" class = "btn btn-danger">hapus</a>
                                        </td>
                                    </tr>

                                    <?php } ?>
</tbody></table>
<a href="?page=upayahukum&aksi=tambah" class="btn btn-success"
style="color: white; margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa-plus"></i> TAMBAH DATA </a>
<a href="page/upayahukum/cetak_pdf.php" target ="blank" class="btn btn-default"
style="margin: 5px 8px;  font-size: 14px;"><i
 class="fa fa-print"></i>cetak</a></a>
</div>
</div>
</div>
</div>
</div>
<footer>
      <center><p>Kejaksaan Negeri Kapuas &copy; 2019</p></center>
      <!--<p class="pull-right">Powered by:</p>-->
    </footer>
