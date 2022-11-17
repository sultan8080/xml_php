<?php

echo"<h1 align=center>PHP et les fichiers XML</h1>";
$xml=simplexml_load_file("bib.xml");
//var_dump($xml);
// 1) Cas d'un fichier xml contenant un seul element
/*echo "Titre :".$xml->titre."<br />";
echo "Auteur :".$xml->auteur."<br />";
echo "Date :".$xml->date."<br />";*/

// 2) Cas d'un fichier avec plusieurs elements
// sans le foreach
/*
echo"<br/> <h3 align=center>Premier element </h3>";
echo $xml->livre[0]->titre;
echo $xml->livre[0]->auteur;
echo $xml->livre[0]->date;
echo"<br/> <h3 align=center>Deuxième element </h3>";
echo $xml->livre[1]->titre;
echo $xml->livre[1]->auteur;
echo $xml->livre[1]->date;
echo"<br/> <h3 align=center>Troisième element </h3>";
echo $xml->livre[2]->titre;
echo $xml->livre[2]->auteur;
echo $xml->livre[2]->date;
*/
// avec le foreach et element

/*foreach($xml->livre as $cle=>$val)
{
    static $i=1;
    echo "$cle $i : $val->titre de $val->auteur paru en $val->date<hr/>";
    $i++;
}*/


// avec le foreach + element +attributs
foreach($xml->livre as $val)
{

    echo "$val->titre de $val->auteur paru en $val->date.<br/>";
    foreach($val->attributes() as $key=>$value)
    {   
        echo $key." : ". $value."<br/>";
    }
    echo"<hr/>";
}
?>