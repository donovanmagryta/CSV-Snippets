<?php
$votes = ("votes.csv"); 
$fh = fopen($votes, 'rb'); 
$arr = fgetcsv($fh);
$array = (array_count_values($arr));
$yaycount = $array[yay];
$naycount =$array[nay];
echo "yes votes: '.$naycount.' ";
echo " no votes: '.$yaycount.' ";
$difference = abs($yaycount - $naycount);
echo "difference: '.$difference.' ";
?>