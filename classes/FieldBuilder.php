<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 31.10.2015
 * Time: 14:55
 */
require_once('DB.php');

$selectShips = new Query();
$shipsCoordinates = $selectShips->Select("SELECT ships_coordinates FROM ships_field WHERE USER_id=1");

$explodeShipsCoordinates = explode("/", $shipsCoordinates[0]["ships_coordinates"]);

echo '<table border="1">';
for($x  = 1; $x <=10; $x++){
    echo '<tr>';
    for($y = 1; $y <= 10; $y++){
        echo '<td width="20px"; height="20px";>';
        if (in_array($x.','.$y, $explodeShipsCoordinates)){
            echo '1';
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';


