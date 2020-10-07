<?php
	$tabungan = 150000;
	$bunga = 12.5;
	$totaltabungan = $tabungan + (($tabungan*$bunga)/100);

	echo "Tabungan Awal = Rp. $tabungan<br>Bunga Setahun = $bunga%<br>Total Tabungan Setahun = ? <br> Jawaban : $tabungan + (($tabungan*$bunga)/100) = Rp. $totaltabungan";
?>