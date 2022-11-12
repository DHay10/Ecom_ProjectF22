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
		$this->view('User/register');
	}

}