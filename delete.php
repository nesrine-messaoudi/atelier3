<?php
require'dbconnexion.php';
$rep=$pdo->prepare('DELETE FROM students WHERE id=:param_id');
$rep-> bindParam(':param_id',$_GET['id']);
$data=$rep->fetch();
$rep->execute();
header('Location:index.php');

?>
