<?php
$nbr=$_POST['txtNbr'];
$calcul=$_POST['calcul'];
$res;
if($calcul=="Carré"){
    $res=$nbr*$nbr;
    echo $nbr."*".$nbr."=".$res;
}
if($calcul=="Cube"){
    $res=$nbr*$nbr*$nbr;
    echo $nbr."*".$nbr."*".$nbr."=".$res;
}
?>
