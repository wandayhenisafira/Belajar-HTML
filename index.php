<?php
$nama = array("Andri", "Joko", "Sukma", "Rina", "Sari");
 
foreach ($nama as $val) {
  echo "$val";
  echo "<br>";
}
 
echo "<br>";
$nilai = [80, 65, 90, 45, 70, 100, 40, 35, 20, 44, 78];
$hasil = []; 

foreach ($nilai as $n) {
    if ($n > 67) {
        $hasil[] = $n; 
    }
}

foreach ($hasil as $h) {
    echo $h . "<br>";
}
?>
