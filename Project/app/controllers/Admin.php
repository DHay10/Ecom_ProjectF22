<?php
	namespace app\controllers;
	class Admin extends \app\core\Controller{
		
		#[\app\filters\Admin]
		public function index() {
			$this->view('Admin/index');
		}

		// Send Email Page
		#[\app\filters\Admin]
		public function sendEmail() {
			if(isset($_POST['action'])) {
				
			} else {
				$this->view('Admin/sendEmail');
			}
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
		public function logout() {
			session_destroy();
			header('location:/Admin/login');
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

		// Edit Product
		#[\app\filters\Admin]
		public function modify($product_id) {
			$product = new \app\models\Product();
			$product = $product->getProductbyId($product_id);
			$category = new \app\models\Category(); 
			$category = $category->getcategories();
			if(isset($_POST['action'])) {
				$product->product_name = $_POST['product_name'];
				$product->price = $_POST['price'];
				$product->description = $_POST['description'];
				$product->category_id = $_POST['category_id'];
				$filename = $this->saveFile($_FILES['profile_pic']);
					if($filename){
						//delete the old picture
						unlink("images/$product->product_image");
						//save the reference to the new one
						$product->product_image = $filename;
					}
				$product->update();
				header('location:/Admin/productList');
			} else {
				//$this->view('Product/details', ['category'=>$category, 'product'=>$product]);
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
	
			// $product = new \app\models\Product();
			// $product = $product->getProductbyId($product_id);

		}
		
		// View Products List
		#[\app\filters\Admin]
		public function productList() {
			$product = new \app\models\Product();
			$product = $product->getAll();
			$this->view('Admin/productList', $product);
		}

		// Track Sales
		#[\app\filters\Admin]
		public function trackSales($product_id) {
			$product = new \app\models\Product();
			$product = $product->get($product_id);

			$order = new \app\models\Order();
			$orders = $order->getAll();

			// !TODO
			$this->view('Admin/trackSales');
		}

		// View Orders List
		#[\app\filters\Admin]
		public function viewOrders() {
			$order = new \app\models\Order();
			$orders = $order->getAll();
			$this->view('Admin/viewOrders', $orders);
		}


		//service request
		#[\app\filters\Admin]
		public function serviceRequests(){
			$message = new \app\models\Service_Request();
			$message = $message->getAll();
			$this->view('Admin/serviceRequests', $message);
		}

		public function SeDetail($request_id){
			$user = new \app\models\User();
			$request = new \app\models\Service_Request();
			$request = $request->getById($request_id);
			$user = $user->getById($request->user_id);
			//var_dump($user);
			
			$this->view('Admin/SeDetail',  ['request'=>$request, 'user'=>$user]);
		}

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

		#[\app\filters\Admin]
		public function deleteSE($request_id) {
			$request = new \app\models\Service_Request();
			$request = $request->getByID($request_id);
			$request->request_id = $request_id;
			$request->delete();
			header('location:/Admin/serviceRequests');
		}

		public function orders() {
			$cart_item = new \app\models\Cart_Item();
			$cart_items = $cart_item->getAllByCartIDstatusPaidAdmin();
			$this->view('Admin/orders', $cart_items);
		}


	}