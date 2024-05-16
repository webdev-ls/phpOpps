<?php
require_once 'Db.php';
require_once 'Calc.php';

class Employee{

    public $table = "users";
    public $companyCode = "users";
    public $db;

    public function __construct($companyCode){
        $this->companyCode = $companyCode;
        $this->db = new Db();
    }

    public function getEmployes(){
        $this->db->select("*");
        $this->db->from("users");
        $query = $this->db->get();
        $data = $this->db->result_array($query);
        print_r($data);
    }

    public function getEmployee(){
        $this->db->select("*");
        $this->db->from("users");
        $query = $this->db->get();
        $data = $this->db->row_array($query);
        print_r($data);
    }

    public function updateEmployee(){
        $DB = new Db();
        $DB->where("uid",1);
        $DB->update("users",[
            "uid" => 11,
            "name" => "cheeku"
        ]);
    }

    public function deleteEmployee($id){
        $this->db->where("uid",$id);
        $this->db->delete("users");
    }
    
    public function addEmployee($data){
        $this->db->insert("users",$data);
    }
}

$emp = new Employee("learningsessions");

echo Calc::sum(1,2,3,4);


// $emp->addEmployee([
//     "name" => "orem orma",
//     "mobile" => "123",
//     "email" => "123@gmail.com",
//     "password" => "123",
//     "role" => "normal"
// ]);

?>