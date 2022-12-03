<?php
namespace app\controllers;
class Product extends \app\core\Controller {
	
    // Products Page
    public function index() {
        $product = new \app\models\Product();
        $products = $product->getAll();
		$this->view('Product/index', $products);
	}
	
    // Product Detail Page for admin
	public function details($product_id) {
		$product = new \app\models\Product();
        $category = new \app\models\Category();
        $product = $product->getProductbyId($product_id);
        $category = $category->getCategories();
        $this->view('Product/adminProductDetail',  ['category'=>$category, 'product'=>$product]);
	}

    // Product Detail Page for user
	public function userProductDetails($product_id) {
		$product = new \app\models\Product();
        $product = $product->getProductbyId($product_id);
        $category = new \app\models\Category();
        $category = $category->getByID($product->category_id);
        $review = new \app\models\Review();
        $reviews = $review->getAllByProductID($product_id); 
        $this->view('Product/userProductDetails', ['product'=>$product, 'category'=>$category, 'reviews'=>$reviews]);
	}

    // Add to wishlist
    #[\app\filters\User]
    public function addToWishlist($product_id) {
        $wishlist = new \app\models\Wishlist();
        $wishlist = $wishlist->getByUserID($_SESSION['user_id']);
        $wishlist->addProduct($product_id);
    }

    // Remove from wishlist
    #[\app\filters\User]
    public function removeFromWishlist($product_id) {
        $wishlist = new \app\models\Wishlist();
        $wishlist = $wishlist->getByUserID($_SESSION['user_id']);
        $wishlist->removeProduct($product_id);
    }

    // Review Product
    // Need to see if review and rate should be combined
    #[\app\filters\User]
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
    #[\app\filters\User]
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
    #[\app\filters\User]
    public function catalog() {
		$product = new \app\models\Product();
        $products = $product->getAll();
        $this->view('Product/catalog', $products);
    }

    public function byCategory($category_id) {
        $category = new \app\models\Category();
        $category = $category->getByID($category_id);
        $product = new \app\models\Product();
        $products = $product->getByCategory($category_id);

        $this->view('Product/byCategory', ['category'=>$category, 'products'=>$products]);
    }

    public function searchByName() {
        if(isset($_POST['search'])) {
            if (!$_POST['search']=="") {
                $product = new \app\models\Product();
                $search = $_POST['search'];
                $search = ltrim($search);
                $search = rtrim($search);
                $products = $product->searchByName($search);
                $this->view('Product/byName', ['products'=>$products, 'search'=>$search]);
            } else {
                header('location:/Product/index');
            }
            
        }
    }

    #[\app\filters\User]
    public function addToCart($product_id) {
        $product = new \app\models\Product();
        $product = $product->getProductbyId($product_id);
        $user = new \app\models\User();
        $user = $user->getByID($_SESSION['user_id']);
        $order = new \app\models\Order_table();
        $order->product_id = $product->product_id;
        $order->user_id = $user->user_id;
        $order->unit_price = $product->price;
        $order->qty = $_POST['quantity'];
        $order->total= $product->price*$_POST['quantity'];
        $order->date = date("Y/m/d");
        $order->insert();
        //var_dump($order);

        // var_dump($product);
        // array_push($_SESSION['cart'], $product);
        // var_dump($_SESSION['cart']);
        // header('location:/Product/userProductDetails/' . $product_id . '?message=Profile has been Updated!');
    }


    #[\app\filters\User]
    public function addReview($product_id) {
        if (isset($_POST['action'])) {
            $review = new \app\models\Review();
            $review->user_id = $_SESSION['user_id'];
            $review->product_id = $product_id;
            $review->comment = $_POST['comment'];
            $review->date = date('Y-m-d H:i:s');
            $review->rating = $_POST['rating'];
            $review->insert();
            header('location:/Product/userProductDetails/' . $product_id);
        } else {
            $this->view('Product/addReview');
        }
    }

    #[\app\filters\User]
    public function editReview($review_id) {
        $review = new \app\models\Review();
        $review = $review->get($review_id);
        if (isset($_POST['action'])) {
            $review->comment = $_POST['comment'];
            $review->rating = $_POST['rating'];
            $review->update();
            header('location:/Product/userProductDetails/' . $review->product_id);
        } else {
            $this->view('Product/editReview', $review);
        }
    }
}