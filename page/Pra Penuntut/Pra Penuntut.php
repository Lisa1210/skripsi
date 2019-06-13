<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             DATA PRA PENUNTUT
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                            <th>aksi</th>
                                        </tr>
                                    </thead>

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


                                     <td>
                                            <a href="?page=Pra Penuntut&aksi=ubah&id=<?php echo $data['id_pra']; ?>" class = "btn btn-info">ubah</a>
                                            <a href="?page=Pra Penuntut&aksi=hapus&id=<?php echo $data['id_pra']; ?>" class = "btn btn-danger">hapus</a>
                                        </td>
                                    </tr>

<?php } ?>
</tbody></table>
<a href="?page=Pra Penuntut&aksi=tambah" class="btn btn-success"
style="color: white; margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa-plus"></i> TAMBAH DATA </a>
<a href="page/Pra Penuntut/cetak_pdf.php" target ="blank" class="btn btn-default"
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
