<?php
include ("connessione.php");
include("LoScoprimondo.php");




$query="INSERT INTO terraPadri (immagine,email) VALUES ('$_POST[immagine]','$cod')";

$result = mysql_query($query);

echo "#".$cod ;


?>
