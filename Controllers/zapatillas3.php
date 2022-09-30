<?php
require_once("Models/zapatillas.php");
require_once("Util/zapatillas2.php");

    class zapatillas3{
        public static function Mostrar(){

          $carousel[]= new zapatillas(1,"Imagen 1","Teclado Gaming","Imágenes//ima12.jpg","Costo $216.95");
          $carousel[]= new zapatillas(2,"Imagen 2","Mouse Gaming","Imágenes//mou2.jpg"," Costo $46.00");
          $carousel[]= new zapatillas(3,"Imagen 3","Monitor","Imágenes//ima11.jpg","Costo $200.00");
          $carousel[]= new zapatillas(4,"Imagen 4","CPU","Imágenes//ima10.jpg","Costo $3,699.00");
          $carousel[]= new zapatillas(5,"Imagen 5","Audífonos","Imágenes//aud5.jpg","Costo $239.00");
            return $carousel;
        }


    }

?>