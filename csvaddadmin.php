< ?php date_default_timezone_set("UTC"); 
$feedbac = urldecode($_GET["feedback"]); $adminlogin = urldecode($_GET["adminlogin"]); 
if ($adminlogin == 'password123') { 
echo "<html><style>body { Font-size: 300%; Font-family: Arial; text-decoration: none; } button { text-decoration: none; text-align: center; font-size: 100%; margin: 50px; background-color: navy; color: white; border-radius: 12px; } a { text-decoration: none; color: white;}</style><body> <h1><button><a href = \"ratings.csv\"> ⬇️Download responses</a></button><button><a href=\"?delete=1&adminlogin=password123&feedback=no\">delete data</a> </button></h1></body></html>"; 
if (isset($_GET['delete'])) {
 $myFile="ratings.csv"; 
unlink($myFile) or die ("error: cannot delete spreadsheet"); 
echo "spreadsheet reset"; 
}
} 
else if(!isset($_COOKIE[$cookie_name])) {
if (!isset($_GET['feedback'])) { 
exit("no feedback left");
}
 $cookie_name ="returned";
 $cookie_value ="returned"; setcookie($cookie_name, $cookie_value, time() + (86400 *1), "/"); // 86400 = 1 day
 $file = fopen("ratings.csv","a");
 $stamp = date("m-d-y h:i:s"); 
$feed = ($stamp .",". $feedbac . PHP_EOL); file_put_contents("ratings.csv", $feed, FILE_APPEND); fclose($file); 
echo "<html><style>body { font-size: 300%; font-family: Arial;}button { text-decoration: none; text-align: center; font-size: 100%; margin: 50px; background-color: navy; color: white; border-radius: 12px; } a { text-decoration: none; color: white;} </style><body> <h1> Thank you for your feedback</h1></body></html>"; 
echo $feedbac;
 } 
else if (isset($_COOKIE[$cookie_name])) { 
echo "<html><style>body { font-size: 300%; font-family: Arial;} button { text-decoration: none; text-align: center; font-size: 100%; margin: 50px; background-color: navy; color: white; border-radius: 12px; } a { text-decoration: none; color: white;}</style><body> <h1>You already gave feedback recently. Thank you.</h1></body></html>"; echo $cookie_value; 
} 
?>