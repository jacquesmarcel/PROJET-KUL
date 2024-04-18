<?php

$nom =$_POST['nom']; 
$email = $_POST['email'];
$statut = $_POST['statut']; 
$debut = $_POST['debut'];
$fin = $_POST['fin'];
$Q1 = $_POST['Q1'];
$Q2 = $_POST['Q2'];
$Q4 = $_POST['Q4']; 
$Q5 = $_POST['Q5']; 
$Q6 = $_POST['Q6'];
$Q7 = $_POST['Q7'];
$Q8 = $_POST['Q8'];
$Q9 = $_POST['Q9'];
$Q10 = $_POST['Q10'];
$formation = $_POST['formation'];
$url1 = $_POST['nom_url1'];
$url2 = $_POST['nom_url2'];
$police = $_POST['nom_police']; 
?>
<html lang="fr">
<title> Envoie des questionnaires </title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.js">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="js/main.js">

    </head>
<body>
    <header class=" container-fluid"  style="text-align:center; width:70%;font-family: Arial, Helvetica, sans-serif; font-weight: bold;" >  
        <p><img src="css/img/logo.png" alt="logo"></p>
        <span class="header container-fluid">Questionnaires pour la création d'un site web </span>
</header>
        <?php
       
     


            
           //echo"bonjour : $nom ";
            // Connection à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "templates";
            
          try {
                         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                         // set the PDO error mode to exception
                         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                         $sql = "INSERT INTO info (nom,email,statut,debut,fin)
                         VALUES ('$nom','$email','$statut','$debut','$fin')";
 
                         // recuperation du dernier Id
                         $conn->exec($sql);
                         $last_id = $conn->lastInsertId();
 
                         $sql1 = "INSERT INTO questionnaires(Q1,Q2,Q4,Q5,Q6,Q7,Q8,Q9,Q10,formation,url1,url2,police,id_info)
                         VALUES ('$Q1','$Q2','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$formation','$url1','$url2','$police','$last_id')";
                         $conn->exec($sql1);
                         // envoie dans la bd reussi
                        // echo "New record created successfully";
                        
                     } 
                 catch(PDOException $e) {
                         echo $sql . "<br>" . $e->getMessage();
                     }
                     $conn = null;


           
        ?>
</body>
</html>