<?php
namespace app\filters;

#[\Attribute]
class Admin extends \app\core\AccessFilter {
    public function execute(){
        if(!isset($_SESSION['admin_id'])) {
            header('location:/Admin/login?error=You must be logged in to access this location.');
            return true;
        } else {
            return false;
        }
    }
}