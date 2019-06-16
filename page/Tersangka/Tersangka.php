
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
                                            <th>Tempat_Lahir</th>
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
                                        $sql = mysqli_query($koneksi, "select * from tersangka");
                                        $No = 1;
                                        while ($data=mysqli_fetch_array($sql)) {
                                            ?>
                                    <tr>
                                     <td><?php echo $No++; ?></td>
                                        <td><?php echo $data["nama_tersangka"]; ?></td>
                                         <td><?php echo $data["tempat_lahir"]; ?></td>
                                        <td><?php echo $data["TTL"]; ?></td>
                                        <td><?php echo $data["jk"]; ?></td>
                                        <td><?php echo $data["agama"]; ?></td>
                                        <td><?php echo $data["alamat"]; ?></td>
                                        <td><?php echo $data["pekerjaan"]; ?></td>
                                        <td><?php echo $data["status"]; ?></td>
                                        <td><?php echo $data["pasal_tersangka"]; ?></td>


                                        <td>
                                            <a href="?page=Tersangka&aksi=ubah&id=<?php echo $data['id_tersangka']; ?>" class = "btn btn-info">ubah</a>
                                            <a href="?page=Tersangka&aksi=hapus&id=<?php echo $data['id_tersangka']; ?>" class = "btn btn-danger">hapus</a>

                                        </td>
                                    </tr>

<?php
                                        } ?>



</tbody></table>

<form class="form form-inline" target="_blank" method="get" action="page/Tersangka/cetak_pdf.php">
  <a href="?page=Tersangka&aksi=tambah" class="btn btn-success"><i
  class ="fa fa-plus"></i> TAMBAH DATA </a>
  <div class="form-group">
  <select class="form-control" name="jkel">
    <option value="">--Jenis Kelamin--</option>
    <option>Laki-Laki</option>
    <option>Perempuan</option>
  </select>
  <select class="form-control" name="status">
    <option value="">--Status--</option>
    <option>belum pernah dihukum</option>
    <option>pernah dihukum</option>
  </select>
  <select class="form-control" name="pasal_tersangka">
    <option value="">--Pasal--</option>
    <?php
    $sub = mysqli_query($koneksi, "select pasal_tersangka from tersangka group by pasal_tersangka");
    while ($data=mysqli_fetch_array($sub)) {
        echo "<option>$data[pasal_tersangka]</option>";
    }
     ?>
  </select>
  <button type="submit" class="btn btn-default" style="margin: 5px 8px; font-size: 14px;">
    <i class='fa fa-print'></i> Cetak
  </button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<footer>
      <center><p>Kejaksaan Negeri Kapuas &copy; 2019</p></center>
      <!--<p class="pull-right">Powered by:</p>-->
    </footer>
