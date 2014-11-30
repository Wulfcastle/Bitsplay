<?php
function checkMyResult($tx, $seed, $gamename, $mess = "null") {
    $hash = sha1($tx.$seed.$gamename.$mess);
    
    $value = substr($hash, 0, 10);
    $dice = round(hexdec($value)/4294967295,5);
    
    echo "{$hash} - {$dice}";
}
?>