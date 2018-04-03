<?php

include 'connect.php';

$select = mysqli_query($connection, "SELECT * FROM users");

while($row = mysqli_fetch_assoc($select)){
    print_r($row);
}