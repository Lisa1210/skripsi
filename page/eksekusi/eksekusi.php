<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             DATA EKSEKUSI
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>id tersangka</th>
                                            <th>Nama Jaksa</th>
                                            <th>putusan</th>
                                            <th>amar putusan</th>
                                            <th>masa percobaan</th>
                                            <th>pidana badan</th>
                                            <th>denda</th>
                                            <th>Biaya Perkara</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                   
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from eksekusi");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["id_tersangka"];?></td>
                                        <td><?php echo $data["Nama_jaksa"];?></td>
                                        <td><?php echo $data["putusan"];?></td>
                                        <td><?php echo $data["amar_putusan"];?></td>
                                        <td><?php echo $data["masa_percobaan"];?></td>
                                        <td><?php echo $data["pidana_badan"];?></td>
                                        <td><?php echo $data["denda"];?></td>
                                         <td><?php echo $data["biaya perkara"];?></td>

                                        
                                     <td>
                                            <a href=""class = "btn btn-info">ubah</a>
                                            <a href=""class = "btn btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                     
<?php } ?>
</tbody></table>
<a href="?page=eksekusi&aksi=tambah" class="btn btn-success"
style="color: white; margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa-plus"></i> TAMBAH DATA </a>
<a href="./laporan/laporan_penuntutan_exel.php "class="btn btn-default"
style="margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa plus"></i>Export To Excel </a>
<a href="./laporan/laporan_penuntutan_pdf.php "class="btn btn-default"
style="margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa plus"></i>Export To pdf </a>
</div>
</div>
</div>
</div>
</div>


