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
                                            <th>Tersangka</th>
                                            <th>Jaksa</th>
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
                                        $sql = mysqli_query ($koneksi,"select eksekusi.*, tersangka.nama_tersangka, jaksa.Nama_jaksa from eksekusi
                                                                       LEFT JOIN tersangka ON eksekusi.id_tersangka = tersangka.id_tersangka
                                                                       LEFT JOIN jaksa ON eksekusi.id_jaksa = jaksa.id_jaksa");
                                        $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {


                                        ?>
                                    <tr>
                                     <td><?php echo $No++;?></td>
                                        <td><?php echo $data["nama_tersangka"];?></td>
                                        <td><?php echo $data["Nama_jaksa"];?></td>
                                        <td><?php echo $data["putusan"];?></td>
                                        <td><?php echo $data["amar_putusan"];?></td>
                                        <td><?php echo $data["masa_percobaan"];?></td>
                                        <td><?php echo $data["pidana_badan"];?></td>
                                        <td><?php echo $data["denda"];?></td>
                                         <td><?php echo $data["biaya_perkara"];?></td>


                                     <td>
                                            <a href="?page=eksekusi&aksi=ubah&id=<?php echo $data['id']; ?>" class = "btn btn-info">ubah</a>
                                            <a href="?page=eksekusi&aksi=hapus&id=<?php echo $data['id']; ?>" class = "btn btn-danger">hapus</a>
                                        </td>
                                    </tr>

<?php } ?>
</tbody></table>
<a href="?page=eksekusi&aksi=tambah" class="btn btn-success"
style="color: white; margin: 5px 8px;  font-size: 14px;"><i
class ="fa fa-plus"></i> TAMBAH DATA </a>
<a href="page/eksekusi/cetak_pdf.php" target ="blank" class="btn btn-default"
style="margin: 5px 8px;  font-size: 14px;"><i
 class="fa fa-print"></i>cetak</a>
</div>
</div>
</div>
</div>
</div>
