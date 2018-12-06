<?php
$tab= array("12","2","22","43","65","83","16","85","56","34");
echo "Voici le contenu du tableau de 10 valeurs"."<br>";
for($i=0;$i<count($tab);$i++){
    echo $tab[$i].'<br>';
}
echo "Voici le contenu du tableau pair"."<br>";
for($i=0;$i<count($tab);$i++){
    if($tab[$i]%2==0){
    echo $tab[$i].'<br>';
    }
    
}
echo "Voici le contenu du tableau impair"."<br>";
for($i=0;$i<count($tab);$i++){
    if($tab[$i]%2==1){
    echo $tab[$i].'<br>';
    }
}
?>