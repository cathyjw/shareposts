<?php
/**
 * Description of Factory
 *
 * @author Cathy
 */
require_once '../app/DAL/UserDAL.php';

class Factory {
    public static function AddUser($data) {
        
        return new UserDAL($data, NULL, NULL, NULL);
    }
    
    public static function Login($email, $password) {

        return new UserDAL(NULL, $email, $password, NULL);

    }
    
    public static function FindUserByEmail($email) {

        return new UserDAL(NULL, $email, NULL, NULL);
        
    }
    
    public static function GetUserById($id) {
//        require_once '../app/DAL/UserDAL.php';
        return new UserDAL(NULL, NULL, NULL, $id);
    }
}
