<?php
namespace app\models;

class Cart extends \app\core\Model {

    public function insert() {
        $SQL = "INSERT INTO cart(user_id) VALUES (:user_id)";
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['user_id'=>$this->user_id]);
    }

    public function getByUserID($user_id) {
        $SQL = "SELECT * FROM cart WHERE user_id=:user_id";
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['user_id'=>$user_id]);
            $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
            return $STMT->fetch();
    }
    
    public function delete() {
        $SQL = "DELETE FROM cart WHERE cart_id=:cart_id";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['cart_id'=>$this->cart_id]);
    }
    
}