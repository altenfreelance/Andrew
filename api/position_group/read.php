<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once "./../config/database.php";
include_once './../../objects/position_group.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$posG = new Position_Group($db);

$stmt = $posG->readAll();


if ($stmt->rowCount() == 0) {
  // set response code - 404 Not found
  http_response_code(404);

  echo json_encode(
    ["message" => "No statistics found."]
  );

  die();
}

// games array
$posG_arr = [];
$posG_arr["posG"] = [];

// retrieve our table contents
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  // extract row
  // this will make $row['name'] to
  // just $name only
  extract($row);

  $posG_item = [
    "position_group" => $Position_Group,
    "num_plays" => $Num_Plays,
    "num_concussion" => $Num_Concussion,
    "percent_concussion" => $Percent_Concussion . " %"
  ];

  array_push($posG_arr["posG"], $posG_item);
}

// set response code - 200 OK
http_response_code(200);

// show products data in json format
echo json_encode($posG_arr);

