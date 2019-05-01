<?php
$questionkeys = array('hi','hey','yo');
$answervalue = "hello to you too";
$outputarray = array_fill_keys($questionkeys, $answervalue);
echo $outputarray;
?>
