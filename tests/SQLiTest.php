<?php

use PHPUnit\Framework\TestCase;

class SQLiTest extends TestCase {
    public function test_connect_to_database() {
        $conection = mysql_connect('localhost', 'root', 'password');
        $this->assertTrue($conection);
    }
}
