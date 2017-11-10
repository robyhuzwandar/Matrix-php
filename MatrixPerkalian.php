<?php
function perkalian_matriks($matriks_a, $matriks_b) {
	$hasil = array();
	for ($i=0; $i<sizeof($matriks_a); $i++) {
		for ($j=0; $j<sizeof($matriks_b[0]); $j++) {
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
for ($i=0; $i<$baris; $i++) {
	echo "<tr>";
	for ($j=0; $j<$kolom; $j++) {
		echo "<td>". round($hasil[$i][$j], 4) ."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>