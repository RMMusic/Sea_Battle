<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.10.2015
 * Time: 17:43
 */

abstract class Connect
{
    protected $_mySqlConnect;
    protected $_host = 'localhost';
    protected $_user = 'root';
    protected $_pas = '';
    protected $_dbName = 'SeaBattle';

    public function __construct(){
        $this->_sqlConnect();
    }

    public function __destruct(){
        $this->_mySqlClose();
    }

    protected function _sqlConnect(){
        $this->_mySqlConnect = mysqli_connect($this->_host, $this->_user, $this->_pas, $this->_dbName);
    }

    protected function _mySqlClose(){
        mysqli_close($this->_mySqlConnect);
        $this->_mySqlConnect = null;
    }

    abstract public function Insert($sqlQuery);

    abstract public function Select($sqlQuery);

}

class Query extends Connect
{

    public function __construct(){
        parent :: __construct();
    }

    public function Insert($sqlQuery)
    {
        $result = mysqli_query($this->_mySqlConnect, $sqlQuery);
        return $result;
    }

    public function Select($sqlQuery){
        $result = mysqli_query($this->_mySqlConnect, $sqlQuery);
        $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }

    public function Delete($sqlQuery)
    {
        $result = mysqli_query($this->_mySqlConnect, $sqlQuery);
        return $result;
    }

}