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

    public function ShipArray($numberOfShipDecks, $shipArray)
    {
        if (empty($shipArray)) {
            $shipArray = $this->ziroTabel();
        }
        $numberOfShip=1;
        while($numberOfShip<=(5-$numberOfShipDecks)) {
            $z = rand(1, 2);
            if ($z==1) {
                $x = rand(1, (11-$numberOfShipDecks));
                $y = rand(1, 10);

                    if ($shipArray[$x][$y] == 0 and $shipArray[$x+$numberOfShipDecks-1][$y] == 0) {

                        for ($i = -1; $i <= $numberOfShipDecks; $i++) {
                            for ($j = -1; $j <= 1; $j++) {
                                $shipArray[$x + $i][$y + $j] = 9;
                            }
                        }
                        for($s=1;$s<=$numberOfShipDecks;$s++) {
                            $shipArray[$x+$s-1][$y] = 1;
                        }
                        $numberOfShip++;
                    }
                }

            else{
                $y = rand(1, (11-$numberOfShipDecks));
                $x = rand(1, 10);

                if ($shipArray[$x][$y] == 0 and $shipArray[$x][$y+$numberOfShipDecks-1] == 0) {

                    for ($i = -1; $i <= 1; $i++) {
                        for ($j = -1; $j <= $numberOfShipDecks; $j++) {
                            $shipArray[$x + $i][$y + $j] = 9;
                        }
                    }
                    for($s=1;$s<=$numberOfShipDecks;$s++) {
                        $shipArray[$x][$y+$s-1] = 1;
                    }
                    $numberOfShip++;
                }
                }
            }

        return $shipArray;
    }

}
$oneShip = new RandomShip();
//$p1 = $oneShip->oneShipArray(1);
$p2=array();
for ($i=1;$i<=4;$i++) {
    $p2 = $oneShip->ShipArray($i, $p2);
}
    echo '<table border="1">';
for($x  = 1; $x <=10; $x++){
    echo '<tr>';
    for($y = 1; $y <= 10; $y++){
        echo '<td width = "20px"  height = "20px">';

//        if (in_array($x.','.$y, $explodeShipsCoordinates)){
        if ($p2[$x][$y]==1){
           echo '<span style="color:red">' .$p2[$x][$y].  '</span>';
        }
//        else {
//            echo $p2[$x][$y];
//        }
//        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

//$selectShips = new Query();
//$shipsCoordinates = $selectShips->Select("SELECT ships_coordinates FROM ships_field WHERE USER_id=1");

//$explodeShipsCoordinates = explode("/", $shipsCoordinates[0]["ships_coordinates"]);

