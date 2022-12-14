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

	public function update() {
		$SQL = "UPDATE service_request SET content=:content, reply=:reply WHERE request_id=:request_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['request_id'=>$this->request_id,
						'content'=>$this->content,
						'reply'=>$this->reply]);
	}

    public function getById($request_id){
		$SQL = "SELECT * FROM service_request WHERE request_id=:request_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['request_id'=>$request_id]);
		//run some code to return the results
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Service_Request');
		return $STMT->fetch();
	}

	public function getByUserId($user_id){
		$SQL = "SELECT * FROM service_request WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		//run some code to return the results
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Service_Request');
		return $STMT->fetchAll();
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