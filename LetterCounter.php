#!/usr/bin/php

<?php
system('clear');
$results = array();
$line = readline("Please type in a word: ");
foreach (count_chars($line, 1) as $i => $val) {
   $results[] = $val ." " . chr($i);
}
$length=count($results);
sort($results);
for ( $n=0; $n<$length; $n++ ) {
echo "$results[$n] \n";
}
?>
