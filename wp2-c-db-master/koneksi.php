<?php
$conn_str = "host=john.db.elephantsql.com " .
    "port=5432 " .
    "user=qgjiepsd " .
    "dbname=qgjiepsd " .
    "password=Z46_Juz1Hj54Qnwa1LC4ocfmQ6y6d0vC";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?>