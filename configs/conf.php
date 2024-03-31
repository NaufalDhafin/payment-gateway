<?php
$conf = mysqli_connect("localhost","inib4251_ppob","!Dhappyyy280905","inib4251_ppob");
//$conf = mysqli_connect("localhost", "root", "root", "npay");

$wwarior        = $conf->query("SELECT * FROM produk WHERE id = '1'");
$wepic          = $conf->query("SELECT * FROM produk WHERE id = '2'");
$wmythic_glory  = $conf->query("SELECT * FROM produk WHERE id = '3'");

$jwarior        = $conf->query("SELECT * FROM produk WHERE id = '4'");
$jepic          = $conf->query("SELECT * FROM produk WHERE id = '5'");
$jmythic_glory  = $conf->query("SELECT * FROM produk WHERE id = '6'");


$rwwarior        = $wwarior->fetch_array();
$rwepic          = $wepic->fetch_array();
$rwmythic_glory  = $wmythic_glory ->fetch_array();

$rjwarior        = $jwarior->fetch_array();
$rjepic         = $jepic->fetch_array();
$rjmythic_glory  = $jmythic_glory->fetch_array();


function rp($angka){
	$hasil_rupiah = "Rp " . number_format($angka,0,'','.');
	return $hasil_rupiah;
}
?>