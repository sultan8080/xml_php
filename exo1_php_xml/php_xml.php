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
</body>
</html>
<?php
echo"<h1 align=center>PHP et les fichiers XML</h1>";
$xml=simplexml_load_file("bib.xml");
?>
<h1 align="center">Liste des mes voitures</h1>
<table align="center" class="table table-dark table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Marque</th>
        <th scope="col">modele</th>
        <th scope="col">immatriculation</th>
        <th scope="col">prix</th>
        </tr>
    </thead>
    <tbody>
    <?php
    static $i=1;
    foreach($xml->voiture as $cle=>$val){?>
        <tr>
        <th scope='row'></th>
        <td><?php echo $val->marque  ?></td>
        <td><?php echo $val->modele ?></td>
        <td><?php echo $val->immatriculation ?></td>
        <td><?php echo $val->prix  ?></td>
        </tr>
        <?php
        }
        $i++;
    ?> 
    </div> 
  </tbody>
</table>