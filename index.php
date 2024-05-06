<?php
$db = mysqli_connect('127.0.0.1', 'root', 'root', 'dtc');
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = (int) $_POST['age'];

    $sql = "INSERT INTO USER (nom, prenom, age) VALUES('$nom','$prenom',$age)";
    mysqli_query($db, $sql);

    header('Location: view.php');
    exit();
}

?>

<h2>Inscription utilisateur : </h2>
<form action="" method="POST">
    <input type="text" name="nom">
    <input type="text" name="prenom">
    <input type="number" name="age">
    <input type="submit" name="submit" value="Enregistrer">
</form>