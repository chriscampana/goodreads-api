<?php
function apiTest() {
    $response = file_get_contents('https://www.goodreads.com/shelf/list?v=2&key=HcuvAy1HVWamfQboaYl9g&user_id=39127415');
    
    $xml=simplexml_load_string($response) or die("Error: Cannot create object");
	echo "hi";
	echo "<br>";

    $shelf = $xml->shelves[0]->user_shelf;

    foreach($shelf as $shelflist):
    	echo $shelflist->name;
		echo "<br>";
    endforeach;



    //echo $response;//->Requests[0]->reviews[0]->review[0];

}

apiTest();
?>



