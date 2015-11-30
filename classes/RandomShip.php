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
    protected $decks = array();

    public function __construct()
    {
        $this->zeroArray();

        for ($i=4;$i>=1;$i--) {
            $this->ShipArray($i);
        }
    }
    public function zeroArray(){
         for($x  = 1; $x <=10; $x++){
            for($y = 1; $y <= 10; $y++){
                $this->shipArray[$x][$y]=0;
            }
        }
    }

    public function AddOneShip(){
        $x = rand(1, (11-$this->decks[horizontal]));
        $y = rand(1, (11-$this->decks[vertical]));
        if ($this->shipArray[$x][$y] == 0 and $this->shipArray[$x+$this->decks[horizontal]-1][$y+$this->decks[vertical]-1] == 0) {
            for ($i = -1; $i <= $this->decks[horizontal]; $i++) {
                for ($j = -1; $j <= $this->decks[vertical]; $j++) {
                    $this->shipArray[$x + $i][$y + $j] = 9;
                }
            }
            for($s=1; $s<=$this->decks[horizontal]; $s++) {
                for($d=1; $d<=$this->decks[vertical]; $d++) {
                    $this->shipArray[$x + $s - 1][$y+$d-1] = 1;
                }
            }
        }
        else{
            $this->AddOneShip();
            }
       }

    public function ShipArray($numberOfShipDecks)
    {
        $numberOfShip=1;
        while($numberOfShip<=(5-$numberOfShipDecks)) {
            $z = rand(1, 2);
            if ($z==1) {
                $this->decks[horizontal] = $numberOfShipDecks;
                $this->decks[vertical] = 1;
                }
            else{
                $this->decks[horizontal] = 1;
                $this->decks[vertical] = $numberOfShipDecks;
                }
            $this->AddOneShip();
            $numberOfShip++;
            }
    }
}
$oneShip = new RandomShip();
?>
<form action="gameController.php" method="post">
<?php
    $ar=array();
echo '<table border="1">';
for($x  = 1; $x <=10; $x++){
    echo '<tr>';
    for($y = 1; $y <= 10; $y++){
        echo '<td width = "30px"  height = "30px">';
        if ($oneShip->shipArray[$x][$y]==1){
            echo '<span style="color:red">' .$oneShip->shipArray[$x][$y].  '</span>';
//            echo '<div id="ship"></div>';
            $ar[]=$x.','.$y;
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>

<!--<form action="RandomShip.php" method="get">-->
<!--    <input type="submit" name="button" value=" Generate again! " />-->
<!--</form>-->


<?php for($i=0; $i<20; $i++):?>
       <input type="hidden" name="ar" value = "<?php echo $ar; ?>" />
    <?php endfor; ?>
    <button type="submit">Done!</button>
</form>