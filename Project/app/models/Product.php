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

    public function getAll(){
		$SQL = "SELECT * FROM product";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

  public function getProductbyId($product_id){
		$SQL = "SELECT * FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		//run some code to return the results
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

    public function getByCategory($category_id) {
        $SQL = "SELECT * FROM product WHERE category_id=:category_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['category_id'=>$category_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
    }

	public function searchByName($search) {
        $SQL = "SELECT * FROM product WHERE product_name like :product_name";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_name'=>'%'.$search.'%']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
    }

    
	public function delete(){
		$SQL = "DELETE FROM product WHERE product_id=:product_id";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['product_id'=>$this->product_id]);
	}

	public function update() {
		$SQL = "UPDATE product SET product_name=:product_name,  price=:price, description=:description, is_featured:is_featured, category_id=:category_id, product_image:product_image WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_name' =>$this->product_name,
						'price' =>$this->price,
						'description' =>$this->description,
						'is_featured' =>$this->is_featured,
						'category_id' =>$this->category_id,	
						'product_image' =>$this->product_image]);

	}



}