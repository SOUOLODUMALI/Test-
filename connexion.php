<?php
$connection=new mysqli("localhost","root","","auf_bdd");
if( $connection->connect_error){echo"echec";}
else{echo"success";}

?>