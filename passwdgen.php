<?php
/**
 * Generate a random string, using a cryptographically secure 
 * pseudorandom number generator (random_int)
 * 
 * For PHP 7, random_int is a PHP core function
 * 
 * @param int $length      How many characters do we want?
 * 
 * @return string
 */
function password($length) 
{
    $keyspace = '0123456789!@#$%&?abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }

    return $str;
}

//echo random_str(10);
?>