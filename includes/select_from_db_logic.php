<?php
$sql = "SELECT * FROM users ORDER BY id DESC ";
    $result = $conn->query($sql);
    $conn->close(); 
    
    // code printing data in the user rows
        $rows=$result->fetch_assoc();

        ?>