<?php
    /************* REQUETE POUR VOIR SI LE VISITEUR EST DEJA EN BASE DE DONNEES *************/
function visiteur($record) {
  $db_host = "localhost:3308";
  $db_username = "root"; 
  $db_password = "password";
  $db_name = "testdev";
  $db_table = "compteur";
  $counter_page = "access_page";
  $counter_field = "access_counter";
  $counter_date = "access_date";

  $db = mysqli_connect ($db_host, $db_username, $db_password, $db_name) or ("Host ou base données non disponible");

  $sql_call = "INSERT INTO ".$db_table." (".$counter_page.", ".$counter_field.", ".$counter_date.") VALUES ('".$record."', 1, '".time()."') ON DUPLICATE KEY UPDATE ".$counter_field." = ".$counter_field." + 1"; 
  mysqli_query($db, $sql_call) or die("erreur d‘insertion");

$sql_call = "SELECT ".$counter_field. " FROM ".$db_table." WHERE ".$counter_page. " = '".$record. "'";
$sql_result = mysqli_query($db, $sql_call) or ("SQL-demande refusée");
$row = mysqli_fetch_assoc($sql_result);
$x = $row[$counter_field];

mysqli_close($db);
return $x;
  }
?>