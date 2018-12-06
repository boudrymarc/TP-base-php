<?php
$tab= array("12","4","251","6","34");
$nbr=$_POST['txtNbr'];

echo "Voici le contenu du tableau"."<br>";
for($i=0;$i<count($tab);$i++){
    echo $tab[$i].'<br>';
}
echo "La plus grande valeur du tableau"."<br>";
$max=$tab[0];
for($i=0;$i<count($tab);$i++){
    if($max<$tab[$i]){
        $max=$tab[$i];
    }   
}
echo $max.'<br>';
$ret=0;
for($i=0;$i<count($tab);$i++){
    if($tab[$i]==$nbr){
        $ret=1;  
        $pos=$i;   
    }
}
if($ret==1){
    echo"La valeur ".$nbr." est présente dans le tableau à la position ".$pos;
    }
    else{
        echo"La valeur ".$nbr." n'est pas présente dans le tableau";
    }
?>