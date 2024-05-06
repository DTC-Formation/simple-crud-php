<?php
$db = mysqli_connect('127.0.0.1', 'root', 'root', 'dtc');
$results = mysqli_query($db, 'SELECT * FROM USER');
$payload = mysqli_fetch_all($results);
?>

<a href="/index.php">Créer un nouveau utilisateur</a>
<table>
    <thead>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php
        foreach ($results as $result) {
            ?> 
            <tr>
                <td>
                    <?= $result['nom'] ?>
                </td>
                <td>
                    <?= $result['prenom'] ?>
                </td>
                <td>
                    <?= $result['age'] ?>
                </td>
                <td>
                    <a href="/delete.php?id=<?= $result['id'] ?>">Supprimer</a>
                    <a href="/update.php?id=<?= $result['id'] ?>">Modifier</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>