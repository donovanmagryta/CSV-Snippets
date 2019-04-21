<?php 

//tag must be written as http://example.com?tag=tagid
//then virtually write tag value as studentid+skill+status with each customized .
//separate virtual write php script needed.
date_default_timezone_set("UTC"); 
$tag = urldecode($_GET["tag"]); 
$adminlogin = urldecode($_GET["adminlogin"]);
//$tagval = "id+skill+statusorgrade";
$tagval = $tag;
$piece = explode('+',$tagval);
$studentfile = $piece[0];
$skill = $piece[1];
$grade = $piece[2];
if (!file_exists($studentfile.csv)) {
$file = fopen("$studentfile.csv","a");
 $stamp = date("m-d-y h:i:s"); 
$feed = ("TIMESTAMP" .",". "," .  "SKILL" . ",". "GRADE" . PHP_EOL); file_put_contents("$studentfile.csv", 
$feed, FILE_APPEND); 
fclose($file); 
}
else {
 if ($adminlogin == 'password123') { 
echo "<html><style>body { Font-size: 300%; Font-family: Arial; text-decoration: none; } button { text-decoration: none; text-align: center; font-size: 100%; margin: 50px; background-color: navy; color: white; border-radius: 12px; } a { text-decoration: none; color: white;}</style><body> <h1><button><a href = \"$studentfile.csv\"> Download responses</a></button><button><a href=\"?delete=1&adminlogin=password123&tag=no\">delete data</a> </button></h1></body></html>";
 if (isset($_GET['delete'])) { $myFile="$studentfile.csv";  
unlink($myFile) or die ("error: cannot delete spreadsheet"); 
echo "spreadsheet reset";
 } 
} 
else if(!isset($_COOKIE[$cookie_name])) {
 if (!isset($_GET['tag'])) { 
exit("no tag left");
 } 
$cookie_name ="returned"; 
$cookie_value ="returned"; setcookie($cookie_name, $cookie_value, time() + (86400 *1), "/"); // 86400 = 1 day
 $file = fopen("$studentfile.csv","a");
 $stamp = date("m-d-y h:i:s"); 
$feed = ($stamp .",". "," .  $skill . ",". $grade . PHP_EOL); file_put_contents("$studentfile.csv", 
$feed, FILE_APPEND); 
fclose($file); 
echo "<html><style>body { font-size: 300%; font-family: Arial;}button { text-decoration: none; text-align: center; font-size: 100%; margin: 50px; background-color: navy; color: white; border-radius: 12px; } a { text-decoration: none; color: white;} </style><body> <h1> Tag recorded</h1></body></html>"; 
echo $tag; 
} 
else if (isset($_COOKIE[$cookie_name])) { 
echo "frozen for 1 day"; 
//recording frozen
}
}
?>