<?php
namespace app\controllers;


class Main extends \app\core\Controller{
	public function index(){
		$this->view('Main/index');
	}


	// saq's page load test functions!! can delete at the end
	public function Login(){
		$this->view('User/index');
	}

	public function userRegister(){
		$this->view('User/register');
	}

}