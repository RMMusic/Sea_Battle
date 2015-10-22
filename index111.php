<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 20.10.2015
 * Time: 20:03
 */

class Field
{
    public $_fieldResolution = '';

//    public function __construct($a=10){
//        $this->_fieldResolution = $a;
//    }

    public function _createField($_fieldResolution=10){
        $fieldArray = array();
        for($x=0; $x < $_fieldResolution; $x++){
            for($y=0; $y < $_fieldResolution; $y++){
                $fieldArray[$x][$y] = 0;
            }
        }
        return $fieldArray;
    }
}

//$a = new Field();
//$b = $a->_createField(10);
//var_dump($b);
//
//echo '<table border="1">';
////    for(){
////
////    }
//echo '</table>';
