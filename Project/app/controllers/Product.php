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
        if (isset($_POST['action'])) {
            $product->product_name = $_POST['product_name'];
            $product->price = $_POST['price'];
            $product->description = $_POST['description'];
            $product->category_id = $_POST['category_id'];
            $filename = $this->saveFile($_FILES['product_image']);
                if($filename){
                    unlink("images/$product->product_image");
                    $product->product_image = $filename;
                }
            $product->update();
            header('location:/Product/details/' . $product_id . '?message= Edit Successful');
        }
        $this->view('Product/adminProductDetail',  ['category'=>$category, 'product'=>$product]);
	}

    // Remove from wishlist
    public function removeFromWishlist($product_id) {
        $wishlist = new \app\models\Wishlist();
        $wishlist = $wishlist->getByUserID($_SESSION['user_id']);
        $wishlist->removeProduct($product_id);
    }

    // Review Product
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

    // Search by Category
    public function byCategory($category_id) {
        $category = new \app\models\Category();
        $category = $category->getByID($category_id);
        $product = new \app\models\Product();
        $products = $product->getByCategory($category_id);

        $this->view('Product/byCategory', ['category'=>$category, 'products'=>$products]);
    }

    // Search by Name
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

    // Add to Cart
    #[\app\filters\User]
    public function addToCart($product_id) {
        $cart_item = new \app\models\Cart_Item();
        $check = $cart_item->getProductInCart($product_id);

        if ($check) {
            $cart_item = $cart_item->getProductInCart($product_id);
            $cart_item->qty = (int) $cart_item->qty + $_POST['quantity'];
            $cart_item->update(); 
        } else {
            $cart_item->cart_id = $_SESSION['cart_id'];
            $cart_item->product_id = $product_id;
            $cart_item->qty = $_POST['quantity'];
            $cart_item->insert();
        }

        header('location:/Product/userProductDetails/' . $product_id . '?message=Product(s) has been added to your Cart.');
    }

    // Remove From Cart
    #[\app\filters\User]
    public function removeFromCart($product_id){
        $cart_item = new \app\models\Cart_Item();
        $cart_item->delete($product_id);
        header('location:/User/cart?message=Product has been removed from cart');
    }

    // Update Product Qty
    #[\app\filters\User]
    public function cartUpdateQty($product_id) {
        $cart_item = new \app\models\Cart_Item();
        $cart_item = $cart_item->getByID($product_id);
        $cart_item->qty = $_POST['quantity'];
        // var_dump($cart_item->qty);
        $cart_item->update();
        header('location:/User/cart');
    }

    // Add a Review
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

    // Product Detail Page for user
    #[\app\filters\User]
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
        $wishlist_items = new \app\models\Wishlist_Items();
        $wishlist_items->wishlist_id = $_SESSION['wishlist_id'];
        $wishlist_items->product_id = $product_id;
        $wishlist_items->insert();
        header('location:/Product/userProductDetails/' . $product_id . '?message=Product as been added to your Wishlist.');
    }

    // Remove from wishlist in list
    #[\app\filters\User]
    public function removeFromWishlist01($product_id) {
        $wishlist_items = new \app\models\Wishlist_Items();
        $wishlist_items->delete($product_id);
        header('location:/User/wishlist?message=Product as been removed from your Wishlist.');
    }

    // Remove from wishlist in product details
    #[\app\filters\User]
    public function removeFromWishlist02($product_id) {
        $wishlist_items = new \app\models\Wishlist_Items();
        $wishlist_items->delete($product_id);
        header('location:/Product/userProductDetails/' . $product_id . '?message=Product as been removed from your Wishlist.');
    }

    // Catalog View
    #[\app\filters\User]
    public function catalog() {
		$product = new \app\models\Product();
        $products = $product->getAll();
        $this->view('Product/catalog', $products);
    }

    // Edit Review
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