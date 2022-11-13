<?php
	namespace app\controllers;
	class Admin extends \app\core\Controller{
		
		// Dashboard
		public function index() {
			$this->view('Admin/dashboard');
		}

		// Send Email Page
		public function sendEmail() {
			
            
            
            $this->view('Admin/sendEmail');
		}

		// User Register Page
		public function userRegister(){
			$this->view('User/register');
		}

		// Admin Login Page
		public function adminLogin() {
			$this->view('Admin/login');
		}

	}