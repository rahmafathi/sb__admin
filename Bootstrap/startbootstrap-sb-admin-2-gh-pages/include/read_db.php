<?php

include "db.php";
$users = $connect->query(query: "SELECT * FROM useres");
while($rows = $users->fetch_assoc()){
echo $rows['first_name'] . '<br>';
}
?>