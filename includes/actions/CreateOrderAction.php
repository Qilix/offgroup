<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/Queries.php");

class CreateOrderAction{
    static $description;
    static $cost;
    static $paid;
    static $buyer_id;

    public function __construct()
    {
        self::$description = ($_POST['description']);
        self::$cost = ($_POST['cost']);
        self::$paid = ($_POST['paid']) === 'Да' ? 1 : 0;
        self::$buyer_id = ($_POST['buyer_id']);

    }

    public static function create(Queries $queries){
        $queries->createOrder(self::$description, (int)self::$cost, self::$paid, self::$buyer_id);
        header('Location:' . '/');
    }
}

$queries = new Queries();
new CreateOrderAction();
CreateOrderAction::create($queries);



