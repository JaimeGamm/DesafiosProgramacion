<?php
function is_palindrome($number)
{
    if ($number != strrev($number)) {
        return false;
    }
    return true;
}

echo '121: ' . (is_palindrome(121) ? 'Sí' : 'No') . "\n";
echo '1212: ' . (is_palindrome(1212) ? 'Sí' : 'No') . "\n";
echo '1211: ' . (is_palindrome(1211) ? 'Sí' : 'No') . "\n";
echo '12121: ' . (is_palindrome(12121) ? 'Sí' : 'No') . "\n";
echo '121121: ' . (is_palindrome('121121') ? 'Sí' : 'No') . "\n";
echo '121211212112121121211212112121121211212112121: ' . (is_palindrome('121211212112121121211212112121121211212112121') ? 'Sí' : 'No') . "\n";
echo '121211212112121121211212112121121211212112122: ' . (is_palindrome('121211212112121121211212112121121211212112122') ? 'Sí' : 'No') . "\n";