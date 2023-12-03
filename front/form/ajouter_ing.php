<?php include '../../back/src/dao.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🙍🏻‍♀️ KOUIZINE</title>
    <link rel="stylesheet" href="../autre.scss">
</head>
<body>
    <div class="navbar-sct">
            <div class="topbar-sct">
                <div class="logo-sct">
                    <a href="../index.php" style="color: black; text-decoration: none">🍴 KOUIZINE</a>
                </div>
                <div class="search-sct">
                    <a class='link' href="gestion.php">
                        <img src="../assets/data.svg">
                    </a>
                    <form action="../search.php" method="post">
                        <input type="search" name="searchbar" id="searchbar" placeholder='Des recettes, des ingrédients...' required/>
                        <div id="img">
                            <input type="image" src='../assets/search-icon.svg'></input>
                        </div>
                    </form>
                </div>
            </div>
            <div class="botbar-sct">
                <div class="allbtn-sct">
                    <?php
                    $categories = $DAO->getCategorie();
                    $counter = 0;

                    foreach ($categories as $categorie) {
                        if ($counter < 6) {
                            echo '<div class="btn-sct">';
                            echo '<a href="categorie.php?id=' . ($counter + 1) . '" style="color: black; text-decoration: none;">';
                            echo '<div id="img">';
                            echo "<img src='{$categorie['img']}' id='btnImg'></img>";
                            echo '</div>';
                            echo '<div id="label">';
                            echo "<p>{$categorie['nom']}</p>";
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';       
                            $counter++;
                        } else {
                            break;
                        }
                    }
                    ?>
                </div>
            </div>
    </div>
    <div class="content-sct">
        <?php
            $id = 2;
            echo '<div class="form">';
            echo '<form action="req.php?id=' . $id . '" method="post">';
            echo '<div class="name">';
            echo '<h2>Nom</h2>';
            echo '<input type="text" value="" name="nom">';
            echo '</div>';
            echo '<div class="img">';
            echo '<h2>Image (URL)</h2>';
            echo '<input type="text" value="" name="img">';
            echo '</div>';
            echo '<div class="qt">';
            echo '<h2>Quantité</h2>';
            echo '<input type="text" value="" name="qt">';
            echo '</div>';
            echo '<div class="id Recette">';
            echo '<h2>Id recette à indiquer</h2>';
            echo '<input type="text" value="" name="idRe">';
            echo '</div>';
            echo '<input type="submit">';
            echo '</form>';
            echo '</div>'
        ?>
    </div>
</body>
</html>
