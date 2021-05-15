<?php
// Statck 
$name = ['Mike', 'Joel', 'Anne'];
array_push($name, 'phuoc'); // add value to the end of array
$next = array_pop($name); // remove and return the last value in  array
echo "$next\n";
print_r($name);

// Queue
$name = ['Phuoc', 'Johny', 'Alex'];
array_push($name, 'long');
$next = array_shift($name);
echo $next;