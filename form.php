<html>
<body>
<?php 
require "mysqlibackend.php";
$username = $_Post["username"];
$password = $_Post["password"];
$facebook = "https://www.facebook.com/".$_POST["facebook"];
$linkedin = "https://www.linkedin.com/in/".$_POST["linkedin"];
$instagram = "https://www.instagram.com/".$_POST["instagram"];
$twitter = "https://twitter.com/".$_POST["twitter"];

echo "Username: ".$username."<br>";
echo "Facebook: ".$facebook."<br>";
echo "LinkedIn: ".$linkedin."<br>";
echo "Instagram: ".$instagram."<br>";
echo "Twitter: ".$twitter."<br>";


$userbase = new UserTable;
$userbase->addUser($username, $password);
$userbase->addMedia($username, "facebook_name", $facebook);
$userbase->addMedia($username, "instagram", $instagram);
$userbase->addMedia($username, "linkedin", $linkedin);
$userbase->addMedia($username, "twitter", $twitter);
?>

</body>
</html>