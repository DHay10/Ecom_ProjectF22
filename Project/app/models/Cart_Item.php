<?php
namespace app\models;

class Cart_Item extends \app\core\Model {

    public function insert() {
        $SQL = "INSERT INTO cart_item(cart_id, product_id, qty) VALUES (:cart_id, :product_id, :qty)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['cart_id'=>$_SESSION['cart_id'],
                        'product_id'=>$this->product_id,
                        'qty'=>$this->qty]);
    }

    public function getByID($cart_item_id) {
        $SQL = "SELECT * FROM cart_item WHERE cart_item_id=:cart_item_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['cart_item_id'=>$cart_item_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart_Item');
        return $STMT->fetch();
    }

    public function getAllByCartID() {
        $SQL = "SELECT * FROM cart_item WHERE cart_id=:cart_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['cart_id'=>$_SESSION['cart_id']]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart_Item');
        return $STMT->fetchAll();
    }

    public function getProductInCart($product_id) {
        $SQL = "SELECT * FROM cart_item WHERE cart_id=:cart_id AND product_id=:product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['cart_id'=>$_SESSION['cart_id'],
                        'product_id'=>$product_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart_Item');
        return $STMT->fetch();
    }

    public function update() {
        $SQL = "UPDATE cart_item SET qty=:qty WHERE product_id=:product_id AND cart_id=:cart_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['qty'=>$this->qty,
						'product_id'=>$this->product_id,
						'cart_id'=>$_SESSION['cart_id']]);
    }

    public function delete($product_id) {
        $SQL = "DELETE FROM cart_item WHERE cart_id=:cart_id AND product_id=:product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['cart_id'=>$_SESSION['cart_id'],
                        'product_id'=>$product_id]);
    }

    public function deleteFromCart() {
        $SQL = "DELETE FROM cart_item WHERE cart_item_id=:cart_item_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['cart_item_id'=>$this->cart_item_id]);
    }
}