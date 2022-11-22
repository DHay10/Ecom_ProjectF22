<?php
namespace app\models;

class admin extends \app\core\Model{
    public function insert(){
		$SQL = "INSERT INTO admin(username, password_hash) VALUES (:username, :password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute([
						'username'=>$this->username,
						'password_hash'=>$this->password_hash
						]);
	}


}