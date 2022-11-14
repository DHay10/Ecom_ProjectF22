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
        if(isset($_POST['action'])) {
            $newProduct = new \app\models\Product();
            $newProduct->product_name = $_POST['product_name'];
            $newProduct->price = $_POST['price'];
            $newProduct->description = $_POST['description'];
            $newProduct->category_id = $_POST['category_id'];

            $newProduct->insert();
            header('location:/Admin/Dashboard');
        } else {
            $this->view('Product/add');
        }
	}

    // Edit Product
    public function modify($product_id) {
        if(isset($_POST['action'])) {
            $product = new \app\models\Product();
            $product = product->get($product_id);
            $product->product_name = $_POST['product_name'];
            $product->price = $_POST['price'];
            $product->description = $_POST['description'];
            $product->category_id = $_POST['category_id'];

            $product->update();
            header('location:/Admin/Dashboard');
        } else {
            $this->view('Product/edit');
        }
    }

    // Remove Product
    public function delete($product_id) {
        if(isset($_POST['action'])) {
            $product = new \app\models\Product();
            $product->product_id = $product_id;
            
            $product->delete();
            header('location:/Admin/Dashboard');
        } else {
            $this->view('Product/remove');
        }
    }

    // Add to shopping cart
    public function addToCart($product_id) {
        //TODO
        
    }

    // Add to wishlist
    public function addToWishlist($product_id) {
        $wishlist = new \app\models\Wishlist();
        $wishlist = $wishlist->getByUserID($_SESSION['user_id']);
        $wishlist->addProduct($product_id);
    }

    // Remove from wishlist
    public function removeFromWishlist($product_id) {
        $wishlist = new \app\models\Wishlist();
        $wishlist = $wishlist->getByUserID($_SESSION['user_id']);
        $wishlist->removeProduct($product_id);
    }

    // Review Product
    // Need to see if review and rate should be combined
    public function reviewProduct($product_id) {
        if(isset($_POST['action'])) {
            $review = new \app\models\Review();
            $review->comment = $_POST['comment'];
            $review->rating = $_POST['rating'];
            $review->date = date();
            $review->insert();
        } else {
            $this->view('Review/create');
        }
    }

    // Modify Review
    public function modifyReview($review_id) {
        if(isset($_POST['action'])) {
            $review = new \app\models\Review();
            $review->comment = $_POST['comment'];
            $review->rating = $_POST['rating'];
            $review->update();
        } else {
            $this->view('Review/create');
        }
    }

    // Catalog View
    public function catalog() {
		$product = new \app\models\Product();
        $products = $product->getAll();
        $this->view('Product/catalog', $products);
    }

}