<?php
namespace app\models;

class Wishlist_Items extends \app\core\Model {

    public function insert() {
        $SQL = "INSERT INTO wishlist_items(wishlist_id, product_id) VALUES (:wishlist_id, :product_id)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['wishlist_id'=>$this->wishlist_id,
                        'product_id'=>$this->product_id]);
    }

    public function delete($product_id) {
        $SQL = "DELETE FROM wishlist_items WHERE wishlist_id=:wishlist_id AND product_id=:product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['wishlist_id'=>$_SESSION['wishlist_id'],
                        'product_id'=>$product_id]);
    }

    public function getInstanceInWishlist($product_id) {
        $SQL = "SELECT * FROM wishlist_items WHERE wishlist_id=:wishlist_id AND product_id=:product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['wishlist_id'=>$_SESSION['wishlist_id'],
                        'product_id'=>$product_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Wishlist_Items');
        return $STMT->fetch();
    }

    public function getByWishlistID($wishlist_id) {
        $SQL = "SELECT * FROM wishlist_items WHERE wishlist_id=:wishlist_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['wishlist_id'=>$wishlist_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Wishlist_Items');
        return $STMT->fetchAll();
    }

}