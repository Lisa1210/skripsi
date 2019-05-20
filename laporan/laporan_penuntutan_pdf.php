<?php
$koneksi = new mysqli("localhost", "root","","Simkari");
if (mysqli_connect_errno()){
    echo "koneksi database gagal:".mysqli_connect_error();
}
<table border ="1" width ="100px"style ="border-col"
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
                                          
                                        </tr>
                           </thead>
                           <tbody>
                           <tr>
                           <td> data</td>
                           </tr>
                           </tbody>
                           </table>
?>
