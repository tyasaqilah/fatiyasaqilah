<?php
//mysql_connect("namaserver","namauser","password")
$cek = mysql_connect("localhost","root","123123password") or die ("database tidak berhasil terkoneksi");
if($cek){
echo "database berhasil terkoneksi<br>";
}
/*else{
echo"Database tidak berhasil terkoneksi";
}*/
?>