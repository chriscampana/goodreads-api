<!DOCTYPE html>
<html>
	<head>
	<title>GoodReads API Results</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
	
RESULTS

<?php

	// The value of the variable name is found
	$shelf = $_GET["shelves"] ;
	echo "<h1>Hello " . $shelf . "</h1>";
	

	$url = "https://www.goodreads.com/review/list?v=2&key=HcuvAy1HVWamfQboaYl9g&id=39127415&shelf=".$shelf ;
	
	$response = file_get_contents($url);
    
    $xml=simplexml_load_string($response) or die("Error: Cannot create object");

    $reviews = $xml->reviews[0]->review;

    foreach($reviews as $reviewlist):
    	echo $reviewlist->book[0]->title;
    	echo " - ";
    	echo $reviewlist->book[0]->authors[0]->author[0]->name;
		echo "<br>";
    endforeach;


	?>
</body>
</html>
