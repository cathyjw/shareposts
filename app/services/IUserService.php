<?php

/**
 * Description of IUserService
 *
 * @author Jie
 */
interface IUserService {
    public function AddUser($data);
    public function Login($email, $password);
    public function FindUserByEmail($email);
    public function GetUserById($id);
}
