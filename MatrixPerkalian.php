<?php
function perkalian_matriks($matriks_a, $matriks_b) {
	//deklarasi array
	$hasil = array();
	for ($i=0; $i<sizeof($matriks_a); $i++) {  //menghitung berdasarakan jumlah elemen matriks_a
		for ($j=0; $j<sizeof($matriks_b[0]); $j++) { //
			$temp = 0;
			for ($k=0; $k<sizeof($matriks_b); $k++) {
				$temp += $matriks_a[$i][$k] * $matriks_b[$k][$j];
			}
			$hasil[$i][$j] = $temp;
		}
	}
	return $hasil;
}

$baris = 2;
$kolom = 2;	


// Matriks A
$a = array();
$a[] = array(1, 2);
$a[] = array(3, 4);


// Matriks B
$b = array();
$b[] = array(1, 0);
$b[] = array(2, 1);


// Kalikan
$hasil = perkalian_matriks($a, $b); 
echo "<table border='1' cellspacing='0' cellpadding='5'>";
for ($i=0; $i<$baris; $i++) { //mengulangi berdasarkan jumlah baris
	echo "<tr>";
	for ($j=0; $j<$kolom; $j++) { //mengulangi berdasarkan jumlah kolom
		echo "<td>".$hasil[$i][$j]."</td>"; //menampilkan isi elemen dalam arrays
	}
	echo "</tr>";
}
echo "</table>";
?>