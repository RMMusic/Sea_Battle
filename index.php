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

    public function __construct($a=10){
        $this->_fieldResolution = $a;
    }

    protected function _createField($_fieldResolution){
        $fieldArray = array();
        for($x=0; $x < $_fieldResolution; $x++){
            for($y=0; $y < $_fieldResolution; $y++){
                $fieldArray[$x][$y] = 0;
            }
        }
        return $fieldArray;
    }
}

$a = new Field(11);
echo $a->_fieldResolution;