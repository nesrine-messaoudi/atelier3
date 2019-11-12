<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
   <div class="container">
       <form method="get"action=create.html>
   <br><br>
       <h1>liste des etudiants DSI 2 iset bizerte 2019 </h1>

    <button class="btn btn-primary">nouvel etudiant</button><br>
<table class="table table-striped">
    <thead>
<tr>
    <th>ID</th>
    <th>NOM</th>
    <th>PRENOM</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>operation</th>
   
</tr>
</thead>
<tbody>
<?php
include "dbconnexion.php";
$rep=$pdo->prepare('SELECT * FROM students');
$rep->execute();
while($data=$rep->fetch()){

    echo '<tr>';
    echo '<td>'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    echo '<td><a href="edit.php?id='.$data['id'].'">Editer</a></td>';
    echo '<td><a href="delete.php?id='.$data['id'].'">Supprimer</a></td>';
    echo '</tr>';
}
?> 
</tbody>
    

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</div>
</form>
</body>
</html>