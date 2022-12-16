<?php

// FETCH PARAMETER
$sql = "SELECT * FROM ". $table_name;
// FETCHING DATA FROM TABLE
$fetch_data = mysqli_query($connection, $sql);

if (mysqli_num_rows($fetch_data) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($fetch_data)) {
      echo "id: " . $row["id_person"]. " - Name: " . $row["person_name"]."<br>";
    }
  } else {
    echo "0 results";
  }