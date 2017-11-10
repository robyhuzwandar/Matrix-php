<?php 
$matriksA = array();
$matriksB = array();
//Matriks C untuk menyimpan hasil penjumlahan antara Matriks A dan B
$matriksC = array();
 
//inisialiasi jumlah baris dan kolom. Untuk penjumlahan matriks jumlah baris dan kolom kedua-dua matriksnya harus sama
$baris = 2;
$kolom = 2;
// matriks A 
$matriksA[0][0] = 2; $matriksA[0][1] = 3;
$matriksA[1][0] = 1; $matriksA[1][1] = 2;

// matriks A 
$matriksB[0][0] = 4; $matriksB[0][1] = 2;
$matriksB[1][0] = 1; $matriksB[1][1] = 2;
 
for( $i = 0; $i < $baris; $i++ ) {  //melakukan perulangan berdasarkan jumlah baris
    for( $j = 0; $j < $kolom; $j++ ) {  //melakukan perulangan berdasarkan jumlah kolom
    		  //index ke              data pada index ke
        $matriksC[$i][$j] = $matriksA[$i][$j] + $matriksB[$i][$j];
    }   
}
 
//Menampilkan hasil penjumlahan matriks yang telah disimpan di dalam Matriks C
for( $i = 0; $i < $baris; $i++ ) {
    for( $j = 0; $j < $kolom; $j++ ) {
        echo $matriksC[$i][$j]." ";
    }
}
?>
