<?php
namespace app\models;
use mysqli;

class Order extends \app\core\Model {

    public function insert() {
        $SQL = "INSERT INTO order_table(user_id, total, date, status, address) 
                        VALUES (:user_id, :total, :date, :status, :address)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$this->user_id,
                        'total'=>$this->total,
                        'date'=>$this->date,
                        'status'=>$this->status,
                        'address'=>$this->address]);
        return self::$_connection->lastInsertID();
    }

    public function getByUserID($user_id) {
        $SQL = "SELECT * FROM order_table WHERE user_id=:user_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetchAll();
    }

    public function getAll() {
        $SQL = "SELECT * FROM order_table";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetchAll();
    }

    public function updateStatus() {
        $SQL = "UPDATE product SET status=:status WHERE order_id=:order_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>$this->status,
                        'order_id'=>$this->order_id]);
    }

}