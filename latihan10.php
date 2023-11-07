<?php 
function pangkat($angka1, $pangkat2){
	$a = $angka1;
	$b = $pangkat2;
	$hasil = pow ($a,$b);
	return $hasil;

} 

//pemanggilan fungsi
$hasil = pangkat(5, 4);
echo " 5 pangkat 4 = $hasil";
echo "<br />";

?>