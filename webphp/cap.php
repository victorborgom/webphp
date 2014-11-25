<!DOCTYPE html>
<html lang="ca">
<head>
 <title>WebMVC</title>
 <meta charset="utf-8"/>
 <link href="estils.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="pagina">

<?php

class Caps {
 private $titol;
 private $logo;
 
 
 public function insertarCap($titol, $logo)
 {
 $this->titol=$titol;
 $this->logo=$logo;

 }
 
 public function Mostrar()
 {  
 echo'<div id="cabecera">';
 echo'<br>';
 echo '<div id="titulocap"> <h1 style="text-align:center">'.$this->titol.'</h1></div>';
 echo '<div id="logocap"><img src="logo.png" width="100px" height="100px" /> </div>';
 echo'</div>';
 }
 
}

?>



