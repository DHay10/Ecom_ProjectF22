<?php
	namespace app\controllers;
	class Main extends \app\core\Controller{
		
		// Home Page
		public function index(){
			$this->view('Main/index');
		}

		// User Login Page
		// saq's page load test functions!! can delete at the end
		public function login(){
			$this->view('User/index');
		}

		// User Register Page
		public function userRegister(){
			//$this->view('User/register');

		
			if(isset($_POST['action'])) {
				if($_POST['password'] == $_POST['password_confirm']) {
					$user = new \app\models\User();
					$check = $user->get($_POST['username']);
					if(!$check) {
						$user->name = $_POST['name'];
						$user->username = $_POST['username'];
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
			}else{
				$this->view('User/register');
			}
		
		}
		public function adminRegister(){
			//$this->view('User/register');

		
			if(isset($_POST['action'])) {
				if($_POST['password'] == $_POST['password_confirm']) {
					$user = new \app\models\Admin();
					$check = false;
					if(!$check) {
						$user->username = $_POST['username'];
						$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	
						$user->insert();
						header('location:/User/index');
					} else {
						header('location:/User/register?error=The username "'.$_POST['username'].'" is already in use. Select another.');
					}
				} else {
					header('location:/User/register?error=Passwords do not match.');
				}
			}else{
				$this->view('Admin/register');
			}
		
		}

		// Admin Login Page
		public function adminLogin() {
			$this->view('Admin/login');
		}

		

	}