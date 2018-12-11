<?php
class Position_Group {
  // database connection and table name
  private $conn;

  // satistics object properties
  public $position_group;
  public $num_plays;
  public $num_concussion;
  public $percent_concussion;

  //Constructor that accepts database
  public function __construct($db) {
    $this->conn = $db;
  }

  //Return JSON object of all players stats
  function readAll(){
    // select all query

    $query = 'SELECT * FROM position_group;';

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // execute query
    $stmt->execute();

    return $stmt;
  }

}

