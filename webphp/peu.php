

<?php
class Peus {
 private $titol;
 
 public function __construct($tit)
 {
 $this->titol=$tit;
 }
 
 
 public function Mostrar()
 {
 echo'<div id="pie">';
 echo'<br>';
 echo '<h1 style="text-align:center">'.$this->titol.'</h1>';
 echo'</div>';
 }
 
}

?>

</div>
</body>
</html>