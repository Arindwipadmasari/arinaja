<?php
// buat class induk: Tab
class Tab {
 
   public $merk;
   public $RAM;
   public $penyimpanan;
 
   public function beli_Tab() {
     return "Beli Tab baru";
   }
}
 
// turunkan class Tab ke SmartPhone
class SmartPhone extends Tab {
 
   public function lihat_spec() {
     return "merk: $this->merk, RAM: $this->RAM, 
     penyimpanan: $this->penyimpanan";
   }
}
 
// buat objek dari class SmartPhone (instansiasi)
$SmartPhone_baru = new SmartPhone();
 
// isi property objek
$SmartPhone_baru->merk = "Samsung";
$SmartPhone_baru->RAM ="6 GB";
$SmartPhone_baru->penyimpanan = "64 GB";
 
//panggil method objek
echo $SmartPhone_baru->beli_Tab();
echo "<br />";
echo $SmartPhone_baru->lihat_spec();
?>