<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JQuery/jquery-3.1.1.js"></script>
    <script src="mesfcts.js"></script>
    <script type="text/javascript">
     $
        (
            
            function()
            {
                
                $('#BtnCalcul').click(Calcul);
            }
        );
    </script>
    
</head>
<body>
<form method="post" action="ex2Test.php">
    <p>Saisir votre valeur</p>
    <input type="number" value="" name="txtNbr">
    <td>
    <input type='radio' name='calcul' value='Carré'>Carré
    <input type='radio' name='calcul' value='Cube'>Cube
    </td>
    <br>
    <input type="submit" value="Envoyer" id="BtnCalcul">
    </form>
    <div id="divResultat"></div>
</body>
</html>