<?php

$marque=$_POST["marque"];
$modele=$_POST["modele"];
$prix=$_POST["prix"];
$chxml="";

// si le fichier n'existe pas, on le crée

if (!file_exists("voitures.xml")) {
    $chxml="<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<voitures>\n<voiture>\n<marque>$marque</marque>\n<modele>$modele</modele>\n<prix>$prix</prix>\n</voiture>\n</voitures>";
   
  } else {
    // sinon, il faut ajouter à la fin du fichier
    try {
        $xml=simplexml_load_file("voitures.xml");
        $chxml = $xml->asXML();
        $chxml = str_replace("</voitures>","",$chxml);
        $chxml=$chxml."<voiture>\n<marque>$marque</marque>\n<modele>$modele</modele>\n<prix>$prix</prix>\n</voiture>\n</voitures>";

        //var_dump($xml);
    } catch(Throwable $e) {
        echo $e->getMessage();
    }

      /*
          */
}
$verif=file_put_contents("voitures.xml", $chxml);
// à la fin au sauvegarde

// Affichage des Data du fichier XML
$xml=simplexml_load_file("voitures.xml");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<h1 align="center">Liste des mes voitures</h1>
<table align="center" class="table table-dark table-striped">
    <thead>
        <tr>
        <th scope="col">Marque</th>
        <th scope="col">Modele</th>
        <th scope="col">Prix</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($xml->voiture as $val){?>
        <tr>
        <td><?php echo $val->marque  ?></td>
        <td><?php echo $val->modele ?></td>
        <td><?php echo $val->prix  ?></td>
        </tr>
        <?php
        }
    ?> 
    </div> 
  </tbody>
</table>

Pour ajouter une nouvelle voiture cliquer <a href="voiture.html">ici</a>
</body>
</html>


