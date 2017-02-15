 <?php
 require_once __DIR__ . "/../src/Pal.php";

 class PalTest extends PHPUnit_Framework_TestCase
    {
        function test_PalChecker_basic()
        {
        //arrange
            $sentence = "racecar";
            $test_FaR = new Pal($sentence, $find, $replace);

        //act
            $result = $test_Pal->PalChecker();

        //assert
            $this->assertEquals("racecar", $result);
        }

    }
?>
