<?php
    if(empty($_GET['id'])) {
        header('Location: view.php');
        exit();
    }

    $db = mysqli_connect('127.0.0.1', 'root', 'root', 'dtc');
    
    $query = "SELECT * FROM USER WHERE id={$_GET['id']}";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_row($result);

    if(isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];

        $query = "UPDATE USER SET nom='$nom', prenom='$prenom', age='$age' WHERE id=$user[0]";
        mysqli_query($db, $query) or die('unable to update user');

        header('Location: view.php');
        exit();
    }
?>

<h2>Modification <?= $user[1] ?> : </h2>
<form action="" method="POST">
    <input type="text" name="nom" value="<?= $user[1] ?>">
    <input type="text" name="prenom" value="<?= $user[2] ?>">
    <input type="number" name="age" value="<?= $user[3] ?>">
    <input type="submit" name="submit" value="Enregistrer">
</form>