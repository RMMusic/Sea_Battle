<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 31.10.2015
 * Time: 14:55
 */
include('../header.php');
require_once('DB.php');


$selectShips = new Query();
$shipsCoordinates = $selectShips->Select("SELECT ships_coordinates FROM ships_field WHERE USER_id=1");

$explodeShipsCoordinates = explode("/", $shipsCoordinates[0]["ships_coordinates"]);

echo '<table class="nice-td">';
for($x  = 1; $x <=10; $x++){
    echo '<tr>';
    for($y = 1; $y <= 10; $y++){
        echo '<td>';
        if (in_array($x.','.$y, $explodeShipsCoordinates)){
            echo '<div class="ship">';
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo '<table class="nice-td place">';
for($x  = 1; $x <=10; $x++){
    echo '<tr>';
    for($y = 1; $y <= 10; $y++){
        echo '<td>';
        if (in_array($x.','.$y, $explodeShipsCoordinates)){
            echo '<div class="ship">';
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';