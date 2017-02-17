<?php
    require_once "src/Defaults.php";
    class DefaultsTest extends PHPUnit_Framework_TestCase
    {
        // testing that counter function accepts text from defaults and counts appropriately
        function test_Jabberwocky()
        {
        // Arrange
        $default = new Defaults();
        $test_case = new Counter("and",$default->getJabberwocky());

        //Act
        $result = $test_case->getMatchCount();
        //assert
        $this->assertEquals(8,$result);
        }

        function test_Gettysburg()
        {
        // Arrange
        $default = new Defaults();
        $test_case = new Counter("and",$default->getGettysburg());

        //Act
        $result = $test_case->getMatchCount();
        //assert
        $this->assertEquals(5,$result);
        }

        function test_Stairway()
        {
        // Arrange
        $default = new Defaults();
        $test_case = new Counter("and",$default->getStairway());

        //Act
        $result = $test_case->getMatchCount();
        //assert
        $this->assertEquals(5,$result);
        }




    }

?>
