<?php
    require_once "src/Counter.php";
    class CounterTest extends PHPUnit_Framework_TestCase
    {
        function test_Counter_one_match()
        {
        // Arrange
        $search_string = "cat";
        $phrase_to_search = "The internet loves the cat.";
        $test_case = new Counter($search_string,$phrase_to_search);

        //Act
        $result = $test_case->getMatchCount();
        //assert
        $this->assertEquals(1,$result);
        }

        // if this test passes, it will also verify that partial mathces are not being returned.
        function test_Counter_multiple_match()
        {
        // Arrange
        $search_string = "cat";
        $phrase_to_search = "The internet loves the cat.  Cat videos, cat merchandise, cat apparel and catalogs of cat behavior.";
        $test_case = new Counter($search_string,$phrase_to_search);

        //Act
        $result = $test_case->getMatchCount();
        //assert
        $this->assertEquals(5,$result);
        }


    }

?>
