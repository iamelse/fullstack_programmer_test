<?php 

require_once 'Siswa.php';
require_once 'Nilai.php';
require_once 'Function.php';

/** Membuat siswa baru dan menambahkan nilai */
$siswa1 = new Siswa('001', 'Asep Kupling');
$siswa1->tambahNilai('Inggris', 100);

/** Menampilkan Data Siswa */
echo "Data Siswa 1: <br>";
echo "NRP: {$siswa1->nrp}<br>";
echo "Nama: {$siswa1->nama}<br>";
echo "Daftar Nilai:<br>";
foreach ($siswa1->daftarNilai as $nilai) {
    echo "Mapel: {$nilai->mapel}, Nilai: {$nilai->nilai}<p>";
}

/** Generate 10 siswa dengan nama dan nilai secara acak */
for ($i = 2; $i  <= 11; $i ++) { 
    $namaSiswa = generateRandomString(10);
    $siswa = new Siswa("00$i", $namaSiswa);
    $mapelList = ['Inggris', 'Indonesia', 'Jepang'];

    for ($j=0; $j < 3; $j++) { 
        $mapel = $mapelList[array_rand($mapelList)];
        $nilai = rand(0, 100);
        $siswa->tambahNilai($mapel, $nilai);
    }

    echo "<p></p>";
    echo "Data Siswa $i: <br>";
    echo "NRP: {$siswa->nrp}<br>";
    echo "Nama: {$siswa->nama}<br>";
    echo "Daftar Nilai:<br>";
    foreach ($siswa->daftarNilai as $nilai) {
        echo "Mapel: {$nilai->mapel}, Nilai: {$nilai->nilai}<br>";
    }
}
?>