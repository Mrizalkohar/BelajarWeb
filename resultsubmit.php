<!DOCTYPE html>
<html>
<head>
<title>Data Anda</title> 
<body>

<h2> data anda sbagai berikut : </h2>
<?php
($_GET["nama"] || $_POST["alamat"]){
echo "Nama Anda : " . $_POST["nama"];
echo "<br>";
echo "Alamat Anda : " . $_POST["alamat"];
echo "<br>";
echo "No Hp Anda : " .$_POST["no_hp"];





?>    
</body>
</html>