<html>
<head>
    <title> FloraLife </title>
</head>
    
<body>
 
<?php
	include("header.php");
?>
  
<div id="decor">
    <div class="welcome">
        <?php 

            if(isset ($_GET["prenom"])){
                $prenom=$_GET["prenom"];
                echo "Bienvenue $prenom!";
            }

            else{
                echo "Bienvenue!";
            }
        ?>
    </div> 
</div>

<?php
    include("footer.php");
?>
</body>
</html>
