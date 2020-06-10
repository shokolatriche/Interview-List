<?php 
//ここからphp
//変数名は名前を受け取る∵名前入力項目
$name = $_POST["name"];
$text = $_POST["text"];
$email = $_POST["email"];
$date = $_POST["date"];
$pw = $_POST["pw"];
$check = $_POST["check"];

echo $name."<br>";
echo $text."<br>";
echo $email."<br>";
echo $date."<br>";
echo $pw."<br>";
echo $check."<br>";

?>