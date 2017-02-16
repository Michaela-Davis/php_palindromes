<?php
    class Pal
    {

        private $word;


        function __construct($user_input)
        {
        $this->word = $user_input;
    }

        function PalChecker()
        {

            $word = $this->word;
            $user_input = str_split($word);
            $wordlen = strlen($word);
            $result = array();
            for ($i = ($wordlen - 1); $i >= 0; $i--)
            {
                array_push($result, $user_input[$i]);
            }

            if ($user_input === $result)
            {
                return "true";
            }else {
                return "false";
            }
        }
    }

?>
