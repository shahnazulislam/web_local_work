<?php
class Database{
    public $host   = DB_HOST;
    public $user   = DB_HOST;
    public $pass   = DB_HOST;
    public $dbname = DB_HOST;


    public $link;
    public $error;

    public function __construct() {
        $this->connectDB();
    }


    private function connectDB() {
    $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->link){
            $this->error = "connection faild".$this->link->connect_error;
            return false;
        }

    }
    //select or dead database
    public function select($query){
        $result = $this->link->query($query) or die ($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }
}
?>