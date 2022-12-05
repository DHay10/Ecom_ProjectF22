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

        // Contact Us page
        #[\app\filters\User]
        public function contactUs() {
            if(isset($_POST['action'])){
                $user = new \app\models\User();
                $user = $user->getById($_SESSION['user_id']);
                $message = new \app\models\Service_Request();
                $message->user_id = $user->user_id;
                $message->subject = $_POST['subject'];
                $message->content = $_POST['content'];
                $message->insert();
                header('location:/Main/contactUs?message=Message has been sent!');
            } else {
                $this->view('Main/contactUs');
            }
        }

	}