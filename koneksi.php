<?php
$conn_str ="host=john.db.elephantsql.com".
    "port=5432".
    "user=ijjrarhf".
    "dbname=ijjrarhf".
    "password=CBhTyZrQDgFHhNnMbpx-Uzq0W7nsV9uy";
$conn = pg_connect($conn_str);

if($conn_str){
    echo"<h3>koneksi berhasil</h3>";
}else{
    echo"<h3>koneksi gagal</h3>";
}
?>