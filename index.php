<?php
    $msg = "";
    echo $fname;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $conn = mysqli_connect('localhost','Aman','aman','aman') or die('Connection Failed');
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $sql1 = "INSERT INTO users(first_name,last_name,email)VALUES('$fname','$lname','$email')";
	if(mysqli_query($conn,$sql1)){
		echo '<script>alert("Inserted Successfully")</script>'; 
        }else{
		echo '<script>alert("Error inserting values ")</script>'; 
        }
	}
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">	
    </head>
    <body>
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." required><br>

                <label for="lname">Last Name</label><br>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required><br>

                <label for="fname">Email</label><br>
                <input type="text" id="email" name="email" placeholder="Your Email.." required><br>
                <input type="submit" value="Submit"><br><br>
            </form>
            <form action="show.php" method="post">
                <input type="submit" value="Show" />
            </form>
        </div>
    </body>
</html>
