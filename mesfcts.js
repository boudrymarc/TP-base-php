function Calcul()
{
    
    $.ajax
    (
        {
            type:"post",
            url:"ex2Test.php",
            data:"txtNbr="+$('#txtNbr').val()+"calcul="+$("#BtnCalcul").val(),
            success:function(data)
            {
                
                $('#divResultat').empty();
                $('#divResultat').append(data);
            },
            error:function()
            {
                alert("Erreur sur le calcul");
            }
        }
    );
}