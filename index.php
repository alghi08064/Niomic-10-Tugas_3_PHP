<?php
print ("<h3>Tugas 3 PHP</h3>");

echo "<b>Soal 1:</b><br>";
$jarak = 360;
$kecepatan = 90;
echo "Jarak antara kota A – Z $jarak km.<br>";
echo "Jika ditempuh dengan sepeda motor berkecepatan $kecepatan km/jam maka lama perjalanan?<br><br>";
echo "<b>Jawaban: </b><br>";
$waktu = $jarak/$kecepatan;
echo "Waktu perjalana yang ditempuh adalah <b>$waktu</b> hari.<br>";

echo "<br><br><br>";

echo "<b>Soal 2:</b><br>";
$tabungan_awal = 150000;
$bunga = 12.5/100;
echo "Defan menabung di Bank Rp. $tabungan_awal. Bunga 1 tahunnya adalah 12,5 %.<br>";
echo "Berapakah tabungan Defan setelah 1 tahun?<br><br>";
echo "<b>Jawaban: </b><br>";
$selisih = $tabungan_awal * $bunga;
$tabungan_akhir = $tabungan_awal + $selisih;
echo "Maka jumlah tabungan Defan setelah 1 tahun adalah <b>Rp. $tabungan_akhir</b>.<br>";

?>
