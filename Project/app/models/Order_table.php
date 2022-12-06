<?php
namespace app\models;

class Order_table extends \app\core\Model {
	public function insert(){
        $SQL = "INSERT INTO order_table(product_id, user_id, unit_price, total, qty, date) VALUES (:product_id, :user_id, :unit_price, :total, :qty,:date)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['product_id' =>$this->product_id,
                        'user_id' =>$this->user_id,
                        'unit_price' =>$this->unit_price,
                        'total' =>$this->total,
                        'qty' =>$this->qty,
                        'date' =>$this->date,
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

    public function getOrderbyId($product_id){
		$SQL = "SELECT * FROM order_table WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		//run some code to return the results
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order_table');
		return $STMT->fetch();
	}

    public function delete(){
		$SQL = "DELETE FROM order_table WHERE product_id=:product_id";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['product_id'=>$this->product_id]);
	}
}