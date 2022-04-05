<?php
//Print Next Character Function
function PrintNextCharachter($letter)
{
    if($letter=="z"){
        return $nextLetter = "a"."<br>";
    }
    else {
        return $nextLetter = chr(ord($letter)+1)."<br>";
    }
    
    
}
echo PrintNextCharachter("a");

//----------------->
//Print URL number part
function SortURL($fullUrl)
{
    return $urlNumber = '"'.substr(strrchr($fullUrl, '/'), 1).'"';
}
echo SortURL("http://www.example.com/5478631");
?>