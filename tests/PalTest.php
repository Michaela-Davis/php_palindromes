 <?php
 require_once __DIR__ . "/../src/Pal.php";

 class PalTest extends PHPUnit_Framework_TestCase
    {
        function test_PalChecker_true()
        {
        //arrange
            $word = "racecar";
            $test_Pal = new Pal($word);

        //act
            $result = $test_Pal->PalChecker();

        //assert
            $this->assertEquals(true, $result);
        }

        function test_PalChecker_false()
        {
        //arrange
            $word = "delight";
            $test_Pal = new Pal($word);

        //act
            $result = $test_Pal->PalChecker();

        //assert
            $this->assertEquals(false, $result);
        }

    }
?>
