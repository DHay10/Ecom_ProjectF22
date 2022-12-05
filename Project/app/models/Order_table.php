<?php
namespace app\models;

class Order_table extends \app\core\Model {
	public function insert(){
        $SQL = "INSERT INTO order_table(order_id, user_id, total) VALUES (:order_id, :user_id)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['order_id' =>$this->order_id,
                        'user_id' =>$this->user_id,
                        'total' =>$this->total
                    ]);
    }

    //show all items from cart
    public function getAllOrder($user_id){
        $SQL = "SELECT * FROM order_table where user_id = :user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order_table');
		return $STMT->fetchAll();
    }




}