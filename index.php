<?php
// Λήψη των τιμών POST
$st1 = $_POST['st1'];
$st2 = $_POST['st2'];
// Σύνταξη εντολής SQL για εισαγωγή δεδομένων
$qry = "INSERT INTO tab1 VALUES(".$st1.",'".$st2."')";
// Εκτέλεση εντολής
$qryexe = mysqli_query($conne, $qry);
?>
