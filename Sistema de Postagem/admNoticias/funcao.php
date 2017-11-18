<?php
//Demorou 5 horas e uma noite de insÔnia, mas finalmente descobri o erro. Eu tinha escrito $name ao invés de $nome :(
function upload($tmp,$nome,$largura,$pasta){
    $img = imagecreatefromjpeg($tmp);
    $x = imagesx($img);
    $y = imagesy($img);
    $altura =($largura *$y)/$x;
    $nova=  imagecreatetruecolor($largura, $altura);
    imagecopyresampled($nova,$img,0,0,0,0,$largura,$altura,$x,$y);
    imagejpeg($nova,"$pasta/$nome");
    imagedestroy($nova);
    imagedestroy($img);
    
    return($nome);
}

