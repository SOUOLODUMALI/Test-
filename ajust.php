<?php 
include("./connexion.php");

if(isset($_POST  ["submit"])){
$Nom   = $_POST  ["Nom"];
$Pass  = $_POST  ["Pass"];
$Ville = $_POST  ["Ville"];
$File  = $_POST  ["File"];



 

   
$query="INSERT INTO `premier` (`Nom`,`Pass`,`Ville`,`File`)VALUES('$Nom','$Pass','$Ville','$File')";
$resultat=mysqli_query($connection,$query);
 if($resultat)
 {header("location:table.php");
}
else{echo"courage bro";}

}

?>