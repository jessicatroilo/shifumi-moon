<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shifumi Moon</title>
</head>
<body>
    <header>
        <h1>Shifumi Moon</h1>
    </header>
    <main>
        <?php include __DIR__ . '/App.php'?>
        <div>
            <form  method="post" action="">
                <input type="radio" name ="choices" value="Pierre">Pierre</input>
                <input type="radio" name ="choices" value="Papier">Papier</input>
                <input type="radio" name ="choices" value="Ciseau">Ciseau</input>
                <input type="submit" value="Jouez"></input>
            </form>
        </div>
        <div> <!--aura un hidden et apparaitra quand le joueur aura cliquez sur envoyer --->
            <p>choix du joueur : <?= $choice_user; ?></p>
            <p>choix de l'ordinateur : <?= $choice_computer; ?> </p>
            <p> Résultat : <?= $result; ?> </p>
            <button>Recommencer</button> <!-- vider à chaque fois qu'on appuie dessus-->
        </div>

    </main>
</body>
</html>

