<?php

$url = 'https://newsapi.org/v2/everything?sources=medical-news-today&apiKey=32cd906e772f4f9cb72539fbc2a22a79';
 
$contents = file_get_contents($url);
 
if($contents !== false){


$arr = json_decode($contents, true);
}

echo "Title : ".$arr['articles'][0]['title'];
echo "<br>";
echo "Description : ".$arr['articles'][0]['description'];
echo "<br>";
echo "Title : ".$arr['articles'][1]['title'];
echo "<br>";
echo "Description : ".$arr['articles'][1]['description'];
echo "<br>";
echo "Title : ".$arr['articles'][2]['title'];
echo "<br>";
echo "Description : ".$arr['articles'][2]['description'];
echo "<br>";
echo "Title : ".$arr['articles'][3]['title'];
echo "<br>";
echo "Description : ".$arr['articles'][3]['description'];
}

?>