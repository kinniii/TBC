<?php require('config.php'); ?>
<?php require('db.php'); ?>
<?php include('inc/header.php'); ?>

<?php 
        $query = "SELECT firstName, lastName, address, zip, phone, email FROM ApplicantInfo";

        $result = mysqli_query($conn, $query);
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Sales</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="phpCodeConnect.css">
</head>
    <body>

    <h1>Reference Program Entries</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">Zip</th>
                <th scope="col">Phone</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>
        <?php
        # Fill the table from our databse using PHPs $row and turning our result into an array
        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo "<tr><td>". $row["firstName"] ."</td><td>". $row["lastName"] ."</td><td>"
                . $row["address"] ."</td><td>". $row["zip"] ."</td><td>"
                . $row["phone"] ."</td><td>" . $row["email"] ."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 Results";
        }
        #Close Connection
        mysqli_close($conn);
        ?>
    </table>
    <?php include('inc/footer.php'); ?>