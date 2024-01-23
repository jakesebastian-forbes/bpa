<?php


function getSubstringBetween($string, $start, $end) {
    $startPos = strpos($string, $start);
    $endPos = strpos($string, $end, $startPos + strlen($start) + 1);

    if ($startPos !== false && $endPos !== false) {
        $substring = substr($string, $startPos + strlen($start), $endPos - $startPos - strlen($start));
        return $substring;
    }

    return false; // Return false if start or end not found
}

?>