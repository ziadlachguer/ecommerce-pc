<!doctype html>
<html lang="en">
<head>
    <?php include 'include/head.php' ?>
    <title>Liste des catégories</title>
</head>
<style>
    .hero.is-landing {
            color: #ffffff;
            background-image: linear-gradient( 135deg, rgba(60, 8, 118, 0.8) 0%, rgba(250, 0, 118, 0.8) 100%);
            
        }
        

</style>
<body>
<?php include 'include/nav.php' ?>
<div class="container py-2 has-background-light">
    <h2>Liste des catégories</h2>
    <a href="ajouter_categorie.php" class="button is-link is-hovered">Ajouter catégorie</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Libelle</th>
                <th>Description</th>
                <th>Icone</th>
                <th>Date</th>
                <th>Opérations</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once 'include/database.php';
        $categories = $pdo->query('SELECT * FROM categorie')->fetchAll(PDO::FETCH_ASSOC);
        foreach ($categories as $categorie){
            ?>
            <tr>
                <td><?php echo $categorie['id'] ?></td>
                <td><?php echo $categorie['libelle'] ?></td>
                <td><?php echo $categorie['description'] ?></td>
                <td>
                    <i class="fa <?php echo $categorie['icone'] ?>"></i>
                </td>
                <td><?php echo $categorie['date_creation'] ?></td>
                <td>
                    <a href="modifier_categorie.php?id=<?php echo $categorie['id'] ?>" class="button is-link is-hovered">Modifier</a>
                    <a href="supprimer_categorie.php?id=<?php echo $categorie['id'] ?>" onclick="return confirm('Voulez vous vraiment supprimer la catégorie <?php echo $categorie['libelle'] ?>');" class="button is-danger is-hovered">Supprimer</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>