<?php
// TABEL DATA
$table_name = 'person';

//  CHECK CONNECTION
echo ($connection) ? 'Connection established<br />' : 'Connection unestaqblished!<br />';

// SELECT DATABASE
mysqli_select_db($connection, 'wibu');

$person_name = $_POST['person-name'];
// var_dump($person_name);


$insert_query = "INSERT INTO `". $table_name . "` (`id_person`, `person_name`) VALUES (NULL, '" . $_POST['person-name'] . "')";
// $insert_query = "INSERT INTO `person` (`id_pesron`, `person_name`) VALUES (NULL, 'MIRA')";
// var_dump($insert_query);

// QUERY INITIALIZATION
$query_data =mysqli_query($connection, $insert_query);

// CHECK IF DATA RECEIVED BY DATABASE
if($query_data) {
    echo 'Data has received by server';
} else {
    echo 'Your data just go nowhere!';
}