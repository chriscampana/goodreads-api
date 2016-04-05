<?php
function apiTest() {
    $response = file_get_contents('https://www.goodreads.com/review/list?v=2&key=HcuvAy1HVWamfQboaYl9g&id=39127415&shelf=read&per_page=200&sort=date_read');
    
    $xml=simplexml_load_string($response) or die("Error: Cannot create object");

    $reviews = $xml->reviews[0]->review;

    foreach($reviews as $reviewlist):
    	echo $reviewlist->book[0]->title;
    	echo " - ";
    	echo $reviewlist->book[0]->authors[0]->author[0]->name;
		echo "<br>";
    endforeach;


    //echo $response;//->Requests[0]->reviews[0]->review[0];

}

apiTest();
?>



