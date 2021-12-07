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
    <div id="decor"> 
        <form action="welcome.php" method="GET"> 
            <table class="tableform">
                <!-- Titre -->
                <tr>
                    <td colspan="2" class="formtitle1" align="center">Créer un compte
                    </td>
                </tr>
                <!-- Sous-Titre: Contact -->
                <tr>
                    <td colspan="2" class="formtitle2">
                        Contact
                    </td>
                </tr>
                <!--Nom-->
                    <tr height="40px">
                        <td class="formulaire">
                            <label for="nom">Nom:</label>
                        </td>
                    </tr>
                    <tr height="40px">
                        <td class="formulaire">
                            <input type="text" id="nom" name="nom"/>
                        </td>
                    </tr>
                <!--Prénom-->
                    <tr height="40px">
                        <td class="formulaire">
                            <label for="prenom">Prénom:</label>
                        </td>
                    </tr>
                    <tr height="40px">
                        <td class="formulaire">
                            <input type="text" id="prenom" name="prenom" value="<?php if(isset ($_GET["prenom"])) echo $_GET["prenom"];?>"/>
                        </td>
                    </tr>
                <!--E-Mail-->
                    <tr height="40px">
                        <td class="formulaire">
                            <label for="mail">Adresse e-mail:</label>
                        </td>
                    </tr>
                    <tr height= "40px">
                        <td class="formulaire">
                            <input type="text" id="mail" name="mail">
                        </td>
                    </tr>
                <!--MdP-->
                    <tr height= "40px">
                        <td class="formulaire">
                            <label for="mdp">Mot de passe:</label>
                        </td>
                    </tr>
                    <tr height= "40px">
                        <td class="formulaire">
                            <input type="password" name="mdp" maxlength="10">
                        </td>
                    </tr>
                <!--Sous-Titre: infos perso-->
                <tr>
                    <td colspan="2" class="formtitle2">
                        Informations Personnelles
                    </td>
                </tr>
                <!--Sous-Titre: Genre-->
                    <tr>
                        <td colspan="2" class="formtitle3">
                            Genre
                        </td>
                    </tr>
                    <!--Bouton radio Homme-->
                        <tr height="40px">
                            <td class="formulaire">
                                <input type="radio" id="homme" name="genre" value="M">
                                <label for="homme">Homme</label>
                            </td>
                        </tr>
                    <!--Bouton radio Femme-->
                        <tr height="40px">
                            <td class="formulaire">
                                <input type="radio" id="homme" name="genre" value="M">
                                <label for="femme">Femme</label>
                            </td>
                        </tr>
                    <!--Bouton radio Autre-->
                        <tr height="40px">
                            <td class="formulaire">
                                <input type="radio" id="homme" name="genre" value="M">
                                <label for="autre">Autre</label>
                            </td>
                        </tr>
                <!--Sous-titre: Date de Naissance-->
                    <tr>
                        <td colspan="2" class="formtitle3">
                            <label for="date">Date de naissance:</label>
                        </td>
                    </tr>
                <!--Input date-->    
                    <tr height="40px">
                        <td class="formulaire">
                            <input type="date" id="date" name="date" min="1900-01-01" max="2005-01-01">
                        </td>
                    </tr>
                <!--Sous-titre: Pays-->
                    <tr>
                        <td colspan="2" class="formtitle3">
                            Pays:
                        </td>
                    </tr>
                <!--liste déroulante Pays-->
                    <tr height="40px">
                        <td class="formulaire">
                            <select name="pays">
                                <option value="be">Belgique</option>
                                <option value="pb">Pays-Bas</option>
                                <option value="fr">France</option>      
                            </select>
                        </td>
                    </tr>
                    <!--Sous-Titre: Langues-->
                    <tr>
                        <td colspan="2" class="formtitle3">
                            Langues:
                        </td>
                    </tr>
                    <!--Checkbox FR-->
                        <tr height="40px">
                            <td class="formulaire">
                                <input type="checkbox" id="FR" name="FR" value="fr" checked="checked"/>
                                <label for="FR">Français</label>
                            </td>
                        </tr>
                    <!--Checkbox DU-->
                        <tr height="40px">
                            <td class="formulaire">
                                <input type="checkbox" id="DU" name="DU" value="ndls"/>
                                <label for="DU">Néerlandais</label>
                            </td>
                        </tr>
                    <!--Checkbox EN-->
                        <tr height="40px">
                            <td class="formulaire">
                                <input type="checkbox" id="EN"name="EN" value="en"/>
                                <label for="EN">Anglais</label>
                            </td>
                        </tr>
                    <!--Commentaire-->
                    <tr>
                        <td colspan="2" class="formtitle3">
                            Commentaire:
                        </td>
                    </tr>
                    <tr>
                        <td class="formulaire">
                            <textarea name="comment" rows="3" cols="50"></textarea>
                        </td>
                    </tr>
                <!--Bouton-->
                <tr height="100px">
                    <!--Bouton submit-->
                    <td width="50%" align="center">
                        <input type="submit" name="Send">
                    </td>
                    <!--Bouton reset-->
                    <td width="50%" align="center">
                        <input type="reset" name="back">
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
