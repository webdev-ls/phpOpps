<?php
include_once 'Db.php';

class Users{

    public $db;
    public $uid;
    public $name;
    public $mobile;
    public $email;
    public $password;
    public $table;

    public function __construct(){
        $this->db = new Db();
    }

    public function insert($user){
        //data validation
        $uid = $this->db->insert("users",$user);
        $this->uid = $uid;
        return $uid;
    }

    public function getInfo($where){
        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where($where);
        $query = $this->db->get();
        echo $this->db->last_query();
        return $this->db->row_array($query);
    }
    
}


?>