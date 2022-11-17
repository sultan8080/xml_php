<?php

echo"<h1 align=center>PHP et les fichiers XML</h1>";
$xml=simplexml_load_file("bib.xml");

foreach ($xml->children() as $key=>$val) {  // $key: nom de la catégorie ; $val : contenu catégorie
    echo"<h1 align=center>$key</h1>";  //On récupère les catégries
    echo"<table border=1 align=center>";
    if($key=="livres")
       echo"<tr><th>Titre</th><th>Auteur</th><th>Date</th></tr>";
       else{
        echo"<tr><th>Marque</th><th>Modele</th><th>Immatriculation</th><th>Prix</th></tr>";
       }
        foreach ($val->children() as $ckey=>$cval) {  //$cval: les enfants de chaque catégorie
         echo"<tr>";
            foreach ($cval as $keyElement=>$element) {
                //echo"<td>$keyElement : $element</td>";
                echo"<td>$element</td>";
            }
            echo"</tr>";
    }
    echo"</table>";
}
?>