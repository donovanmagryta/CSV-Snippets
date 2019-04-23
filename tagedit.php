<?php 
//tagid with edit command forwarded to this script
//id+skill+status
$tagid = urldecode($_GET["tag"]); 
if(isset($_POST["submit"])) { 
//$tagvalue = $_POST["tagvalue"];
$studentid = $_POST["id"];
$skill = $_POST["skill"];
$status = $_POST["status"];
$file = fopen("tags.json","a+") or die ("file not found"); 
$json = file_get_contents('tags.json'); 
$data = json_decode($json, true);
$tagvalue = $studentid . "+" . $skill."+".$status;
$data[$tagid] = $tagvalue; 
$newjson = json_encode($data); 
file_put_contents('tags.json', $newjson); 
fclose($file);
echo "saved"; 
echo "<html><body><button><a href=\"index.php?adminlogin=password123\">Admin Panel</a></button></body></html>";
}
else if(!isset($_POST["submit"])) { 
echo '<html><body><form action="tagedit.php?tag='.$tagid.'"  method="post">edit scanned tag\'s value<input type="text" name="id" value="student id"><input type="text" name="skill" value="skill"><input type="text" name="status" value="status"><input type="submit" value="submit" name="submit" ></form><button><a href = "index.php">go to main page</a></button></body></html>'; 
} 
?>
