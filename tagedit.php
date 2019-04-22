<?php 

//id+skill+status
$tagid = urldecode($_GET["tag"]); 

if(isset($_POST["tagvalue"])) { 
//$tagvalue = $_POST["tagvalue"];
$studentid = $_POST["id"];
$skill = $_POST["skill"];
$status = $_POST["status"];
$file = fopen("tags.json","a+") or die ("file not found"); 
$json = file_get_contents('tags.json'); 
$data = json_decode($json, true);
$tagvalue = $studentid . "+" . "
$skill."+".$status;
$data[$tagid] = $tagvalue; 
$newjson = json_encode($data); 
file_put_contents('tags.json', $newjson); 
fclose($file); 
echo '<html><body><form action="tagedit.php?tag='.$tagid.'" method="post">edit scanned tag\'s value<input type="text" name="id" value="'.$id.'"><input type="text" name="skill" value="'.$skill.'"><input type="text" name="status" value="'.$status.'"><br><input type="save"></form><button><a href = "index.php">go to main page</a></button></body></html>'; 
}
 else if(!isset($_POST["tagvalue"])) { 
$file = fopen("tags.json","a+") or die ("file not found"); 
$json = file_get_contents('tags.json'); $data = json_decode($json, true); 
@$output = $data["$tagid"];

echo '<html><body><form action="tagedit.php?tag='.$tagid.'" method="post">edit scanned tag\'s value<input type="text" name="id" value="'.$id.'"><input type="text" name="skill" value="'.$skill.'"><input type="text" name="status" value="'.$status.'"><br><input type="save"></form><button><a href = "index.php">go to main page</a></button></body></html>'; 

fclose($file); 
} 
?>
