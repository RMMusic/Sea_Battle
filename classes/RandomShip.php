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
    public $shipArray = array();

    public function __construct()
    {
        $this->ziroArray();

        for ($i=4;$i>=1;$i--) {
            $this->ShipArray($i);
        }
    }
    public function ziroArray(){
         for($x  = 1; $x <=10; $x++){
            for($y = 1; $y <= 10; $y++){
                $this->shipArray[$x][$y]=0;
            }
        }
    }

    public function AddOneShip($horizontalDecks, $verticalDecks){
        $x = rand(1, (11-$horizontalDecks));
        $y = rand(1, (11-$verticalDecks));
        if ($this->shipArray[$x][$y] == 0 and $this->shipArray[$x+$horizontalDecks-1][$y+$verticalDecks-1] == 0) {
            for ($i = -1; $i <= $horizontalDecks; $i++) {
                for ($j = -1; $j <= $verticalDecks; $j++) {
                    $this->shipArray[$x + $i][$y + $j] = 9;
                }
            }
            for($s=1; $s<=$horizontalDecks; $s++) {
                for($d=1; $d<=$verticalDecks; $d++) {
                    $this->shipArray[$x + $s - 1][$y+$d-1] = 1;
                }
            }
        }
        else{
            $this->AddOneShip($horizontalDecks, $verticalDecks);
            }
       }

    public function ShipArray($numberOfShipDecks)
    {
        $numberOfShip=1;
        while($numberOfShip<=(5-$numberOfShipDecks)) {
            $z = rand(1, 2);
            if ($z==1) {
                $this->AddOneShip($numberOfShipDecks, 1);
                  }
            else{
                $this->AddOneShip(1, $numberOfShipDecks);
                }
            $numberOfShip++;
            }
    }
}
$oneShip = new RandomShip();


echo '<table border="1">';
for($x  = 1; $x <=10; $x++){
    echo '<tr>';
    for($y = 1; $y <= 10; $y++){
        echo '<td width = "20px"  height = "20px">';

//        if (in_array($x.','.$y, $explodeShipsCoordinates)){
        if ($oneShip->shipArray[$x][$y]==1){
            echo '<span style="color:red">' .$oneShip->shipArray[$x][$y].  '</span>';
        }
//        else {
//            echo $shipToArray[$x][$y];
//        }
//        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';


?>

<form action="RandomShip.php" method="get">
    <input type="submit" name="button" value=" Generate egeyn! " />
</form>

<form action="gameController.php" method="get">
    <input type="submit" name="button" value=" Done! " />
</form>