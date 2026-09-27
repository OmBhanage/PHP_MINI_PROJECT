<?php
include 'db.php';
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=data.csv");

$output = fopen("php://output", "w");
  fputcsv($output,array("P_id","P_name","Category","Price","Quantity","Brand","Description"));
  $result = $conn->query("select * from produts");
  while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
  }
  ?>
