<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <?php
    include "dbconnexion.php";
        $rep=$pdo->prepare('SELECT * FROM students where id= :param_id');
        $rep->bindParam(':param_id', $_GET['id']);
        $rep->execute();
        $data=$rep->fetch();
    ?>
    <fieldset>
    <legend> mettre a jour etudiant </legend>
    <form action="update.php" method="post" class="form-online_" accept-charset="utf-8">
    <div class="form-group">
    <label>firstname</label>
    <input type="text" name="firstname" id="firstname" value="<?= $data['firstname']?>" class="form-control" >
    </div>
    <div class="form-group">
    <label>lastname</label>
    <input type="text" name="lastname" id="lastname"    value="<?= $data['lastname']?>"    class="form-control">
    </div>
    <div class="form-group">
    <label>email</label>
    <input type="text" name="email" id="email"  value="<?= $data['email']?>"class="form-control">
    </div> 
    <div class="form-group">
    <label>phone</label>
    <input type="number" name="phone"  id="phone"  value="<?= $data['phone']?>" class="form-control">
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary">modifier</button>
    <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
    </form>
  

    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>