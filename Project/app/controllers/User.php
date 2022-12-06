<?php
namespace app\controllers;

class User extends \app\core\Controller {

	// User Login Page
	public function index() {
		if(isset($_POST['action'])) {
			$user = new \app\models\User();
			$user = $user->get($_POST['username']);

			if(password_verify($_POST['password'], $user->password_hash)) {
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['username'] = $user->username;
				$_SESSION['name'] = $user->name;
				$_SESSION['email'] = $user->email;
				$_SESSION['phone'] = $user->phone;

				$wishlist = new \app\models\Wishlist();
				$checkWL = $wishlist->getByUserID($_SESSION['user_id']);
				if (!$checkWL) {
					$wishlist->user_id = $_SESSION['user_id'];
					$wishlist->insert();
					$wishlist->getByUserID($_SESSION['user_id']);
				}
				$wishlist = $wishlist->getByUserID($_SESSION['user_id']);
				$_SESSION['wishlist_id'] = $wishlist->wishlist_id;

				header('location:/User/profile');
			} else {
				header('location:/User/index?error=Wrong Username/Password Combination!');
			}
		} else {
			$this->view('User/index');
		}
	}

	#[\app\filters\User]
	public function profile() {
		$user = new \app\models\User();
		$user = $user->getByID($_SESSION['user_id']);
		if (isset($_POST['action'])) {
			$user->email = $_POST['email'];
			$user->phone = $_POST['phone'];
			$user->updateProfile();
			$_SESSION['email'] = $user->email;
			$_SESSION['phone'] = $user->phone;
			header('location:/User/profile?message=Profile has been Updated!');
		} else {
			$this->view('User/profile');
		}
	}

	public function register(){
		if(isset($_POST['action'])) {
			if($_POST['password'] == $_POST['password_conf']) {
				$user = new \app\models\User();
				$checkUser = $user->get($_POST['username']);
				if(!$checkUser) {
					$user->username = $_POST['username'];
					$user->name = $_POST['name'];
					$user->email = $_POST['email'];
					$user->phone = $_POST['phone'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$user->insert();
					header('location:/User/index');
				} else {
					header('location:/User/register?error=The username "'.$_POST['username'].'" is already in use. Select another.');
				}
			} else {
				header('location:/User/register?error=Passwords do not match.');
			}
		} else {
			$this->view('User/register');
		}
	}

	// User Logout
	public function logout() {
		session_destroy();
		header('location:/User/index');
	}

	#[\app\filters\User]
	public function orders() {
		$this->view('User/orders');
	}

	#[\app\filters\User]
	public function wishlist() {
		$wishlist_items = new \app\models\Wishlist_Items();
		$wishlist_items = $wishlist_items->getByWishlistID($_SESSION['wishlist_id']);
		$this->view('User/wishlist', $wishlist_items);
	}

	#[\app\filters\User]
	public function cart() {
		// $product = new \app\models\Product();
		// $products = array();
		// foreach ($_SESSION['cart'] as $product_id) {
		// 	$product = $product->getByID($product_id);
		// 	array_push($products, $product);
		// }

		$user = new \app\models\User();
        $user = $user->getByID($_SESSION['user_id']);
		$order = new \app\models\Order_table();
		$order = $order->getAllOrder($user->user_id);
		//var_dump($order);
		$this->view('User/cart', $order);
	}

	public function checkout() {


		if(isset($_POST['action'])) {
		$user = new \app\models\User();
        $user = $user->getByID($_SESSION['user_id']);
		$order = new \app\models\Order_table();
		$order = $order->getAllOrder($user->user_id);
		var_dump($order);
		$checkout = new \app\models\Order_detail();
		$checkout->order_id = $order->order_id;
		$checkout->user_id = $user->user_id;

		foreach ($data as $order){
			$totalprice = $order->unit_price;
			var_dump($totalprice);

		}
		//$checkout->total = 


			
		}else{
			$this->view('User/cart');
		}
	}

	public function checkMessage(){
		
		$message = new \app\models\Service_Request();
		$message = $message->getByUserID($_SESSION['user_id']);
		$this->view('User/checkMessage', $message);
	}

	public function messageDetail($request_id){ 
		$user = new \app\models\User();
		$request = new \app\models\Service_Request();
		$request = $request->getById($request_id);
		$user = $user->getById($request->user_id);
		//var_dump($user);
		
		$this->view('User/messageDetail',  ['request'=>$request, 'user'=>$user]);
	}

	public function messageReply($request_id){


		$user = new \app\models\User();
		$request = new \app\models\Service_Request();
		$request = $request->getById($request_id);
		$user = $user->getById($request->user_id);
		//var_dump($user);
		$userMessage = $request->content;
		$spacingReply = "Your Reply: ";
		$spacingold = "        |                    Admin Message: ";
		if(isset($_POST['action'])){
			$request->content = $spacingReply . $_POST['content'] . $spacingold . $userMessage;
			$request->reply = 'Replied';
			$request->update();
			header('location:/User/checkMessage');
		}
		$this->view('User/messageReply',  ['request'=>$request, 'user'=>$user]);
	}


	public function addAddress() {
		if (isset($_POST['action'])) {

		} else {
			$this->view('User/addAddress');
		}
	}
	
	public function editAddress() {
		if (isset($_POST['action'])) {

		} else {
			$this->view('User/editAddress');
		}
	}

	public function removeAddress() {
		$address = new \app\models\Address();
		
	}
}