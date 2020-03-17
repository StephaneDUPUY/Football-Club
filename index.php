<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>UFC</title>
        <!-- <link rel="stylesheet" href="css/reset.css"> -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section id="left">
            <h1>United Football Club</h1>
            <h2>Section enfants (de 6 à 14 ans)</h2>
        
        
            <?php
                // check age exist
                if (isset($_GET['age'])):
                // retrieve age and store it
                    $age = $_GET['age'];
                    // check age and give category
                    if ($age < 6):
                        $category = "Trop jeune";
                    elseif ($age < 8):
                        $category = "Poussin";
                    elseif ($age < 10):
                        $category = "Pupille";
                    elseif ($age < 12):
                        $category = "Minime";
                    elseif ($age < 15):
                        $category = "Cadet";
                    else:
                        $category = "Trop âgé";
                    endif;
            ?>
            <!-- display age -->
            <p>Âge de l'enfant : <?=$age?></p>
            <!-- display category -->
            <h3>Catégorie : <?=$category?></h3>

                <!-- if it's the first time opeing page - no data -->
                <?php else: ?>
                    <p>Veuillez indiquer l'âge de votre enfant</p>
                <?php
                endif;

            ?>

            <form action="index.php" method="get">
                <label for="age">Quel est l'âge de votre enfant ?</label>
                <input type="number" name="age" id="age" value="<?=@$age?>"> <!-- @ for no error message -->
                <button type="submit">Calculer</button>
            </form>

        </section>
        <section id="right">
            <img src="image/bart.png" alt="Bart au foot">
        </section>

    </body>
</html>