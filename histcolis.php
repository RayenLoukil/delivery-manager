<link rel="stylesheet" href="MesStyles.css">

<?php
$ref = $_POST['ref'];
$package_status = $_POST['package_status'];
$chk = $_POST['chk'];

require "condb.php" ;

$req1 = "SELECT * from colis where ref = '$ref'  ";
$res1 = mysqli_query($cnx,$req1) or die(mysqli_error()."<br>$req1");
if (mysqli_num_rows($res1)==0){
    die("Référence inexistant");
}

$req2 = "SELECT * from historique where ref = '$ref' and description = '$package_status' ";
$res2 = mysqli_query($cnx,$req2) or die(mysqli_error()."<br>$req2");
if (mysqli_num_rows($res2)<>0){
    die(" l'historique sélectionné a déjà été affecté précédemment pour ce colis.");
}

$req3 = "INSERT into historique values (NULL,'$ref','$package_status', NOW())";
$res3 = mysqli_query($cnx,$req3) or die(mysqli_error()."<br>$req3");
if (mysqli_affected_rows($cnx)>0){
    echo("bien ajoute");
    
    echo("  <h3> REF: $ref </h3> ");

    $req4 = "SELECT nomEx from colis C, historique H where (C.ref = H.ref) and C.ref= '$ref'";
    $res4 = mysqli_query($cnx,$req4) or die(mysqli_error()."<br>$req4");
    $t = mysqli_fetch_row($res4);
    echo("  <h3> Nom Expéditeur : $t[0] </h3> ");


 
    echo("<table border='1'>
    <tr>
        <th>Date</td>
        <th>Delivery</td>
    </tr>") ;
    
    



    $req5 = "SELECT DateTMP,description from historique order by datetmp desc";
    $res5 = mysqli_query($cnx,$req5) or die(mysqli_error()."<br>$req5");
    while ($t1 = mysqli_fetch_row($res5)){
            
            echo("<tr class='t'>
        <td >$t1[0]</td>
        <td>$t1[1]</td>
    </tr>");
    }


    




    echo("</table>");
}   

?>