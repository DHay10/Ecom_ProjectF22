<?php
namespace app\models;

class Order_Item extends \app\core\Model {

    public function insert() {
        $SQL = "INSERT INTO order_item(order_id, product_id, unit_price, qty) VALUES (:order_id, :product_id, :unit_price, :qty)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['order_id'=>$this->order_id,
                        'product_id'=>$this->product_id,
                        'unit_price'=>$this->unit_price,
                        'qty'=>$this->qty]);
    }

    public function getByID($order_item_id) {
        $SQL = "SELECT * FROM order_item WHERE order_item_id=:order_item_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['order_item_id'=>$order_item_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order_Item');
        return $STMT->fetch();
    }

    public function getAllByOrderID($order_id) {
        $SQL = "SELECT * FROM order_item WHERE order_id=:order_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['order_id'=>$order_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order_Item');
        return $STMT->fetchAll();
    }

}
