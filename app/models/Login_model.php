<?php

class Login_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($username, $password) {

        $query = "SELECT * FROM $this->table WHERE username = :username";

        $this->db->query($query);

        //Bind value
        $this->db->bind(':username', $username);
        
        $row = $this->db->single();
        
        if (!$row) {
            $resultPassword = '';
        }else {
            $resultPassword = $row->password;
        }        

        if ($password == $resultPassword) {
            return $row;
        } else {
            return false;
        }
    }
}
