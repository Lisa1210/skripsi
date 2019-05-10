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
                                            <th>id tersangka</th>
                                            <th> Penahanan Penyidik</th>
                                            <th>Penahanan Kejari</th>
                                            <th>Penahanan JPU</th>
                                            <th>Penahanan MH</th>
                                            <th>Penahanan PN </th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                   
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from Penahanan");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id_tersangka"];?></td>
                                        <td><?php echo $data["penahanan_penyidik"];?></td>
                                        <td><?php echo $data["penahanan_kejari"];?></td>
                                        <td><?php echo $data["penahanan_JPU"];?></td>
                                        <td><?php echo $data["penahanan_MH"];?></td>
                                        <td><?php echo $data["penahanan_PN"];?></td>
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

