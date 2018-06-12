<?php
    $people[] = "Luis";
    $people[] = "Antonio";
    $people[] = "Bastian";
    $people[] = "Carlos";
    $people[] = "Christian";
    $people[] = "Diego";
    $people[] = "Esteban";
    $people[] = "Francisco";
    $people[] = "Fernando";
    $people[] = "German";
    $people[] = "Hector";
    $people[] = "Isabel";
    $people[] = "Javier";
    $people[] = "Katherinne";
    $people[] = "Leo";
    $people[] = "Mauricio";
    $people[] = "Matias";
    $people[] = "Nicolas";

    $q = $_REQUEST['q'];

    $suggestion = '';

    if ($q !== "") {
        $q = strtolower($q);
        $len = strlen($q);
        foreach ($people as $person) {
            if (stristr($q, substr($person, 0, $len))) {
                if ($suggestion === "") {
                    $suggestion = $person;
                } else {
                    $suggestion .= ", $person";
                }
            }
        }
        # code...
    }

    echo $suggestion === "" ? "No Suggestion" : $suggestion;
 
?>