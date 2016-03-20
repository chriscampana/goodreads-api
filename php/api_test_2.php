<?php
function apiTest() {
	//$today = getdate();
	//print_r($today);
    $xml=simplexml_load_file('test.xml') or die("Error: Cannot create object");
    $reviews = $xml->reviews[0]->review;
    foreach($reviews as $reviewlist):
    	echo $reviewlist->book[0]->title;
    	echo " - ";
    	echo $reviewlist->book[0]->authors[0]->author[0]->name;
		echo "<br>";
    endforeach;
	//echo $xml->reviews[0]->review[0]->book[0]->title;
	//echo $xml->reviews[0]->review[2]->book[0]->title;
	//$title = $xml->reviews[0]->review[0]->book[0]->title
    //echo $title;
}

apiTest();

?>



