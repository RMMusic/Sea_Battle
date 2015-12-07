<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.10.2015
 * Time: 17:43
 */

require_once('DB.php');
require_once('Validation.php');

if((isset($_GET['shot_coordinates']))){
    var_dump($_GET['shot_coordinates']);
    $shot = new Query();
    $shot->Insert("INSERT INTO shots (shot_cordinates,user_id) VALUES('".$_GET['shot_coordinates']."',1);");
    $selectShips = new Query();

    $shipsCoordinates = $selectShips->Select("SELECT ships_coordinates FROM ships_field WHERE USER_id=1");

    $explodeShipsCoordinates = explode("/", $shipsCoordinates[0]["ships_coordinates"]);
    if(in_array($_GET['shot_coordinates'],$explodeShipsCoordinates)){

    }
}
else {
    class GameController
    {
        protected $_inData;

        public function __construct($inData)
        {
            $this->_inData = $inData;
            $this->_validation();
        }

        protected function _validation()
        {
            $valid = new Validation($this->_inData);
            if ($valid->isValid()) {
                $this->_insertDB();
//            $this->_shipsSelect();

            } else {
                $this->_insertDB();
//           echo '!!!';
            }
        }

        protected function _insertDB()
        {
            $insert = new Query();
            $insert->Delete("DELETE FROM ships_field WHERE user_id=1;");
            $coordinatesArray = array();
            $x = 0;
            foreach ($this->_inData as $key => $data) {
                $coordinatesArray[$x] = $key;
                $x++;
            }
            $a = implode("/", $coordinatesArray);
//          foreach($this->_inData as $key => $data) {
            $insert->Insert("INSERT INTO ships_field (ships_coordinates, user_id) VALUES ('" . $a . "', 1);");
//        }

        }

//    protected function _shipsSelect(){
//        $select = new Query();
//        $select->Select("SELECT ships_coordinates FROM ships_field WHERE USER_id=1");
//    }

    }

    new GameController($_POST);

    header("Location: FieldBuilder.php");
    die();
}