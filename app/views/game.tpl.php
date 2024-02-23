<body>
    <div id="container">
        
        <header>
            
            
            <h1 class="title__1">Shifumi</h1>  
            <h2 class="title__2">moon</h2>
    
        </header>

        <main>
            
            <section>
                <div class="form__wrapper">
                    <form  class ="form" method="post" action="">
                        <div class= "form__div__wrapper">
                            <div class="form__div">
                                <label class="form__label" for="pierre">Cristal</label>
                                <input class="form__input" type="radio" id="pierre" name ="choices" value="Cristal"></input>
                            </div>

                            <div class="form__div">
                                <label class="form__label" for="papier">Parchemin</label>
                                <input class="form__input" type="radio" id="papier" name ="choices" value="Parchemin"></input>
                            </div>

                            <div class="form__div">
                                <label class="form__label" for="pierre">Dague</label>
                                <input class="form__input" type="radio" id="ciseau" name ="choices" value="Dague"></input>
                            </div>
                        </div>
                        <input class="form__submit"type="submit" value="Jouez"></input>

                        <div class="result"> <!--aura un hidden et apparaitra quand le joueur aura cliquez sur envoyer --->
                            <?php include __DIR__.'/../choice/App.php'?>
                        </div>
                    </form>
                </div>
            </section>

            <section>
            
            </section>

        </main>