<?php

    require_once '../app/DAL/UserDAL.php';
    require_once '../app/DAL/PostDAL.php';

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
            return new UserDAL(NULL, NULL, NULL, $id);
        }

        Public static function GetPosts(){
            return new PostDAL(NULL, NULL);
        }

        Public static function AddPost($data){
            return new PostDAL($data, NULL);
        }

        Public static function UpdatePost($data){
            return new PostDAL($data, NULL);
        }

        Public static function GetPostById($id){
            return new PostDAL(NULL, $id);
        }

        Public static function DeletePost($id){
            return new PostDAL(NULL, $id);
        }
    }
