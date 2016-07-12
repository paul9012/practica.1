<?php
$hostname = "localhost";
$username = "dinalbar_student";
$password = "the!pass4student";
$bd = "dinalbar_rambo";

$conn = mysqli_connect($hostname,$username,$password)
or die ("Eroare! Functia apelata da eroare, este posbil ca cei 3 parametrii sa fie completati eronat!");

$baza_date = mysqli_select_db($conn,$bd)
or die ("Eroare! Numele acestei baze de date nu exista!");
?>