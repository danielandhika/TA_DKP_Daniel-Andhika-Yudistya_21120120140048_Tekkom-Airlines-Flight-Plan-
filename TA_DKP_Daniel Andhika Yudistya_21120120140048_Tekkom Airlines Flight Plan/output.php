<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="overflow-x: hidden;"> 
<div class="jumbotron text-center">
        <h2>TEKKOM AIRLINES</h2>
</div>

<div class="row">
        <div class="col-sm-12">
            <h2 class="text-center">Pilot Flight Plan</h2>
            <hr>
        </div>
</div>

<div class="container text-center">
<div class="card card-tengah2 mb-4" style="width: 45rem;">
    <?php
class plan{  
    private $nama; 

    function setNama($nama){
        $this->nama = $nama;
    }
    function getNama(){
        return $this->nama;
    }

}
$plan = new plan();
$plan->setNama($_POST['nama']);

echo "<h2>PILOT</h2>";
    if (isset($_POST['radio1'])) {  
      echo $_POST['radio1']. " " ;  
        }  
    else {  
      echo $_POST['radio1']." ";  
        }  
echo $plan->getNama()." ". "<br>";

echo "Aircraft Rating :  ";
    if ($_POST['rat'] == 'a320') {
        echo "A320";
    }
    else if ($_POST['rat'] == 'b737') {
        echo "B737NG";
    }
    else{
        echo "C172S";
    }
?>

<h2>FLIGHT ROUTE</h2>
<?php 
echo "Origin : ";
echo $_POST['origin']. "<br>";

echo "Waypoints : ";
echo $_POST['waypoints']."<br>";

echo "Destination : ";
echo $_POST['destination']."<br>";

echo "Alternate Airport : ";
echo $_POST['alternate']."<br>";
?>

<h2>AIRCRAFT</h2>
<?php 
if ($_POST['rat'] == 'a320') {
    echo " Aircraft Type : Airbus A320 <br>";
    echo "Registration : PK-LAS <br>";
}
elseif ($_POST['rat'] == 'b737') {
    echo " Aircraft Type : Boeing 737-800NG <br>";
    echo "Registration : PK-LPR <br>";
}
else {
    echo " Aircraft Type : Cessna 172S <br>";
    echo "Registration : PK-WTV <br>";
}
?>
<br><br>
<?php 
for ($i=0; $i < 5 ; $i++) { 
    echo "Safety First. There is no room for erros. <br>";
}
?>
</div>
</div>

<!-- endcard -->
 <div class="card">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <footer class="blockquote-footer">Daniel Andhika Yudistya <cite title="Source Title">Praktikum DKP 2021</cite></footer>
            </blockquote>
        </div>
    </div>
</body>
</html