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
    <div id="fondev">   
    <h1>Evénements</h1>
        <table class="tableformev">
            <tr >
                <td rowspan="2" valign="middle" align="center" width="33%">
                    <img id="prod" src="https://imagizer.imageshack.com/img924/5739/g5sxVQ.jpg">
                </td>
                <td colspan="2" class="formtitle1" valign="middle" align="center">
                    Champêtre
                </td>
            </tr>
            <tr height="225px">
                <td class="formulaire" align="center" width="40%">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </td>
                <td align="center">
                    <p class="formtitle3">Formule</p>
                    <form class="formulaire">
                        <input type="radio" id="standard" name="formule" value="st">
                        <label for="Standard">Standard</label> 500 €<br/><br/>
                        <input type="radio" id="premium" name="formule" value="pr">
                        <label for="Premium">Premium</label> 1100 €<br/><br/>
                        <input type="submit" name="Send" value="Demander un devis">
                    </form>
                </td>  
            </tr>
        </table>
        <table class="tableformev">
            <tr >
                <td rowspan="2" valign="middle" align="center" width="33%">
                    <img id="prod" src="https://imagizer.imageshack.com/img922/469/8xLLrk.jpg">
                </td>
                <td colspan="2" class="formtitle1" valign="middle" align="center">
                    Oriental
                </td>
            </tr>
            <tr height="225px">
                <td class="formulaire" align="center" width="40%">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </td>
                <td align="center">
                    <p class="formtitle3">Formule</p>
                    <form class="formulaire">
                        <input type="radio" id="standard" name="formule" value="st">
                        <label for="Standard">Standard</label> 500 €<br/><br/>
                        <input type="radio" id="premium" name="formule" value="pr">
                        <label for="Premium">Premium</label> 1100 €<br/><br/>
                        <input type="submit" name="Send" value="Demander un devis">
                    </form>
                </td>  
            </tr>
        </table>
        <table class="tableformev">
            <tr >
                <td rowspan="2" valign="middle" align="center" width="33%">
                    <img id="prod" src="https://imagizer.imageshack.com/img922/9985/YMiYrP.jpg">
                </td>
                <td colspan="2" class="formtitle1" valign="middle" align="center">
                    Moderne
                </td>
            </tr>
            <tr height="225px">
                <td class="formulaire" align="center" width="40%">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </td>
                <td align="center">
                    <p class="formtitle3">Formule</p>
                    <form class="formulaire">
                        <input type="radio" id="standard" name="formule" value="st">
                        <label for="Standard">Standard</label> 500 €<br/><br/>
                        <input type="radio" id="premium" name="formule" value="pr">
                        <label for="Premium">Premium</label> 1100 €<br/><br/>
                        <input type="submit" name="Send" value="Demander un devis">
                    </form>
                </td>  
            </tr>
        </table>
    </div>

<?php
	include("footer.php");
?>
</body>
</html>