<?php
function get_shelves_and_move_on() {
    $response = file_get_contents('https://www.goodreads.com/shelf/list?v=2&key=HcuvAy1HVWamfQboaYl9g&user_id=39127415');
    $xml=simplexml_load_string($response) or die("Error: Cannot create object");
	//$xml=simplexml_load_file('test.xml') or die("Error: Cannot create object");
    $shelf = $xml->shelves[0]->user_shelf;
	//echo $reviews;


	echo "<form action=\"results.php\">";
	echo "<select name=\"shelves\">";
    foreach($shelf as $shelflist):
    	//echo "HI:".$reviewlist->book[0]->authors[0]->author[0]->name;
		echo "<option value=\"".$shelflist->name."\">" . $shelflist->name ."</option>";
		
    endforeach;
	echo "</form>";
	echo "</select>";
	echo "<br><br>";
	echo "<input type=\"submit\">";
	






}

get_shelves_and_move_on();
?>



