<?php
/**
 * Description of Factory
 *
 * @author Cathy
 */
class Factory {
    public static function AddUser($data){
        require_once '../app/DAL/UserDAL.php';
        return new UserDAL($data);
    }
    
}
