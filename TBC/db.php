<?php
    # Create Connection in db.php
    $conn = mysqli_connect(DB_HOST, DB_USER,
     DB_PASS, DB_NAME);

    # Check Connection
    if(mysqli_connect_errno()){
        # Connection Failed
        echo 'Failed to Connect ' . mysqli_connect_errno();
    }
?>