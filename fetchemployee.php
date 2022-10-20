<?php
require_once ('config.php');

// fetch records
$sql = "select firstname,lastname,hiredate,email,phone,title,name as companyname from employee e join company c on e.companyid=c.companyid";
$result = mysqli_query($mysqli, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

$dataset = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $array
);

echo json_encode($dataset);

?>