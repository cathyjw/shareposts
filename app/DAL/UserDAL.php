<?php
    require_once 'IUserDAL.php';
    class UserDAL implements IUserDAL
    {
        public function AddUser($data){
            echo $data;
            $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
            // Bind values
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);

            // Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
        }
    }
