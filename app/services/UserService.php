<?php
    require_once 'IUserService.php';
    require_once 'Factory.php';
    
    class UserService implements IUserService
    {
        public function AddUser($data) {   
            
            return Factory::AddUser($data)->AddUser();
            
        }
      
        public function Login($email, $password) {   
            
            return Factory::Login($email, $password)->Login();
          
        }

        public function FindUserByEmail($email) {   

            return Factory::FindUserByEmail($email)->FindUserByEmail();

        }

        public function GetUserById($id) {   

            return Factory::GetUserById($id)->GetUserById();
            
        }
    }