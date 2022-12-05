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
				// $wishlist = new \app\models\Wishlist();
				// if ($wishlist->getByUserID($user->user_id) == null) {
				// 	$wishlist->user_id = $_SESSION['user_id'];
				// 	$wishlist->insert();
				// }
				header('location:/User/profile');
			} else {
				header('location:/User/index?error=Wrong Username/Password Combination!');
			}
		} else {
			$this->view('User/index');
		}
	}

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
				$check = $user->get($_POST['username']);
				if(!$check) {
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

	public function orders() {
		$this->view('User/orders');
	}

	public function wishlist() {
		$this->view('User/wishlist');
	}

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


			
		}
	}




}