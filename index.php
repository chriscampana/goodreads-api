<!DOCTYPE html>
<html>
	<head>
	<title>GoodReads API Test1</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>

<h2>Currently Reading:</h2>

<button type="button" onclick="loadDoc()">Get my currently </button>
<p id="demo1"></p>
<p id="demo"></p>
<p id="demo2"></p>
 
 
<script>
function loadDoc() {
  var xhttp, xmlDoc, txt, x, i;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
	  document.getElementById("demo1").innerHTML = "TrUe";
    xmlDoc = xhttp.responseText;
/*
    x = xmlDoc.getElementsByTagName("title");
    for (i = 0; i < x.length; i++) {
      txt = txt + x[i].childNodes[0].nodeValue + "<br>";
    }
*/
	txt = xhttp.statusText;
    document.getElementById("demo").innerHTML = txt;
    txt2 = xmlDoc;
    document.getElementById("demo2").innerHTML = txt2;
    }
  else {
	  document.getElementById("demo1").innerHTML = "FalSE";
	txt = xhttp.statusText;
    document.getElementById("demo").innerHTML = txt;  
  }
  };
  xhttp.open("GET", "functions.php", true);
  xhttp.send();
}
</script>

</body>
</html>
