<?php
    class SmartPhone {
        // static Property
        public static $harga;
        public static $laba;

        // static method
        public static function beli(){
            return "Samsung";
        }

        // Mengakses Property dan method pada class sendiri
        public static function jual(){
            return "Laba :".self::$laba." - Nama SmartPhone  ".self::beli();
        }
    }

    // Set static property
    SmartPhone::$harga='1.800.000';
    SmartPhone::$laba='200.000';

    // menampilkan static property
    echo "Harga Jual: Rp".SmartPhone::$harga;
    echo "<br>";
    echo SmartPhone::beli();
    echo "<br>";
    // menampilkan static method dengan menggunakan seft
    echo SmartPhone::jual();

?>
