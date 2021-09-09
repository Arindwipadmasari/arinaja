<?php
// buat class SmartPhone
class SmartPhone {
  
   private $pemilik = "SmartPhone";
   private $merk = "Samsung";
   
   public function __construct(){
     echo "Ini berasal dari Constructor SmartPhone";
   }
  
   public function hidupkan_SmartPhone(){
     return "Hidupkan SmartPhone $this->merk ";
  
   }
   public function __destruct(){
     echo "Ini berasal dari Destructor SmartPhone";
   }
}
  
// buat objek dari class SmartPhone (instansiasi)
$laptop_andi= new SmartPhone();
  
echo "<br />";
echo $laptop_andi->hidupkan_SmartPhone();
echo "<br />";
?>