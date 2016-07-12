<?php
include ("conexiune.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Practica Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>




<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Calculator Salarii</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
           
            <ul class="nav navbar-nav">
            <li><a href="info.php">Valoare Taxe </a></li>


            <ul class="nav navbar-nav">
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>





          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container--> 



      </div>
    </div>
<br><br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>



<center>
<?php

$sql = "SELECT contributie ,valoare,simbol FROM Calculator where tip ='angajat'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "Deduceri Angajat   <br> <br> "; 

    while($row = $result->fetch_assoc()) {


        echo " " . $row["contributie"]. " -" . $row["valoare"]. "" . $row["simbol"]."<br>";
    }

    echo "<br><br>";

$sql2 = "SELECT contributie ,valoare,simbol FROM Calculator where tip ='angajator'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
	echo "Deduceri Angajator   <br> <br> "; 

    while($row = $result2->fetch_assoc()) {


        echo " " . $row["contributie"]. " -" . $row["valoare"]. "" . $row["simbol"]."<br>";
    }

}

} else {
    echo "0 results";
}
$conn->close(); 

?>
</center>


