<?php
require(ROOT . "model/PlanningModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $planning = getAllPlanning();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('planning/index', $planning);
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('planning/create');

}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
$createplanning = createPlanning($_POST);
    //2. Bouw een url op en redirect hierheen
    header("location: index");
}

function edit($id){
    $planning = getPlanning($id);
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('planning/update', $planning);

}

function update(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $updateplanning = updatePlanning($_POST);
    header("location: index");
    //2. Bouw een url en redirect hierheen

}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
        $planningget = GetPlanning($id);
        render("planning/delete", $planningget);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee

}

function destroy($id){
    //1. Delete een medewerker uit de database
if($_POST["bevestig"] == "ja"){
    $deleteplanning = deletePlanning($id);
    header("location: ../index");
}else{
    header("location: ../index");
}
	//2. Bouw een url en redirect hierheen
    
}
?>