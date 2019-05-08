<?php
    use PHPUnit\Framework\TestCase;
    class UserTest extends TestCase{
        public function testLogin(){
            $user = new \shareposts\app\services\Factory;
            
            $test_data=[
                        'name' => 'cathy_test',
                        'email' => 'cathy_test@gmail.com',
                        'password' => 'test',
                        'confirm_password' => 'test',
                        ];
            $user->AddUser($test_data);
            $this->assertTrue($user->AddUser());
                
        }
    }
