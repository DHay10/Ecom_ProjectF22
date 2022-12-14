<?php
namespace app\models;

class Order extends \app\core\Model {

    public function insert() {
        $SQL = "INSERT INTO order(user_id, total, date, address, status) VALUES (:user_id, :total, :date, :address, :status)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$this->user_id,
                        'total'=>$this->total,
                        'date'=>$this->date,
                        'address'=>$this->address,
                        'status'=>$this->status]);
    }

    public function getByUserID($user_id) {
        $SQL = "SELECT * FROM order WHERE user_id=:user_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Order');
        return $STMT->fetchAll();
    }

    public function getAll() {
        $SQL = "SELECT * FROM order";
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