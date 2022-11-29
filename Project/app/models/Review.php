<?php
    namespace app\models;

    class Review extends \app\core\Model {

        
        public function get($review_id) {
            $SQL = "SELECT * FROM review WHERE review_id=:review_id";
		    $STMT = self::$_connection->prepare($SQL);
		    $STMT->execute(['review_id'=>$review_id]);
		    $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		    return $STMT->fetch();
        }

        public function getByProduct($product_id) {
            $SQL = "SELECT * FROM review WHERE product_id=:product_id";
		    $STMT = self::$_connection->prepare($SQL);
		    $STMT->execute(['review_id'=>$product_id]);
		    $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Review');
		    return $STMT->fetch();
        }

        public function insert() {
            $SQL = "INSERT INTO review(product_id, comment, date, rating) VALUES (:product_id, :comment, :date, :rating)";
		    $STMT = self::$_connection->prepare($SQL);
		    $STMT->execute(['product_id'=>$this->product_id,
						    'comment'=>$this->comment,
						    'date'=>$this->date,
						    'rating'=>$this->rating]);
        }

        public function update() {
            $SQL = "UPDATE review SET comment=:comment, rating=:rating WHERE review_id=:review_id";
		    $STMT = self::$_connection->prepare($SQL);
		    $STMT->execute(['comment'=>$this->comment,
                            'rating'=>$this->rating]);
        }

        public function delete() {
            $SQL = "DELETE FROM review WHERE review_id=:review_id";
		    $STMT = self::$_connection->prepare($SQL);
		    $STMT->execute(['review_id'=>$this->review_id]);
        }

    }