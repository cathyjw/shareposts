<?php

/**
 * Description of IUserService
 *
 * @author Jie
 */
// CathyWang2019-05-10 mock IUserService Login because Login touch the database but not implemented.
// email empty check... no mockup.
interface IUserService {
    public function AddUser($data);
    public function Login($email, $password);
    public function FindUserByEmail($email);
    public function GetUserById($id);
}
