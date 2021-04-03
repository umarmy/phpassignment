<?php 

class Dashboard extends Controller {
    public function __construct()
    {
        if (!isset($_SESSION['user_id'])) {
            header('location:' . BASEURL . '/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->view('dashboard', $data);
    }
    
}