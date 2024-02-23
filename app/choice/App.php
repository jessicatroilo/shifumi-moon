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
        $choiceUser = $_POST['choices'];
        $choices = array ("Cristal","Parchemin","Dague");
        $key = array_rand($choices);
        $choiceComputer = $choices[$key];         

        echo "<div class='result__choice'><p>Ton choix : <span class='test'>$choiceUser</span></p>";
        echo "<p>Choix de Moon : <span class='test'>$choiceComputer</span></p></div>";

        if ($choiceUser === "Cristal" && $choiceComputer === "Dague" || $choiceUser === "Parchemin" && $choiceComputer === "Cristal" || $choiceUser === "Dague" && $choiceComputer === "Parchemin" )
        { 
            $result = "Gagné !";
        } 
        else if ($choiceUser ==  $choiceComputer)
        {
            $result = "Egalité !";
        }
        else 
        {
            $result = "Perdu !";
        }

        echo "<div class='result__point'> Résultat : $result</div>";


}
