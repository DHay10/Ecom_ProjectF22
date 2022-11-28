<?php
namespace app\models;

class service_request extends \app\core\Model{

	public function insert(){
		$SQL = "INSERT INTO service_request(user_id, subject, content) VALUES (:user_id, :subject, :content)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'subject'=>$this->subject,
						'content'=>$this->content,
						]);
	}

    public function getById($request_id){
		$SQL = "SELECT * FROM service_request WHERE request_id=:request_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['request_id'=>$request_id]);
		//run some code to return the results
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Service_Request');
		return $STMT->fetch();
	}

    public function getAll(){
        $SQL = "SELECT * FROM service_request";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Service_Request');
		return $STMT->fetchAll();
    }

    public function delete(){
		$SQL = "DELETE FROM service_request WHERE request_id=:request_id";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['request_id'=>$this->request_id]);
	}
}