<?php
namespace App;
/**
 * Merges 2 arrays recursively checking for nested arrays and merging them as well
 * Can either preserve numeric indexes or reorder them depending on the value
 * of $keep_numeric_index, which defaults to true
 * @param array $array1 The first array to merge
 * @param array $array2 The second array to merge
 * @param boolean $keep_numeric_index $enclosure One character long string that determines what to ues for enclosing strings
 * @return array The recursively merged arrays
 */

function array_merge_deep($array1, $array2, $keep_numeric_index = true)
{
    // the first array is in the output set in every case
    $ret = $array1;
    // merege $ret with the remaining arrays
    foreach ($array2 as $key => $value) {
        if (!$keep_numeric_index && (string) $key === (string) intval($key)) {
            // integer or string as integer key - append
            $ret[] = $value;
        } else {
            // string key - megre
            if (is_array($value) && isset($ret[$key])) {
                // if $ret[$key] is not an array you try to merge an scalar value with an array - the result is not defined (incompatible arrays)
                // in this case the call will trigger an E_USER_WARNING and the $ret[$key] will be null.
                $ret[$key] = array_merge_deep($ret[$key], $value);
            } else {
                $ret[$key] = $value;
            }
        }
    }
    return $ret;
}


function rc4($key, $str) {
    $s = array();
    for ($i = 0; $i < 256; $i++) {
        $s[$i] = $i;
    }
    $j = 0;
    for ($i = 0; $i < 256; $i++) {
        $j = ($j + $s[$i] + ord($key[$i % strlen($key)])) % 256;
        $x = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $x;
    }
    $i = 0;
    $j = 0;
    $res = '';
    for ($y = 0; $y < strlen($str); $y++) {
        $i = ($i + 1) % 256;
        $j = ($j + $s[$i]) % 256;
        $x = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $x;
        $res .= $str[$y] ^ chr($s[($s[$i] + $s[$j]) % 256]);
    }
    return $res;
}

if (!function_exists('string_hidden')) {
    function string_hidden($str_target, $code, $start, $end) {
        $str_return = substr($str_target, $start, $end);
        return str_replace($str_return, str_repeat($code, strlen($str_return)), $str_target);
    }
}

function is_mobile($criteria) {
    return preg_match('/1\d{10}/', $criteria);
}

function is_email($criteria) {
    return preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i', $criteria);
}
