<?php
// value written to nfc tag:
$tagval = 'studentid|skill|grade'; //example
$student =(explode('|', $tagval, 1));
$skill = (explode('|', $tagval, 2));
$grade = (explode('|', $tagval, 3));
?>