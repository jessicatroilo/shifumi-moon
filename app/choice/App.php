<?php
/**
 * Condition du jeu Pierre, Papier, Ciseau
 * 
 * $choice_user - récuperation des données $_POST selon le choix du joueur
 * $choices - création d'un tableau pour paramétrer le choix de l'ordinateur
 * $key int - array_rand choix aléatoire entre les différentes entrées du tableau $choices -
 * $choice_computer - récupération du choix de l'ordinateur, comparaison avec $key pour récuperer la valeur correspondante du tableau array[key] 
 * 
 * Deuxième condition pour les règles du jeux
 * $result - 3 possibles : win, loose et égalité
 */
    if (isset ($_POST['choices'])) 
    {    
        $choice_user = $_POST['choices'];
        $choices = array ("Cristal","Parchemin","Dague");
        $key = array_rand($choices);
        $choice_computer = $choices[$key];         

        echo "<div class='result__choice'><p>Ton choix : <span class='test'>$choice_user</span></p>";
        echo "<p>Choix de Moon : <span class='test'>$choice_computer</span></p></div>";

        if ($choice_user === "Cristal" && $choice_computer === "Dague" || $choice_user === "Parchemin" && $choice_computer === "Cristal" || $choice_user === "Dague" && $choice_computer === "Parchemin" )
        { 
            $result = "Gagné !";
        } 
        else if ($choice_user ==  $choice_computer)
        {
            $result = "Egalité !";
        }
        else 
        {
            $result = "Perdu !";
        }

        echo "<div class='result__point'> Résultat : $result</div>";


}
