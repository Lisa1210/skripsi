<?php
$koneksi = mysqli_connect("localhost", "root", "", "_www.kejaksaan-kapuas.com");
if (mysqli_connect_errno()) {
    echo "koneksi database gagal:".mysqli_connect_error();
}
