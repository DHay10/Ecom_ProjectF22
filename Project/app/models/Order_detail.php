<?php
namespace app\models;

class Order_detail extends \app\core\Model {

    public function insert(){
        $SQL = "INSERT INTO order_detail(order_id,user_id,total) VALUES (order_id, :user_id, :total)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['order_id' =>$this->order_id,
                        'user_id' =>$this->user_id,
                        'total' =>$this->total,
                    ]);
    }

    //show all items from cart
    public function getAllOrderDetails($user_id){
        $SQL = "SELECT * FROM order_detail where user_id = :user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order_detail');
		return $STMT->fetchAll();
    }



}
