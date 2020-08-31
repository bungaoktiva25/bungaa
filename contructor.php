<?php
// buat class laptop
class laptop {
  
   private $pemilik;
   private $merk;
  
   // constructor sebagai pembuat nilai awal
   public function __construct($pemilik, $merk) {
     $this->pemilik = $pemilik;
     $this->merk = $merk;
   }
  
   public function hidupkan_laptop() {
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_bunga= new laptop("Bunga", "Lenovo");
  
echo $laptop_bunga->hidupkan_laptop();
echo "<br />";
  
$laptop_jesi= new laptop("jesi", "Acer");
  
echo $laptop_jesi->hidupkan_laptop();
?>