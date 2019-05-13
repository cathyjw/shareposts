<?php
  require_once APPROOT . '/services/UserService.php';
  
  class User{

    // Regsiter user
    public function register($data){
        return call_user_func_array(array('UserService', 'AddUser'), array($data));
        
    }

    // Login User
    public function login($email, $password){
        
        return call_user_func_array(array('UserService', 'Login'), array($email, $password));
    }

    // Find user by email
    public function findUserByEmail($email){
        
        return call_user_func_array(array('UserService', 'FindUserByEmail'), array($email));
        
    }

    // Get User by ID
    public function getUserById($id){
       
        return call_user_func_array(array('UserService', 'GetUserById'), array($id));
        
//      $result = call_user_func(array('UserService', 'GetUserById'), array($id));
//      return $result;
      
//        $this->db->query('SELECT * FROM users WHERE id = :id');
//      // Bind value
//        $this->db->bind(':id', $id);
//
//      $row = $this->db->single();
//
//      return $row;
    }
  }