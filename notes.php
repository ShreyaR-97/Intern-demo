<?php 
// printing a php 
echo"Hello World". "<br>";

// declaring a variable
$name = "Jungkook \n";
echo $name. "<br>";
 
// concatination
echo "Hi". $name ."<br>";

// INDEXED ARRAY    
$books = array("Twisted Love","Twisted Hate","Twisted Game","Twisted Series");
echo $books[0]. "<br>";
var_dump($books). "<br>";

// ASSOCIATIVE ARRAY
$details = array("name"=>"Jungkook","age"=>27,"height"=>178);
echo $details["name"]. "<br>";

foreach($details as $detail ) {
    echo $detail."<br>";
}

$age=27;

if($age<=18) {
    echo "not allowed to date";
} else if($age>=20) {
    echo "can date";
}


























 ?>