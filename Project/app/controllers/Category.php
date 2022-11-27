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