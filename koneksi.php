<?php
$link=mysqli_connect('localhost','root','');
 
if ($link)
   {
    
     echo "Koneksi dengan MySQL berhasil";
   }
else
   {
     
     echo "Koneksi dengan MySQL gagal";
   }

echo "<br />";
echo 'hasil var_dump variabel $link : ';
var_dump($link);
?>