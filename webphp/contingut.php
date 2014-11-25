<?php

class Continguts {
    
 private $lines=array();
 
 public function insertarContenidos($li)
 {
 $this->lines[]=$li;
 }
 
 
 public function Mostrar()
 { 
    echo'<div id="contenido">';
    echo'<div id="contenidotexto">';
    echo'<h1>LISTADO ARTICULOS</h1>';
 
        for($f=0;$f<count($this->lines);$f++)
        {
        echo '<p>'.$this->lines[$f].'</p>';
        }
    echo'</div>';  
    echo'</div>';

 }
 
 
}


?>