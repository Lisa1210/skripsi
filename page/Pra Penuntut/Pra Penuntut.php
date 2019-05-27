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
                                            <th>id_Jaksa</th>
                                            <th>Hasil_Konsultasi</th>
                                            <th>P_17</th>
                                            <th>P_18</th>
                                            <th>isipetunjuk</th>
                                            <th>P_22</th>
                                            <th>Penyelesaia</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                   
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from `pra penuntut`");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id_jaksa"];?></td>
                                        <td><?php echo $data["Hasil_Konsultasi"];?></td>
                                        <td><?php echo $data["P_17"];?></td>
                                        <td><?php echo $data["P_18"];?></td>
                                        <td><?php echo $data["isipetunjuk"];?></td>
                                        <td><?php echo $data["P_22"];?></td>
                                        <td><?php echo $data["Penyelesaia"];?></td>

                                        
                                     <td>
                                            <a href=""class = "btn btn-info">ubah</a>
                                            <a href=""class = "btn btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                     
<?php } ?>
</tbody></table>
<a href="?page=Pra Penuntut&aksi=tambah" class="btn btn-success"
style="color: white; margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa-plus"></i> TAMBAH DATA </a>
<a href="./laporan/laporan_PRA_exel.php "class="btn btn-default"
style="margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa plus"></i>Export To Excel </a>
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
