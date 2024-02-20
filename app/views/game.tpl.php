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
                <?php include __DIR__.'/../choice/App.php'?>
                </div>
            </section>

        </main>