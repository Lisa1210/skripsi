<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             DATA BARANG BUKTI
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang Bukti</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Pemilik</th>
                                            <th>Tanggal Eksekusi</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                   
<?php 
                                        $sql = mysqli_query ($koneksi,"select * from barang_bukti");
                                        while ($data=mysqli_fetch_array($sql)) {
                                        $No = 1;  
                                
                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["namabarangbukti"];?></td>
                                        <td><?php echo $data["jumlah"];?></td>
                                        <td><?php echo $data["satuan"];?></td>
                                        <td><?php echo $data["pemilik"];?></td>
                                        <td><?php echo $data["tgl_eksekusi"];?></td>
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