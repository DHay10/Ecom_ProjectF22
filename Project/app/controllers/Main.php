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


	}