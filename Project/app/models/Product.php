<?php
namespace app\models;

class Product extends \app\core\Model {

    public function insert(){
        $SQL = "INSERT INTO product(product_name, price, description, is_featured, category_id, product_image) VALUES (:product_name, :price, :description, :is_featured, :category_id, :product_image)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['product_name' =>$this->product_name,
                        'price' =>$this->price,
                        'description' =>$this->description,
                        'is_featured' =>$this->is_featured,

                        'category_id' =>$this->category_id,
                        
                        'product_image' =>$this->product_image]);
    }


    public function getCategoryId(){
        $SQL = "SELECT * FROM category WHERE category_id = :category_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['category_id'=>$this->category_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Category');
		return $STMT->fetch();
    }



}