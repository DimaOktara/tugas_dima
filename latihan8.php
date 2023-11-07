<!DOCTYPE html>
<html>
<head>
	<title>document</title>
</head> 
<style>
	body{
	color:blue;
	text-size-adjust:28px;
	font-size: larger;
	font-style: italic;

	}
	</style>

<body>
<?php 
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan,$kelas);

function ganti_style($text,$kelas) {
	return "<span class '$kelas>' $text </span>";
}

 ?>

</body>
</html>







