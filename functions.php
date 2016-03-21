<?php
function apiTest() {
    //$response = file_get_contents('https://www.goodreads.com/review/list?v=2&key=HcuvAy1HVWamfQboaYl9g&id=39127415&shelf=currently-reading');
    //$xml=simplexml_load_string($response) or die("Error: Cannot create object");
	$xml=simplexml_load_file('test.xml') or die("Error: Cannot create object");
    $reviews = $xml->reviews[0]->review;
	//echo $reviews;


	echo "<form action=\"hey\">";
	echo "<select name=\"shelves\">";
    foreach($reviews as $reviewlist):
    	//echo "<li>".$reviewlist->book[0]->authors[0]->author[0]->name."</li>";
		echo "<option value=\"volvo\">" . $reviewlist->book[0]->authors[0]->author[0]->name ."</option>";
		
    endforeach;
	echo "</form>";
	echo "</select>";
	echo "<br><br>";
	echo "<input type=\"submit\">";
	






}

apiTest();
?>



