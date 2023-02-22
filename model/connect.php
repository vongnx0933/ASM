<?php

class connect{
    public $db=null;
    function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $this->db = new PDO("mysql:host=$servername;dbname=asmp2", $username, $password);
            // set the PDO error mode to exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         //   echo "Connected successfully";
            }
        catch(PDOException $e)
            {
         //   echo "Connection failed: " . $e->getMessage();
            }
    }
    function getall($sql){
        $kqs=$this->db->query($sql);
        $kq=$kqs->fetchAll();
        return $kq;
    }
    function getone($sql){
        $kqs=$this->db->query($sql);
        $kq=$kqs->fetch();
        return $kq;
    }
    public function exec($query)
    {
       // echo $query;
        $this->db->exec($query);
    }
}

?>