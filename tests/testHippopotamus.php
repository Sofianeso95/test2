<?php

use PHPUnit\Framework\TestCase;
require 'hippopotamus.php';
class testHippopotamus extends TestCase
{

public function testFight(): void

{
$hippo1 = new Hippopotamus("Hippo 1", 800, 20);
$hippo2 = new Hippopotamus("Hippo 2", 750, 18);

$winner = $hippo1->fight($hippo2);

$this->assertSame("Hippo 1 a gagné le combat", $winner);

}
    
    }
?>
