<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>
<body>
	<?php 	
		function penjumlahan ($bil1,$bil2,$total){
			$total = $bil1 + $bil2;

			echo "PENJUMLAHAN";
			echo "<br>";
			echo "Operator : +";
			echo "<br>";
			echo "Hasil : $total";
			echo "<br><br>";
		}

		function pengurangan ($bil1,$bil2,$total){
			$total = $bil1 - $bil2;

			echo "PENGURANGAN";
			echo "<br>";
			echo "Operator : -";
			echo "<br>";
			echo "Hasil : $total";
			echo "<br><br>";
		}

		function perkalian ($bil1,$bil2,$total){
			$total = $bil1 * $bil2;

			echo "PERKALIAN";
			echo "<br>";
			echo "Operator : *";
			echo "<br>";
			echo "Hasil : $total";
			echo "<br><br>";
		}

		function pembagian ($bil1,$bil2,$total){
			$total = $bil1 / $bil2;

			echo "PEMBAGIAN";
			echo "<br>";
			echo "Operator : /";
			echo "<br>";
			echo "Hasil : $total";
			echo "<br><br>";
		}

		function modulus ($bil1,$bil2,$total){
			$total = $bil1 % $bil2;

			echo "MODULUS";
			echo "<br>";
			echo "Operator : %";
			echo "<br>";
			echo "Hasil : $total";
			echo "<br><br>";
		}

		$bil1 = 20;
		$bil2 = 10;
		$total= 0;

		echo "Bilangan 1 = $bil1";
		echo "<br>";
		echo "Bilangan 2 = $bil2";
		echo "<br><br>";
		echo "Berikut merupakan hasil dari setiap operasi";
		echo "<br><br>";

		penjumlahan($bil1, $bil2,$total);
		pengurangan($bil1, $bil2,$total);
		perkalian($bil1, $bil2,$total);
		pembagian($bil1, $bil2,$total);
		modulus($bil1, $bil2,$total);
	 ?>


</body>
</html>