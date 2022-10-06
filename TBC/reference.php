<?php require('config.php'); ?>
<?php require('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initialiscale=1.0">
        <title>TBC Metal Structures</title>
        <link rel="icon" href="media/images/dtpoolenc.jpg" type="image/x-icon">
        <link rel="stylesheet" href="tbc.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="tbc.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js"></script>
    </head>

    <body>
        <header>
            <h1>TBC Metal Structures</h1>
            <a class="hmbgr" onclick="toggleNavBar()"><i class="fa fa-bars"></i></a>
            <h1 class="right" id="mobile">Call Today! 407-417-8067</h1>
            <h1 class="right" id="mobile"><a href="contact.html">Get a Quote!</a></h1>
        </header>
        <nav id="navbar"><ul>
            <li><a href="index.html" title="Go To Home Page">Home</a></li>
            <li><a href="services.html" title="Go To Services Page">Services</a></li>
            <li><a href="gallery.html" title="Go To Gallery Page">Gallery</a></li>
            <li><a href="location.html" title="Go To Locations Page">Available Locations</a></li>
            <li><a href="contact.html" title="Go To Contact Us Page">Contact Us</a></li>
            <li><a href="reference.php" title="Go To Reference Page">Reference Program</a></li>
        </ul></nav>

        <?php
            if(isset($_POST['submit'])){
                #Get Form Data
                $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
                $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
                $address = mysqli_real_escape_string($conn, $_POST['address']);
                $zip = mysqli_real_escape_string($conn, $_POST['zip']);
                $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
         
         
                $query = "INSERT INTO ApplicantInfo(`firstName`, `lastName`, `address`, `zip`,
                `phone`, `email`) VALUES('$firstName', '$lastName', '$address',
                 '$zip', '$phone', '$email')";
         
                 # Checks if connection was made, on succes return to root. On fail, give error.
                 if(mysqli_query($conn, $query)){
                        echo 'Your Information Has Been Succefully Added!';
                         header('Location: '.ROOT_URL.'');
                 } else {
                     echo 'ERROR: '. mysqli_error($conn);
                 }
         
             }
         ?>

        <h2 class="center">Enter Your Info to be Included Into Our Reference Program!</h2>
        
        <form id="referenceForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="gridcontainer">
            <input id="fname" name="firstName" placeholder="First Name (required)" required><br>
            <input id="lname" name="lastName" placeholder="Last Name (required)" required><br>
            <input id="addy" name="address" placeholder="Street Address (required)" required><br>
            <input id="zip" name="zip" placeholder="Zip Code (required)" required><br>
            <input id="phone" name="phone" type="tel" placeholder="Phone Number (required)" required><br>
            <input id="email" name="email" type="email" placeholder="Your Email (required)" required><br>
            <button type="submit" name="submit">Submit</button>
        </div>
        </form>
    </body>
    </html>