<?php
require(ROOT . "model/GameModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $games = getAllGames();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('games/index', $games);
}


function gameinfo($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $game= getGame($id);
    render('games/smikkel', $game);

    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee

}

?>