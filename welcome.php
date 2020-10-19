
<html>
<head>
<title> Bob's Auto Parts: Order result</title>
</head>

    <?php
	
if (isset($_POST['firstname'])){
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$tyres = $_POST['tyres'];
	
	
    $servername = "localhost";
    $user="root";
    $password="123456";
    $dbname="Assignmentdb1";

    // Create connection
    $conn = new mysqli($servername,$user,$password,$dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "INSERT INTO Orders (firstname, lastname, noOftyres)
    VALUES ('$firstname', '$lastname', '$tyres')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

    ?>
	
<body>
    <?php

    echo $_POST["firstname"]." ".$_POST["lastname"].'<br/>';
    echo "total amount due is: ".($_POST["tyres"]* 110).'<br/>';

    ?>
</body>
</html>