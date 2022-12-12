<?php

require_once ($_SERVER["DOCUMENT_ROOT"].'/includes/Connection.php');

class Queries{

    private $link;

    public function __construct()
    {
        $this->link = Connection::connect();
    }

    public function getData(){
        $sql = "SELECT * FROM orders";
        return mysqli_query($this->link, $sql);
    }

    public function getDetail($id){
        $sql = "SELECT `orders`.*, `buyers`.`name` FROM `orders` 
        JOIN `buyers` ON `buyers`.`id` = `orders`.`buyer_id` WHERE `orders`.`id` = ".$id;

        $result = mysqli_query($this->link, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function getBuyer($buyer_id){
        $sql = "SELECT name FROM buyers WHERE id =".$buyer_id;
        $result = mysqli_query($this->link, $sql);
        return mysqli_fetch_assoc($result);
    }

    public function getByBuyer($buyer_id){
        $sql = "SELECT orders.id, orders.description, orders.cost, orders.paid, buyers.name FROM orders LEFT JOIN buyers ON orders.buyer_id = buyers.id WHERE orders.buyer_id = ".$buyer_id;
        return mysqli_query($this->link, $sql);
    }

    public function getBuyers(){
        $sql = "SELECT * FROM buyers";
        return mysqli_query($this->link, $sql);
    }

    public function createOrder($description, $cost, $paid, $buyer_id){
        $sql = "INSERT INTO orders (`description`, `cost`, `paid`, `buyer_id`) VALUES ('$description', '$cost', '$paid', '$buyer_id')";
        return mysqli_query($this->link, $sql);
    }
}
