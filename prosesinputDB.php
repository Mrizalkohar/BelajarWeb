<?php
include "koneksi.php";
$name = $_REQUEST['nama'];
$almat = $_REQUEST['alamat'];
$telp = $_REQUEST['no_hp'];

$mysqli = "INSERT INTO data_diri (nama, alamat, no_hp) VALUES ('$name','$almat','$telp')";

$result = mysqli_query($conn, $mysqli);

if ($result){
//echo "";
echo '<script language="javascript">';
echo 'alert("Data berhasil Disimpan")';
echo '</script>';
}else{
    echo '<script language="javascript">';
    echo 'alert("Data gagal Disimpan")';
    echo '</script>';

}
mysqli_close($conn);    


?>