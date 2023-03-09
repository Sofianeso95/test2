<?php
use PHPUnit\Framework\TestCase;
require 'User.php';
class UserTest extends TestCase {
    public function testIsValid() {
        $user1 = new User('so@gmail.com', 'coco', 'so', 24);
        $this->assertTrue($user1->isValid());

        $user2 = new User('invalid_email', 'coco', 'so', 20);
        $this->assertFalse($user2->isValid());

        $user3 = new User('sam@ggmail.com', '', 'so', 40);
        $this->assertFalse($user3->isValid());

        $user4 = new User('so@gmail.com', 'coco', 'so', 12);
        $this->assertFalse($user4->isValid());
    }
}
?>