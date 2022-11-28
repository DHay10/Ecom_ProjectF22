<?php
	namespace app\controllers;
	class Main extends \app\core\Controller {
		
		// Home Page
		public function index(){
			$this->view('Main/index');
		}

		public function aboutUs() {
            $this->view('Main/aboutUs');
        }

        public function faq() {
            $this->view('Main/faq');
        }

        public function contactUs() {
            $this->view('Main/contactUs');
        }


        // contact us page
        public function sendMessage(){
            if(isset($_POST['action'])){
                $user = new \app\models\User();
                $user = $user->getById($_SESSION['user_id']);
                $message = new \app\models\Service_Request();
                $message->user_id = $user->user_id;
                $message->subject = $_POST['subject'];
                $message->content = $_POST['content'];
                $message->insert();
                header('location:/Main/contactUs?error=Message has been sent!.');
            }
        }


	}