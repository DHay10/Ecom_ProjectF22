<?php
namespace app\models;

class Address extends \app\core\Model {

    public function insert() {
        $SQL = "INSERT INTO address(street_number, street, city, postal_code, user_id) VALUES (:street_number, :street, :city, :postal_code, :user_id)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['street_number'=>$this->street_number,
                        'street'=>$this->street,
                        'city'=>$this->city,
                        'postal_code'=>$this->postal_code,
                        'user_id'=>$this->user_id]);
    }

    public function update() {
        $SQL = "UPDATE address SET street_number=:street_number, street=:street, city=:city, postal_code=:postal_code WHERE address_id=:address_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['street_number'=>$this->street_number,
                        'street'=>$this->street,
                        'city'=>$this->city,
                        'postal_code'=>$this->postal_code]);
    }

    public function delete() {
        $SQL = "DELETE FROM address WHERE address_id=:address_id";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['address_id'=>$this->address_id]);
    }

}