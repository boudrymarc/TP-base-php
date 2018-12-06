<?php
$jardin= array(
    $fruit = array("Fraises","Framboises","Cerises"),
    $legume = array("Navets","Carottes","Pommes de terre","Salades"));
$note= array(
    $français=array(
        $devoirn1=array("8.32"),
        $devoirn2=array("9.78"),
        $partiel=array("11"),
    ),
    $anglais=array(
        $devoirn1=array("10.45"),
        $devoirn2=array("12.56"),
        $partiel=array("9.03"),
    )
    );
    
echo "Tableau Jardin avec clé".'<br>';
echo "Fruits:"."<br>";
for($numero=0;$numero<=2;$numero++)
{
    echo  ' - '.$fruit[$numero];
}   
echo '<br>';
echo "Legumes:".'<br>';
for($numero=0;$numero<=3;$numero++)
{ 
    echo ' - '.$legume[$numero];
}    
echo '<br>';
echo "Tableau Notes avec clé".'<br>';

foreach($note as $ligne){
    foreach($ligne as $cle=>$valeur){
        echo $cle.':'.$valeur.'<br>';
    }
}
?>