<?php
    include 'dbconnexion.php' ;
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $id=$_POST['id'];
    
    $rep=$pdo->prepare('UPDATE students SET firstname=:param_firstname , lastname=:param_lastname , email=:param_email , phone=:param_phone WHERE id=:param_id');
    $rep->bindParam(':param_firstname',$firstname);
    $rep->bindParam(':param_lastname',$lastname);
    $rep->bindParam(':param_email',$email);
    $rep->bindParam(':param_phone',$phone);
    $rep->bindParam(':param_id',$id);

    $rep->execute();
    header('Location:index.php');
 ?>     
