<?php
include_once 'Users.php';
class Customer extends Users{

    public function __construct(){
        parent::__construct();
        $this->table = "users";
    }

    public function createCustomer($details){

        // print_r($details);
        return $this->insert($details);

    }

    public function addPurchase($uid,$details){
        print_r($details);

    }
}

$customer =  new Customer();

$uid = $customer->createCustomer([
    "name" => "Lorem",
    "mobile" => "8978778",
    "email" => "qwfewqfvh",
    "password" => "eqwfveqv",
    "role" => "customer"
]);

print_r($customer->getInfo($uid));

// $customer->addPurchase($uid,[
//     [
//         "item" => "Pen",
//         "color" => 'blue',
//         "quantity" => 1,
//         "rate" => 15,
//         "finalPrice" => 10,
//         "gstApplicable" => 5,
//         "gstType" => "inc"
//     ],
//     [
//         "item" => "Pencil",
//         "color" => 'dark',
//         "quantity" => 1,
//         "rate" => 15,
//         "finalPrice" => 10,
//         "gstApplicable" => 5,
//         "gstType" => "inc"
//     ],
// ]);



?>