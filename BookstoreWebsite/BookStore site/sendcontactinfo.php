<?php
//Variables declaration
$name=$surname=$phone_number=$email=$comments="";

//Pass variables values to php through the html form
$name=$_POST["Name"];
$surname=$_POST["Surname"];
$phonenumber=$_POST["PhoneNumber"];
$email=$_POST["Email"];
$comments=$_POST["Comments"];
$phonenumber="";


//Connect to data base
$dpservername="localhost";
$dpuser="root";
$dppassword="";
$dpname="bookstore";

$connection= mysqli_connect($dpservername,$dpuser,$dppassword,$dpname);

//Check if connection is alright
if(!$connection)
{
  die("Error, could not connect to database");
}

//Send data to data base
$sql= "INSERT INTO contact (name,surname,phone_number,email,comments) VALUES ('$name','$surname','$phonenumber','$email','$comments');";
mysqli_query($connection,$sql);
mysqli_close($connection);
?>
<html>
<body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
  <p><?php echo ("Your comment has been submitted!");?></p>
  <form>
    <input style="background-color:orange;border:solid black;color:black;margin:auto;cursor:pointer;padding: 20px" type="button" value="Return to home page" onclick="window.location.href='main.php'">
  </form>
</body>
</html>
<?php
?>
