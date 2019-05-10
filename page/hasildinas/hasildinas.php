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
                                            <th>id tersangka</th>
                                            <th>Hasil Dinas</th>
                                            <th>Setor</th>
                                            <th>No_SSBP</th>
                                            <th>Tanggal Setor</th>
                                            <th>Amar Putusan </th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                   
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from hasil_dinas");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id_tersangka"];?></td>
                                        <td><?php echo $data["hasil_dinas"];?></td>
                                        <td><?php echo $data["setor"];?></td>
                                        <td><?php echo $data["no_ssbp"];?></td>
                                        <td><?php echo $data["tanggal_setor"];?></td>
                                        <td><?php echo $data["amar_putusan"];?></td>
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

