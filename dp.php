<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8"/>

    	<title>
    		FloraLife
    	</title>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<?php
	include("header.php");
?>   
    <div id="dp">   
    <h1>Demandes personnalisées</h1>
    <!--Formulaire de demande-->
        <form name="dp" action="" method="GET">
            <table class="tableform">
                <!-- Titre -->
                <tr>
                    <td colspan="2" class="formtitle1" align="center">
                        Formulaire de demande
                    </td>
                </tr>
                <tr>
                    <td class="formtitle2">
                        Vous êtes :         
                    </td>
                </tr> 
                <tr height="40px">
                    <td class="formulaire">
                        <input type="radio" id="particulier" name="i" value="particulier"/>
                        <label for="particulier">Un particulier</label>
                    </td>
                </tr> 
                <tr height="40px">
                    <td class="formulaire">
                        <input type="radio" id="particulier" name="i" value="entreprise"/>
                        <label for="entreprise">Une entreprise</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="formtitle2">
                        Veuillez nous formuler votre demande ci-dessous:
                    </td>
                </tr>
                <tr>
                    <td class="formulaire">
                        <textarea name="demande" rows="3" cols="50"></textarea>
                    </td>
                </tr>
                <!--Bouton-->
                <tr height="100px">
                <!--Bouton submit-->
                    <td width="50%" align="center">
                        <input type="submit" name="Send" value="Soumettre">
                    </td>
                <!--Bouton reset-->
                    <td width="50%" align="center">
                        <input type="reset" name="back" value="Annuler">
                    </td>
                </tr>
            </table>
        </form>  
    </div>
<?php
	include("footer.php");
?>
    
</body>
</html>