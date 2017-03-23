<?php
    class Scrabble
    {
        function scrabbleScore($user_word)
        {
            $score_array = array(array(""),array("A","E","I","O","U","L","N","R","S","T"),array("D","G"),array("B","C","M","P"),array("F","H","V","W","Y"),array("K"),array(""),array(""),array("J","X"),array(""),array("Q","Z"));

            $upper = strtoupper($user_word);
            $user_input_array = str_split($upper);
            $points = 0;

            foreach ($user_input_array as $letter)
            {
                foreach ($score_array as $index=>$value)
                {
                    if (in_array($letter, $value)) {
                         $points += $index;
                    }
                }
            }
              return $points;
        }
    }


?>
