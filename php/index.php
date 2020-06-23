<?php

class handphone {
	var $merk;
	var $tipe;
	var $jumlah_pulsa;

	function __construct($pulsa){
		$this->jumlah_pulsa = $pulsa;
	}

	function mengirim_pesan($tarif, $jumlah_pesan = 1){
		$this->jumlah_pulsa -= $tarif*$jumlah_pesan;
	}

	function __destruct(){
		echo "Jumlah Pulsa = "; echo $this->jumlah_pulsa; echo "<br>";
	}
}

$hp_azzam = new handphone(1000);
$hp_azzam->mengirim_pesan(50);
$hp_azzam->mengirim_pesan(50, 3);
?>