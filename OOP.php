<?php
// buat class SmartPhone
class SmartPhone {
  
   // buat property untuk class SmartPhone
   var $pemilik;
   var $merk;
   var $ukuran_layar;
  
   // buat method untuk class SmartPhone
   function hidupkan_Smartphone() {
     return "Hidupkan SmartPhone";
    }
   function matikan_Smartphone() {
     return "Matikan SmartPhone";
   }
}
  
// buat objek dari class SmartPhone (instansiasi)
$SmartPhone_Saya = new SmartPhone();
  
// set property
$SmartPhone_Saya->pemilik="SmartPhone";
$SmartPhone_Saya->merk="Merk : Samsung";
$SmartPhone_Saya->ukuran_layar="Ukuran Layar : 5.5 inchi";

  
// tampilkan property
echo $SmartPhone_Saya->pemilik;
echo "<br />";
echo $SmartPhone_Saya->merk;
echo "<br />";
echo $SmartPhone_Saya->ukuran_layar;
echo "<br />";
  
