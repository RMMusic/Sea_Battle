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
        $kil=1;
        while($kil<=(5-$n)) {
            $z = rand(1, 2);
            if ($z==1) {
                $x = rand(1, (11-$n));
                $y = rand(1, 10);

                    if ($shipArray[$x][$y] == 0 and $shipArray[$x+$n-1][$y] == 0) {

                        for ($i = -1; $i <= $n; $i++) {
                            for ($j = -1; $j <= 1; $j++) {
                                $shipArray[$x + $i][$y + $j] = 9;
                            }
                        }
                        for($s=1;$s<=$n;$s++) {
                            $shipArray[$x+$s-1][$y] = 1;
                        }
                        $kil++;
                    }
                }

            else{
                $y = rand(1, (11-$n));
                $x = rand(1, 10);

                if ($shipArray[$x][$y] == 0 and $shipArray[$x][$y+$n-1] == 0) {

                    for ($i = -1; $i <= 1; $i++) {
                        for ($j = -1; $j <= $n; $j++) {
                            $shipArray[$x + $i][$y + $j] = 9;
                        }
                    }
                    for($s=1;$s<=$n;$s++) {
                        $shipArray[$x][$y+$s-1] = 1;
                    }
                    $kil++;
                }
                }
            }

        return $shipArray;
    }

}
$oneShip = new RandomShip();
//$p1 = $oneShip->oneShipArray(1);
$p2 = $oneShip->oneShipArray(3);
echo '<table border="1">';
for($x  = 1; $x <=10; $x++){
    echo '<tr>';
    for($y = 1; $y <= 10; $y++){
        echo '<td width="20px"; height="20px";>';

//        if (in_array($x.','.$y, $explodeShipsCoordinates)){
//        echo $p1[$x][$y];
        echo $p2[$x][$y];
//        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

//$selectShips = new Query();
//$shipsCoordinates = $selectShips->Select("SELECT ships_coordinates FROM ships_field WHERE USER_id=1");

//$explodeShipsCoordinates = explode("/", $shipsCoordinates[0]["ships_coordinates"]);

