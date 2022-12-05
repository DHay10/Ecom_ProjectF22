<?php
    namespace app\models;

    class Wishlist extends \app\core\Model {
    
        public function getByUserID($user_id) {
            $SQL = "SELECT * FROM wishlist WHERE user_id=:user_id";
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['user_id'=>$user_id]);
            $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
            return $STMT->fetch();
        }

        public function insert() {
            $SQL = "INSERT INTO wishlist(user_id) VALUES (:user_id)";
            $STMT = self::$_connection->prepare($SQL);
		    $STMT->execute(['user_id'=>$this->user_id]);
        }

        public function addProduct($product_id) {
            $SQL = "INSERT INTO wishlist(product_id) VALUES (:product_id) WHERE user_id=:user_id";
        }
    
    }