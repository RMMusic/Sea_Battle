<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 30.10.2015
 * Time: 14:59
 */

namespace classes;


class Validation
{

    protected $_inData;

    public function __construct($inData){
        $this->_inData = $inData;
    }

    public function isValid(){
        if(count($this->_inData) == 20){
            return true;
        }
        else{
            return false;
        }
    }
}