<!-- A friend of mine takes the sequence of all numbers from 1 to n (where n > 0).
Within that sequence, he chooses two numbers, a and b.
He says that the product of a and b should be equal to the sum of all numbers in the sequence, excluding a and b.
Given a number n, could you tell me the numbers he excluded from the sequence?
The function takes the parameter: n (n is always strictly greater than 0) and returns an array or a string (depending on the language) of the form:

[(a, b), ...] or [[a, b], ...] or {{a, b}, ...} or or [{a, b}, ...]
with all (a, b) which are the possible removed numbers in the sequence 1 to n.

[(a, b), ...] or [[a, b], ...] or {{a, b}, ...} or ... will be sorted in increasing order of the "a".

It happens that there are several possible (a, b). The function returns an empty array (or an empty string) if no possible numbers are found which will prove that my friend has not told the truth! (Go: in this case return nil).

Examples:
removNb(26) should return [(15, 21), (21, 15)]
or
removNb(26) should return { {15, 21}, {21, 15} }
or
removeNb(26) should return [[15, 21], [21, 15]]
or
removNb(26) should return [ {15, 21}, {21, 15} ]
or
removNb(26) should return "15 21, 21 15"
or

in C:
removNb(26) should return  {{15, 21}{21, 15}} tested by way of strings.
Function removNb should return a pointer to an allocated array of Pair pointers, each one also allocated. -->

<?php
function removeNb($n) {
   // Initialize result array
    $result = array();
    // Calculate sum of sequence from 1 to n
    $sum = ($n * ($n + 1)) / 2;
    
    // For each potential 'a' value
    for ($a = 1; $a <= $n; $a++) {
        // Using algebra: a * b = sum - a - b
        // Rearranging: b = (sum - a)/(a + 1)
        $b = ($sum - $a) / ($a + 1);
        
        // Check if b is an integer and within range
        if ($b <= $n && $b > 0 && floor($b) == $b && $b != $a) {
         // Add to result array
            $result[] = array($a, (int)$b);
        }
    }
    
    return $result;
}