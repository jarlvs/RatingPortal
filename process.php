<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
 <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
</head>

<body style="background-color:#2b2c30;color: white">



<?php include 'database.php';?>
<?php

// create a variable
$name=$_POST['name'];
$rating=$_POST['options'];





//Execute the query

mysqli_query($connect,"INSERT INTO testdata(name,rating)
				VALUES('$name','$rating')");

?>


            <br>
            <p style="font-family: 'Ubuntu', 'Arial', sans-serif;text-align: center;font-size: 30px;">Your reponse has been recorded, will get back to you soon.. </p>
            <div class="backbutton" style="margin:0;text-align:center">
            <button type="button" class="btn" style="background-color:#FCC72C"><a href="index.html" style="color:black">Back to portal</a> </button>
           </div>
 


</body>
</html>