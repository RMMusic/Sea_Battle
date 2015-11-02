<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.10.2015
 * Time: 17:43
 */

require_once('DB.php');
require_once('Validation.php');

class GameController
{
    protected $_inData;

    public function __construct($inData){
        $this->_inData = $inData;
        $this->_validation();
    }

    protected function _validation(){
        $valid = new \classes\Validation($this->_inData);
        if($valid->isValid()){
            $this->_insertBD();
            $this->_shipsSelect();

        }
        else{
           echo '!!!';
        }
    }

    protected function _insertBD(){
        $insert = new Query();
        $insert->Delete("DELETE FROM ships_field WHERE user_id=1;");
        foreach($this->_inData as $key => $data) {
            $insert->Insert("INSERT INTO ships_field (ships_coordinates, user_id) VALUES ('".$key."', 1);");
        }
    }

    protected function _shipsSelect(){
        $select = new Query();
        $selectArray = $select->Select("SELECT ships_coordinates FROM ships_field WHERE USER_id=1");

        var_dump($selectArray);
    }

}

new GameController($_POST);