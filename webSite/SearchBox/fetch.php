<?php

$data = array();

if(isset($_GET["query"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=testing", "root", "");

 $query = "SELECT student_name FROM tbl_student WHERE student_name LIKE '".$_GET["query"]."%' ORDER BY student_name ASC LIMIT 15";

 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row["country_name"];
 }
}

echo json_encode($data);

?>