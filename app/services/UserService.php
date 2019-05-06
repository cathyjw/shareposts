<?php
    require_once 'IUserService.php';
    class UserService implements IUserService
    {
      public function AddUser($data)
      {   
          require_once '../app/services/Factory.php';
          //factory.createuser.addUser()
          call_user_func('Factory' .'::AddUser', $data);
      }
    }

