<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_SimpleScrabbleWord()
        {
            $test_ScrabbleWord = new Scrabble;
            $input = "a";

            $result = $test_ScrabbleWord->scrabbleScore($input);

            $this->assertEquals(1, $result);
        }
        function test_ScrabbleWord()
        {
            $test_ScrabbleWord = new Scrabble;
            $input = "OOZ";

            $result = $test_ScrabbleWord->scrabbleScore($input);

            $this->assertEquals(12, $result);
        }
        function test_ScrabbleWordFuck()
        {
            $test_ScrabbleWord = new Scrabble;
            $input = "fuckyou";

            $result = $test_ScrabbleWord->scrabbleScore($input);

            $this->assertEquals(19, $result);
        }
    }



?>
