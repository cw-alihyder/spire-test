<?php

if(isset($_POST['address_line_1']))
{
    $columns = implode(", ",array_keys($_POST));
    $conn = mysqli_connect('localhost', 'root', 'root','test');
    $escaped_values = array_map(array($conn, 'real_escape_string'), array_values($_POST));

    $values  = implode("', '", $escaped_values);
    $sql = "INSERT INTO `locations`($columns) VALUES ('$values')";
    
    $result = $conn->query($sql);

    if($result)
    {
        echo json_encode(['message' => 'Address added successfully']);
    }
}



?>