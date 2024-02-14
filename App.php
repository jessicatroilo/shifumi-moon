<?php



if (isset ($_POST['choices'])) 
{
    
    $choice_user = $_POST['choices'];
    $choices = array ("Pierre","Papier","Ciseau");
    $key = array_rand($choices);
    $choice_computer = $choices[$key];
    if ($choice_user === "Pierre" && $choice_computer === "Ciseau" || $choice_user === "Papier" && $choice_computer === "Pierre" || $choice_user === "Ciseau" && $choice_computer === "Papier" )
    {
        
        $result = "<p> Gagné !<p>";

    } 
    else if ($choice_user === "Pierre" && $choice_computer === "Papier" || $choice_user === "Papier" && $choice_computer === "Ciseau" || $choice_user === "Ciseau" && $choice_computer === "Pierre" )
    {
        $result = "<p>Perdu !<p>";
    }
    else 
    {
        $result = "<p> Oops, Egalité !<p>";
    }   

} 




