<?php
$colonne=$_POST['lstColonne'];
$ligne=$_POST['lstLigne'];
for($i=1; $i<=$ligne; $i++){

for ($j=1; $j<=$colonne; $j++){
echo"*";  
}
echo"<br>";
}
?>