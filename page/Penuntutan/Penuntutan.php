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
                                            <th>id Jaksa</th>
                                            <th>Nama Jaksa</th>
                                            <th> No Regis</th>
                                            <th>No Tanggal Penerimaan BB</th>

                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                   
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from penuntut");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id_jaksa"];?></td>
                                        <td><?php echo $data["Nama_jaksa"];?></td>
                                        <td><?php echo $data["No_regis"];?></td>
                                        <td><?php echo $data["No_Tanggal Penerimaan BB"];?></td>
                                     <td>
                                            <a href=""class = "btn btn-info">ubah</a>
                                            <a href=""class = "btn btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                  
<?php } ?>
</tbody></table>
</div>
</div>
</div>
</div>
</div>

<footer>
      <center><p>Kejaksaan Negeri Kapuas &copy; 2019</p></center>
      <!--<p class="pull-right">Powered by:</p>-->
    </footer>   
