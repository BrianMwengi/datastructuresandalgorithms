<?php

// Problem: Implement a function that receives two IPv4 addresses, and returns the number of addresses between them (including the first one, excluding the last one).
// All inputs will be valid IPv4 addresses in the form of strings. The last address will always be greater than the first one.


// function ips_between ($start, $end) {
//  // Convert IP strings to arrays of Integers
//  $start_parts = array_map('intval', explode('.', $start));
//  $end_parts = array_map('intval', explode('.', $end));

//  // Calculate the difference using bit shifting
//  $start_num = ($start_parts[0] << 24) + ($start_parts[1] << 16) + ($start_parts[2] << 8) + $start_parts[3];
//  $end_num = ($end_parts[0] << 24) + ($end_parts[1] << 16) + ($end_parts[2] << 8) + $end_parts[3];

//  return $end_num - $start_num;

// }

// function ips_between ($start, $end)
// {
//     return abs(ip2long($start) - ip2long($end));
// }

$ip = gethostbyname('www.example.com');
$long = ip2long($ip);

if ($long === -1 || $long === FALSE) {
    echo "Invalid IP, please try again"; 
} else {
    echo $ip . "\n"; // 93.184.215.14
    echo $long . "\n"; // 1572394766 
    printf("%u\n", ip2long($ip)); // 1572394766
}
?>