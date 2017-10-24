<?php
    function determinePalindrome($word){
        $reverseWord = "";
        for ($i = strlen($word); $i >= 0; $i--){
            $letter = $word[$i];
            $reverseWord .= $letter;
        }

        echo "reverseword = $reverseWord" . "</br>";
        echo "normal word = $word" . "</br>";

        if ($reverseWord == $word){
            echo "this is a palindrome";
        }

    }
determinePalindrome("kak");