<?php
    /**
    * @backupGlobals disabled
    * @backupAttributes disabled
    */

    require_once "src/Category.php";

    $server = 'mysql:host=localhost;dbname=to_do_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class CategoryTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Category::deleteAll();
        }

        function test_getName()
        {
            // Arrange
            $name = "work stuff";
            $test_Category = new Category($name);

            // Act
            $result = $test_Category->getName();

            // Assert
            $this->assertEquals($name, $result);
        }
    }
?>
