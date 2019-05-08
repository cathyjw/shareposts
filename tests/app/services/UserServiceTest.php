<?php 
use 'D:/BobydoInc/Website/website_shareposts/shareposts/app/services/UserService.php';
require_once 'D:/BobydoInc/Website/websiteShareposts/shareposts/app/services/Factory.php';
require_once 'D:/BobydoInc/Website/websiteShareposts/shareposts/app/DAL/UserDAL.php';
require_once 'D:/BobydoInc/Website/websiteShareposts/shareposts/app/DAL/PostDAL.php';
require_once 'D:/BobydoInc/Website/websiteShareposts/shareposts/app/DAL/IUserDAL.php';
require_once 'D:/BobydoInc/Website/websiteShareposts/shareposts/app/DAL/IPostDAL.php';



/**
 * Generated by PHPUnit_SkeletonGenerator on 2019-05-08 at 23:16:41.
 */
class UserServiceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var UserService
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new UserService;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
//    protected function tearDown()
//    {
//    }

    /**
     * @covers UserService::AddUser
     * @todo   Implement testAddUser().
     */
    public function testAddUser()
    {
        // Remove the following lines when you implement this test.
        $test_data=[
                    'name' => 'cathy_test',
                    'email' => 'cathy_test@gmail.com',
                    'password' => 'test',
                    'confirm_password' => 'test',
                    ];
        $user = new UserService;
        $this->object->AddUser($test_data);
        $this->assertTrue($this->object->AddUser());
//        $this->markTestIncomplete(
//            'This test has not been implemented yet.'
//        );
    }

    /**
     * @covers UserService::Login
     * @todo   Implement testLogin().
     */
    public function testLogin()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers UserService::FindUserByEmail
     * @todo   Implement testFindUserByEmail().
     */
    public function testFindUserByEmail()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers UserService::GetUserById
     * @todo   Implement testGetUserById().
     */
    public function testGetUserById()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
