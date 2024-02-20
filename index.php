<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link type = "text/css" rel="stylesheet" href="app/css/style.css">

    <!-- Sources et crédits -->
    <a href="https://fr.freepik.com/vecteurs-libre/vecteur-fond-espace-fond-ecran-galaxie_18938344.htm#query=fond%20lune%20etoile%20illustration&position=5&from_view=search&track=ais&uuid=f5949c29-26c2-432a-bba3-25e5f6368521">Image de rawpixel.com</a> sur Freepik
    
    <title>Shifumi Moon</title>
    
</head>
<body>
    <div id="container">
        
        <header>
            <h1>Shifumi Moon</h1>
        </header>

        <main>
            
            <section>
                <div class="form__wrapper">
                    <form  class ="form" method="post" action="">

                        <label class="form__label" for="pierre">Cristal</label>
                        <input class="form__input" type="radio" id="pierre" name ="choices" value="Cristal"></input>

                        <label class="form__label" for="papier">Parchemin</label>
                        <input class="form__input" type="radio" id="papier" name ="choices" value="Parchemin"></input>

                        <label class="form__label" for="pierre">Dague</label>
                        <input class="form__input" type="radio" id="ciseau" name ="choices" value="Dague"></input>

                        <input class="form__submit"type="submit" value="Jouez"></input>
                        
                    </form>
                </div>
            </section>

            <section>
                <div> <!--aura un hidden et apparaitra quand le joueur aura cliquez sur envoyer --->
                <?php include __DIR__.'/app/App.php'?>
                </div>
            </section>

        </main>
    
        <footer>
            Règle du jeu - Copyright&#169;2024 - Created by Jessica Troilo
        </footer>
    </div>
</body>
</html>

