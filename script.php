<?php
$url=file_get_contents("https://api.kawalcorona.com/indonesia");
$data=json_decode($url,true);
  ?>
/*
"name": "Indonesia",
		"positif": "514",
		"sembuh": "29",
		"meninggal": "48"
*/
