<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             DATA JAKSA
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jaksa</th>
                                            <th>NIP</th>
                                            <th>Jabatan</th>
                                            <th>Golongan</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                   
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from jaksa");
                                        $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {
                                          
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["Nama_jaksa"];?></td>
                                        <td><?php echo $data["NIP"];?></td>
                                        <td><?php echo $data["Jabatan"];?></td>
                                        <td><?php echo $data["golongan"];?></td>
                                        
                                      <td>
                                            <a href="?page=Jaksa&aksi=ubah&id=<?php echo $data['id_jaksa']; ?>" class = "btn btn-info">ubah</a>
                                            <a href="?page=Jaksa&aksi=hapus&id=<?php echo $data['id_jaksa']; ?>" class = "btn btn-danger">hapus</a>   
                                                
                                        </td>
                                    </tr>
                                     
<?php } ?>
</tbody></table>
<a href="?page=Jaksa&aksi=tambah" class="btn btn-success"
style="color: white; margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa-plus"></i> TAMBAH DATA </a>
<a href="./laporan/laporan_jaksa_exel.php "class="btn btn-default"
style="margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa plus"></i>Export To Excel </a>
<a href="page/Jaksa/cetak_pdf.php" target ="blank" class="btn btn-default"
style="margin: 5px 8px;  font-size: 14px;"><i
 class="fa fa-print"></i>cetak</a>
</div>
</div>
</div>
</div>
</div>
</div>
<footer>
      <center><p>Kejaksaan Negeri Kapuas &copy; 2019</p></center>
      <!--<p class="pull-right">Powered by:</p>-->
    </footer>   