<?php
//kalkulator pertama ku, code pertama ku :*
//code by : Maulana ALamsyah
//semoga bisa bermanfaat :)
print<<<munyul
<!DOCTYPE html>
<html>
	<head>
		<title>Kalkulator</title>
	</head>
<body>
<table align="center">
<form method="POST" action="">
<tr>
	<td>
		<input type="text" name="nomer1" placeholder="Masukan angka!!" autofocus required>
	</td>
	<td>
		<select name="operator">
		<option value="pilih">---pilih---</option>
		<option value="penjumlahan">+</option>
		<option value="pengurangan">-</option>
		<option value="perkalian">X</option>
		<option value="pembagian">/</option>
		<option value="mod">mod</option>
	</td>
	<td>
		<input type="text" name="nomer2" placeholder="Masukan angka!!" required>
	</td>
</tr>
<tr>
	<td colspan="3" align="center">
		<input type="submit" name="hitung" value="HITUNG">
		<input type="reset" name="reset" value="RESET">
	</td>
</tr>
</form>
</table>
</body>
</html>
munyul;

if (isset($_POST['hitung'])) {
	$a1 = $_POST['nomer1'];
	$a2 = $_POST['nomer2'];
	$op = $_POST['operator'];

	switch($op){
		case "penjumlahan":
			$hasil = $a1 + $a2;
			echo "<script>alert('hasil dari $a1 + $a2 adalah $hasil');</script>";
		break;

		case "pengurangan":
			$hasil = $a1 - $a2;
			echo "<script>alert('hasil dari $a1 - $a2 adalah $hasil');</script>";
		break;

		case "perkalian":
			$hasil = $a1 * $a2;
			echo "<script>alert('hasil dari $a1 X $a2 adalah $hasil');</script>";
		break;

		case "pembagian":
			$hasil = $a1 / $a2;
			echo "<script>alert('hasil dari $a1 / $a2 adalah $hasil');</script>";
		break;

		case "mod":
			$hasil = fmod($a1, $a2);
			echo "<script>alert('hasil dari $a1 mod $a2 adalah $hasil');</script>";
		break;
		case "pilih":
			echo "<script>alert('Anda harus memilih operator terlebih dahulu');</script>";
		break;
		default:
			echo "<script>alert('hasil tidak diketahui');</script>";
		break;
	}

}

?>
