<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.11.2015
 * Time: 16:23
 */

namespace classes;
require_once('DB.php');

class RandomShip
{
//    public $shipArray = array();
//
//    public function __construct($shipArray)
//    {
//        $this->shipArray = $shipArray;
//    }

    public function ziroTabel(){
        $cheShip = array();
        for($x  = 1; $x <=10; $x++){
            for($y = 1; $y <= 10; $y++){
                $cheShip[$x][$y]=0;
//        if (in_array($x.','.$y, $explodeShipsCoordinates)){
//                echo $chekShip[$x][$y];
//        }
            }
        }

        return $cheShip;
    }

    public function oneShipArray($n)
    {
        $shipArray=$this->ziroTabel();
        for($kil=1; $kil<=(5-$n); $kil++) {
            $x = rand(1, 10);
            $y = rand(1, 10);

            if ($shipArray[$x][$y] == 0) {

                for ($i = -1; $i <= 1; $i++) {
                    for ($j = -1; $j <= 1; $j++) {
                        $shipArray[$x+$i][$y+$j] = 9;
                    }
                }
                $shipArray[$x][$y] = 1;
            }

        }
        return $shipArray;
    }

}
$oneShip = new RandomShip();
$p = $oneShip->oneShipArray(1);
echo '<table border="1">';
for($x  = 1; $x <=10; $x++){
    echo '<tr>';
    for($y = 1; $y <= 10; $y++){
        echo '<td width="20px"; height="20px";>';

//        if (in_array($x.','.$y, $explodeShipsCoordinates)){
        echo $p[$x][$y];
//        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

//$selectShips = new Query();
//$shipsCoordinates = $selectShips->Select("SELECT ships_coordinates FROM ships_field WHERE USER_id=1");

//$explodeShipsCoordinates = explode("/", $shipsCoordinates[0]["ships_coordinates"]);

