
<html>
<head>
<title> Bob's Auto Parts</title>
</head>

<?php

$fname = "";
$lname = "";
$tyre = "";
?>

<body>
<form  action="welcome.php" method="post">
FisrtName: <input type="text" name="firstname" value="<?php echo $fname;?>"><br/><br/>
LastName:  <input type="text" name="lastname" value="<?php echo $lname;?>"><br/><br/>
Number of Tyres: <input type="number" name="tyres" value="<?php echo $tyre;?>"><br/><br/>
<input type="submit" name="Calculate"><br/>
    

    </form>
</body>
</html>
