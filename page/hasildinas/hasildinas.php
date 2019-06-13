<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             DATA HASIL DINAS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tersangka</th>
                                            <th>Hasil Dinas</th>
                                            <th>Setor</th>
                                            <th>No_SSBP</th>
                                            <th>Tanggal Setor</th>
                                            <th>Amar Putusan </th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>

<?php
                                        $sql = mysqli_query ($koneksi,"select hasil_dinas.*, tersangka.nama_tersangka from hasil_dinas
                                                                        LEFT JOIN tersangka ON hasil_dinas.id_tersangka = tersangka.id_tersangka");
                                         $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["nama_tersangka"];?></td>
                                        <td><?php echo $data["hasil_dinas"];?></td>
                                        <td><?php echo $data["setor"];?></td>
                                        <td><?php echo $data["no_ssbp"];?></td>
                                        <td><?php echo $data["tanggal_setor"];?></td>
                                        <td><?php echo $data["amar_putusan"];?></td>
                                     <td>
                                            <a href="?page=hasildinas&aksi=ubah&id=<?php echo $data['id']; ?>" class = "btn btn-info">ubah</a>
                                            <a href="?page=hasildinas&aksi=hapus&id=<?php echo $data['id']; ?>" class = "btn btn-danger">hapus</a>
                                        </td>
                                    </tr>

<?php } ?>
</tbody></table>
<a href="?page=hasildinas&aksi=tambah" class="btn btn-success"
style="color: white; margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa-plus"></i> TAMBAH DATA </a>
<a href="page/hasildinas/cetak_pdf.php" target ="blank" class="btn btn-default"
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
