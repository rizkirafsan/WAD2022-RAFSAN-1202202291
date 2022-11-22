<?php
require 'db.php';

function query($query)
{
  global $db;

  $data = mysqli_query($db, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($data)) {
    $rows[] = $row;
  }

  return $rows;
}