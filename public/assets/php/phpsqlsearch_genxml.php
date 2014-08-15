<?php  
require("phpsqlsearch_dbinfo.php");

/*
$username='capradtestgrunt';
$password='BUhnZN6UB8Phjh2K';
$database='capradtestgrunt';
*/

/*
$database  => $_ENV['DATABASE_NAME'];
$username  => $_ENV['DATABASE_USER'];
$password  => $_ENV['DATABASE_PASSWORD'];
*/

// Get parameters from URL
$center_lat = $_GET["lat"];
$center_lng = $_GET["lng"];
$radius = $_GET["radius"];

// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a mySQL server
$connection=mysql_connect (localhost, $username, $password);
if (!$connection) {
  die("Not connected : " . mysql_error());
}

// Set the active mySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ("Can\'t use db : " . mysql_error());
}

// Search the rows in the markers table
$query = sprintf("SELECT address, markers.name, phone, fax, openinghours, lat, lng, email, ( 6371 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance, modalities.name AS modality FROM markers JOIN marker_modality ON markers.id=marker_modality.marker_id JOIN modalities on marker_modality.modality_id=modalities.id HAVING distance < '%s' ORDER BY distance, modality LIMIT 0 , 1000",
  mysql_real_escape_string($center_lat),
  mysql_real_escape_string($center_lng),
  mysql_real_escape_string($center_lat),
  mysql_real_escape_string($radius));
$result = mysql_query($query);


// (before using inner join) Search the rows in the markers table
/*
$query = sprintf("SELECT address, name, lat, lng, ( 6371 * acos( cos( radians('%s') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( lat ) ) ) ) AS distance FROM markers HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",
  mysql_real_escape_string($center_lat),
  mysql_real_escape_string($center_lng),
  mysql_real_escape_string($center_lat),
  mysql_real_escape_string($radius));
$result = mysql_query($query);
*/

if (!$result) {
  die("Invalid query: " . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name", $row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("openinghours", $row['openinghours']);
  $newnode->setAttribute("phone", $row['phone']);
  $newnode->setAttribute("fax", $row['fax']);
  $newnode->setAttribute("email", $row['email']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("distance", $row['distance']);
  $newnode->setAttribute("modality", $row['modality']);
}

echo $dom->saveXML();