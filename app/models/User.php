<?php
namespace app\models;

class User extends \app\core\Model{
	public function get($username){
		$SQL = "SELECT * FROM user WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}
	
	public function insert(){
		$SQL = "INSERT INTO user(name, username, password_hash, email, phone) VALUES (:name, :username, :password_hash, :email, :phone)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['name'=>$this->name,
						'username'=>$this->username,
						'password_hash'=>$this->password_hash,
						'email'=>$this->email,
						'phone'=>$this->phone,
						]);
	}

	
}