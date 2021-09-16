<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-euiv="X-UA_Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
<body>
	<form>
	<?php
//interable
	function getIterable():iterable{
		return["Florist Rin-s", "<hr>"];
	}
$myiterable = getIterable();
foreach($myiterable as $item){
	echo $item;

}
// class
class Pot{
	//properties
	public $name;
	public $harga;

	//contructor 
	function __contruct($name, $harga){
		$this->nama = $nama;
		$this->harga = $harga;
	}
// destruktor
	function __deztruct() {
		echo "Nama : {$this->nama} Harga : Rp. {$this->harga}";
		echo "<br>";

	}
}

//inheritance
class Bibit extends Pot {

}

//interface
interface Produk{
	public function jenis();
}
 class Kamboja implements Produk{
 	public function jenis() {
 		echo "Bunga Mawar beli 2 gratis pupuk","<br>";
 	}
 }

 //Static Property
 class Terjual {
 	public static $satu = 7000, $dua = 10000;
 }

 //Static methods
 class stok{
 	public static function staticmethod() {
 		echo "<hr>";
 		echo "Stok Bunga = 7000 <br> Stok Pot = 10000";
 		echo "<hr>";
 	}
 }
  //objek
$pothitam = new Pot("Pot Hitam", "20000/kg");
$potputih = new Pot("Pot Putih", "30000/kg");
$produk = new kamboja();
$produk -> jenis();
Stok::staticMethod();
echo "Bunga yang terjual : " . Terjual::$dua;
echo "<br> Pot yang terjual : " . Terjual::$dua;
echo "<hr>";
?>
</form>
</body>
</html>