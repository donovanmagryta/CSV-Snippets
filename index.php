<?php 
//tag must be written as http://example.com?tag=tagid
//then virtually write tag value as studentid+skill+status with each customized .
//separate virtual write php script needed.
date_default_timezone_set("UTC");
$tag = urldecode($_GET["tag"]);
$adminlogin = urldecode($_GET["adminlogin"]);
//$tagval = "id+skill+statusorgrade";
$file = fopen("tags.json","a+") or die ("file not found");
$json = file_get_contents('tags.json'); $data = json_decode($json, true);
@$tagval = $data["$tag"];
fclose($file);
$piece = explode('+',$tagval);
$studentfile = $piece[0];
$skill = $piece[1];
$grade = $piece[2];
$sheet = $studentfile.'.csv';
if (!file_exists($sheet)) {
$file = fopen($sheet,"a");
 $stamp = date("m-d-y h:i:s");
$feed = ("TIMESTAMP" .",". "," .  "SKILL" . ",". "GRADE" . PHP_EOL);
file_put_contents($sheet, $feed, FILE_APPEND);
fclose($file);
}
 if ($adminlogin == 'password123') {
   echo "<html><style>body { Font-size: 300%; Font-family: Arial; text-decoration: none; } button { text-decoration: none; text-align: center; font-size: 100%; margin: 50px; background-color: navy; color: white; border-radius: 12px; } a { text-decoration: none; color: white;}</style><body> <h1><button><a href = \"\'.$sheet.'\"> Download responses</a></button><button><a href=\"?delete=1&adminlogin=password123&tag=no\">delete data</a> </button></h1><button><a href=\"tagedit.php\">Switch Student Reprogram Tag</a></button></body></html>";
 } 
 if (isset($_GET['delete'])) {
   $myFile= $sheet;
unlink($myFile) or die ("error: cannot delete spreadsheet");
echo "spreadsheet reset";
}
 if (!isset($_GET['tag'])) {
exit("no tag left");
 }
else {
 $file = fopen($sheet,"a");
 $stamp = date("m-d-y h:i:s");
$feed = ($stamp .",". "," . $skill . ",". $grade . PHP_EOL);
file_put_contents($sheet, $feed, FILE_APPEND);
fclose($file);
echo "<html><style>body { font-size: 300%; font-family: Arial;}button { text-decoration: none; text-align: center; font-size: 100%; margin: 50px; background-color: navy; color: white; border-radius: 12px; } a { text-decoration: none; color: white;} </style><body> <h1> Tag recorded</h1></body></html>";
echo $tag;
}
?>
