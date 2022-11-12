<?php
namespace app\controllers;
class Product extends \app\core\Controller {
	
    // Products Page
    public function index() {
        $product = new \app\models\Product();
        $products = $product->getAll();
		$this->view('Product/index', $products);
	}
	
    // Product Detail Page
	public function details($product_id) {
		$product = new \app\models\Product();
        $product = $product->get($product_id);
        $this->view('Product/details', $product);
	}

    // Add Product
	public function add() {
        //TODO
		$this->view('Product/add');
	}

    // Edit Product
    public function modify($product_id) {
        //TODO
        $this->view('Product/edit');
    }

    // Remove Product
    public function delete($product_id) {
        $product = new \app\models\Product();
        $product = $product->get($product_id);
        //TODO
        /*
        if(isset($_POST['action'])) {
            if(password_verify($_POST['password'], $post->password_hash)) {
                $post->delete();
                header('location:/index');
            } else {
                header('location:/User/register?error=Password is wrong.');
            }
        } else {
            $this->view('delete', $post);
        } 
        */
        $this->view('delete', $product);

    }
}