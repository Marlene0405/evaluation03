<?php


$aToto = get_evenement();
print_r($aToto);


function get_evenement()
{

    $aData = array();

    $url='http://zumba/wp-json/wp/v2/evenements';

    $sJson=file_get_contents($url);
    //echo $decode;
    $aTab= json_decode($sJson, true);

    foreach ($aTab as $aEvenement){
       // print_r($aEvenement);
       echo "ajout toto";
        $aData[] = [
            $aEvenement['title']['rendered'],
            $aEvenement['content']['rendered'],
            $aEvenement['reservations-evenement'],
            $aEvenement['date-evenement']
        ];
    }
    return($aData);
}

