<?php



$ref = $_¨POST('ref');
$nomE = $_¨POST('nomE');
$nomR = $_¨POST('nomR');
$adr = $_¨POST('adr');
$etat = $_¨POST('etat');
$box = $_¨POST('box');


// connexion 
require('condb.php');

// req1 : ken ref mawjouf fl colis wale
$res1 = mysqli_query($cnx , $req1)
if (mysqli_num_rows($res1)<>0){
    die("ref deja mawjouf ")
}

// req2 :insert into into colis
$res2 = mysqli_query($cnx , $req2)
if (mysqli_affected_rows($cnx)<>0){
    die("ref deja mawjouf ")
}

// inser into into historique 
$res3 = mysqli_query($cnx , $req3)
if (mysqli_affected_rows($cnx)<>0){
    die("ref deja mawjouf ")
}


?>






























