<?php
    require_once 'IUserDAL.php';
    
    class UserDAL implements IUserDAL {
        private $db;
        private $data;
        private $email;
        private $password;
        private $id;
        
        public function __construct($data, $email, $password, $id){
            $this->db = Database::instance();
   
            $this->data = $data;
            $this->email=$email;
            $this->password=$password;
            $this->id=$id;
        }
        
        public function AddUser(){
            
            $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
            // Bind values            
            $this->db->bind(':name', $this->data['name']);
            $this->db->bind(':email', $this->data['email']);
            $this->db->bind(':password', $this->data['password']);

            // Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
        }
        
        public function Login() {   
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind(':email', $this->email);

            $row = $this->db->single();

            $hashed_password = $row->password;
            if(password_verify($this->password, $hashed_password)){
              return $row;
            } else {
              return false;
            }
        }
      
        public function FindUserByEmail() {   

            $this->db->query('SELECT * FROM users WHERE email = :email');
            // Bind value
            $this->db->bind(':email', $this->email);

            $row = $this->db->single();

            // Check row
            if($this->db->rowCount() > 0){
              return true;
            } else {
              return false;
            }
        }

        public function GetUserById() {   
            $this->db->query('SELECT * FROM users WHERE id = :id');
            // Bind value
            $this->db->bind(':id', $this->id);

            $row = $this->db->single();

            return $row;
        }
    }
