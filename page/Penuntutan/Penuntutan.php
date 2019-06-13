<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             DATA PENUNTUT
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>id</th>
                                            <th>Nama</th>
                                            <th>No Regis</th>
                                            <th>No Tanggal Penerimaan BB</th>

                                            <th>aksi</th>
                                        </tr>
                                    </thead>

<?php
                                        $sql = mysqli_query ($koneksi,"select * from penuntut");
                                         $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id"];?></td>
                                        <td><?php echo $data["nama"];?></td>
                                        <td><?php echo $data["No_regis"];?></td>
                                        <td><?php echo $data["No_tanggal"];?></td>
                                     <td>
                                            <a href="?page=Penuntutan&aksi=ubah&id=<?php echo $data['id']; ?>" class = "btn btn-info">ubah</a>
                                            <a href="?page=Penuntutan&aksi=hapus&id=<?php echo $data['id']; ?>" class = "btn btn-danger">hapus</a>
                                        </td>
                                    </tr>

<?php } ?>
</tbody></table>


<a href="?page=Penuntutan&aksi=tambah" class="btn btn-success"
style="color: white; margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa-plus"></i> TAMBAH DATA </a>
<a href="page/Penuntutan/cetak_pdf.php" target ="blank" class="btn btn-default"
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
