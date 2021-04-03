<?php 

class Logout {
    
    public function __construct()
    {        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['email']);
            header('location:' . BASEURL . '/login');            
        }else {
            header('location:' . BASEURL . '/dashboard');
        }
    }
    
}