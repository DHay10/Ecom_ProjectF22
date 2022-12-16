<?php
namespace app\controllers;
class Admin extends \app\core\Controller{
	
	// Dashboard Page
	#[\app\filters\Admin]
	public function index() {
		$this->view('Admin/index');
	}

	// Admin Login Page
	public function login() {
		if(isset($_POST['action'])) {
			$admin = new \app\models\Admin();
			$admin = $admin->get($_POST['username']);

			if(password_verify($_POST['password'], $admin->password_hash)) {
				$_SESSION['admin_id'] = $admin->admin_id;
				header('location:/Admin/index');
			} else {
				header('location:/Admin/login?error=Wrong Username/Password Combination!');
			}
		} else {
			$this->view('Admin/login');
		}
	}

	// Admin Logout
	#[\app\filters\Admin]
	public function logout() {
		session_destroy();
		header('location:/Admin/login?message=Successfully Logged Out');
	}

	// Add Product
	#[\app\filters\Admin]
	public function addProduct() {
		if(isset($_POST['action'])) {
			$newProduct = new \app\models\Product();
			$newProduct->product_name = $_POST['product_name'];
			$newProduct->price = $_POST['price'];
			$newProduct->description = $_POST['description'];
			if(isset($_POST['is_featured']) == "on"){
				$newProduct->is_featured = 1;
			}else{
				$newProduct->is_featured = 0;
			}
			$newProduct->category_id = $_POST['category_id'];
			$filename = $this->saveFile($_FILES['product_image']);
			$newProduct->product_image = $filename;
			$newProduct->insert();
			header('location:/Admin/productList');
		} else {
			$category = new \app\models\Category();
			$category = $category->getCategories();
			$this->view('Admin/addProduct', $category);
		}
	}

	// Remove Product
	#[\app\filters\Admin]
	public function delete($product_id) {
		$product = new \app\models\Product();
		$product = $product->getProductbyId($product_id);
		unlink("images/$product->product_image");
		$product->product_id = $product_id;
		$product->delete();
		header('location:/Admin/productList');
	}
	
	// View Products List
	#[\app\filters\Admin]
	public function productList() {
		$product = new \app\models\Product();
		$product = $product->getAll();
		$this->view('Admin/productList', $product);
	}

	// View Orders List
	#[\app\filters\Admin]
	public function viewOrders() {
		$order = new \app\models\Order();
		$orders = $order->getAll();
		$this->view('Admin/viewOrders', $orders);
	}

	// Update Order Status
	#[\app\filters\Admin]
	public function updateOrderStatus($order_id) {
		$order = new \app\models\Order();
		$order = $order->getByID($order_id);
		switch($order->status) {
			case 'Paid':
				$order->status = 'Processing';
				break;
			case 'Processing':
				$order->status = 'Delivered';
				break;
			case 'Delivered':
				$order->status = 'Completed';
				break;
		}
		$order->updateStatus();
		header('location:/Admin/viewOrders?message=Order has been Updated Successfully');
	}

	// View Order Details
	#[\app\filters\Admin]
	public function orderDetails($order_id) {
		$order = new \app\models\Order();
		$order = $order->getByID($order_id);
		$this->view('Admin/orderDetails', $order);
	}

	// Service request List
	#[\app\filters\Admin]
	public function serviceRequests(){
		$message = new \app\models\Service_Request();
		$message = $message->getAll();
		$this->view('Admin/serviceRequests', $message);
	}

	// Service request Detail
	#[\app\filters\Admin]
	public function SeDetail($request_id){
		$user = new \app\models\User();
		$request = new \app\models\Service_Request();
		$request = $request->getById($request_id);
		$user = $user->getById($request->user_id);
		//var_dump($user);
		
		$this->view('Admin/SeDetail',  ['request'=>$request, 'user'=>$user]);
	}

	// Service request Reply
	#[\app\filters\Admin]
	public function SeReply($request_id){
		$user = new \app\models\User();
		$request = new \app\models\Service_Request();
		$request = $request->getById($request_id);
		$user = $user->getById($request->user_id);
		//var_dump($user);
		$userMessage = $request->content;
		$spacingReply = "Admin Reply: ";
		$spacingold = "         |                    Your Message: ";
		if(isset($_POST['action'])){
			$request->content = $spacingReply . $_POST['content'] . $spacingold . $userMessage;
			$request->reply = 'Replied';
			$request->update();
			header('location:/Admin/serviceRequests');
		}			
		$this->view('Admin/SeReply',  ['request'=>$request, 'user'=>$user]);
	}

	// Service Request Delete
	#[\app\filters\Admin]
	public function deleteSE($request_id) {
		$request = new \app\models\Service_Request();
		$request = $request->getByID($request_id);
		$request->request_id = $request_id;
		$request->delete();
		header('location:/Admin/serviceRequests');
	}
}
