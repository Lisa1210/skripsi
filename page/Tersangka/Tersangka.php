

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              DATA TERSANGKA
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Tersangka</th>
                                            <th>Tanggal Lahir</th>                                      
                                            <th>Jenis Kelamin</th>              
                                            <th>Agama</th>                                           
                                            <th>Alamat</th>
                                            <th>pekerjaan</th>
                                            <th>status</th>
                                            <th>pasal tersangka</th>                                   
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                   <tbody>
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from tersangka");
                                        $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {
                                          
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["nama_tersangka"];?></td>
                                        <td><?php echo $data["TTL"];?></td>                                   
                                        <td><?php echo $data["jk"];?></td>
                                        <td><?php echo $data["agama"];?></td>
                                        <td><?php echo $data["alamat"];?></td>
                                        <td><?php echo $data["pekerjaan"];?></td>                                                             
                                        <td><?php echo $data["status"];?></td>
                                        <td><?php echo $data["pasal_tersangka"];?></td>
                                    

                                        <td>
                                            <a href="?page=Tersangka&aksi=ubah&id=<?php echo $data['id_tersangka']; ?>" class = "btn btn-info">ubah</a>
                                            <a href="?page=Tersangka&aksi=hapus&id=<?php echo $data['id_tersangka']; ?>" class = "btn btn-danger">hapus</a>   
                                                
                                        </td>
                                    </tr>
                                     
<?php } ?>



</tbody></table>

<a href="?page=Tersangka&aksi=tambah" class="btn btn-success"
style="color: white; margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa-plus"></i> TAMBAH DATA </a>
<a href="./laporan/laporan_tersangka_exel.php "class="btn btn-default"
style="margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa plus"></i>Export To Excel </a>
<a href="./laporan/laporan_tersangka_pdf.php "class="btn btn-default"
style="margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa plus"></i>Export To pdf </a>

</div>
</div>
</div>
</div>
</div>

<footer>
      <center><p>Kejaksaan Negeri Kapuas &copy; 2019</p></center>
      <!--<p class="pull-right">Powered by:</p>-->
    </footer>   