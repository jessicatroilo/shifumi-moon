<?php

    if (isset ($_POST['choices'])) 
    {    
        $choice_user = $_POST['choices'];
        $choices = array ("Pierre","Papier","Ciseau");
        $key = array_rand($choices);
        $choice_computer = $choices[$key];         

        echo "<p>choix du joueur : $choice_user</p>";
        echo "<p>choix de l'ordinateur : $choice_computer</p>";

        if ($choice_user === "Pierre" && $choice_computer === "Ciseau" || $choice_user === "Papier" && $choice_computer === "Pierre" || $choice_user === "Ciseau" && $choice_computer === "Papier" )
        { 
            $result = "<p> Gagné !<p>";
        } 
        else if ($choice_user ==  $choice_computer)
        {
            $result = "<p> Oops, Egalité !<p>";
        }
        else 
        {
            $result = "<p> Perdu !<p>";
        }

        echo "<p> Résultat : $result</p>";


}
