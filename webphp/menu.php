<?php

  class Menu {
      
    private $links=array();
    private $titols=array();
    
    public function insertarMenu($en,$tit)
    {
       $this->links[]=$en;
       $this->titols[]=$tit;
    }
    public function Mostrar()
    {
      echo"<div id='menu'>";
      echo"<div id='menucontenido'>";
      echo"<h2>MENU PRINCIPAL</h2>";

      for($f=0;$f<count($this->links); $f++)
      {
        echo '<a href="'.$this->links[$f].'" style="text-decoration:none; color:#040403">'.$this->titols[$f].'</a>';
        echo'<br>';
      }
      echo"</div>";
      echo"</div>";
    }
  }


?>