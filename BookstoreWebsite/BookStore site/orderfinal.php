<?php

//Variables declaration
$q1=$q2=$q3=$q4=$q5=$q6=$mail="";
$pay=0;
$true=0;
//Pass variables values to php through the html form
$q1=$_POST["quan1"];
$q2=$_POST["quan2"];
$q3=$_POST["quan3"];
$q4=$_POST["quan4"];
$q5=$_POST["quan5"];
$q6=$_POST["quan6"];
$mail=$_POST["pref"];

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

//Check the first digit of the quantity number in case of the value format 0124 or 0357
function firstDigit($n)
{
    // Remove last digit from number
    // till only one digit is left
    while ($n >= 10)
        $n /= 10;

    // return the first digit
    return (int)$n;
}


//First validation
if ($q1!="" and firstDigit($q1)!=0)
  {
    if (is_numeric($q1))
    {
      $true=$true+1;
    }

  }

//Second validation
if ($q2!="")
  {
    if (is_numeric($q2))
    {
      $true=$true+1;
    }
  }

//Third validation
if ($q3!="")
  {
    if (is_numeric($q3))
    {
      $true=$true+1;
    }
  }

//Forth validation
if ($q4!="")
  {
    if (is_numeric($q4))
    {
      $true=$true+1;
    }

  }

//Fifth validation
if ($q5!="")
  {
    if (is_numeric($q5))
    {
      $true=$true+1;
    }

  }

//Sixth validation
if ($q6!="")
  {
    if (is_numeric($q6))
    {
      $true=$true+1;
    }

  }

//Email validation
if (filter_var($mail, FILTER_VALIDATE_EMAIL))
  {
    $true=$true+1;
  }

//If all quantities and the email are valid (checking that with the variable "$true") then do the following
if ($true==7)
  {
    //Calculating the cost of the purchase
    $pay=$q1*55+$q2*70+$q3*65+$q4*55+$q5*72+$q6*48;
    //Check if the email already exists by finding the data base row with the email given
    $sql= "SELECT * FROM info WHERE email='$mail';";
    $result = mysqli_query($connection, $sql);
    $resultcheck=mysqli_num_rows($result);
    //If it does not exist then insert the values and the email
    if ($resultcheck <= 0)
    {
      $sqli= "INSERT INTO info (email,quan1,quan2,quan3,quan4,quan5,quan6,payment) VALUES ('$mail','$q1','$q2','$q3','$q4','$q5','$q6','$pay'); ";
      mysqli_query($connection,$sqli);
      echo ('Saved!');
    }
    //If the email exists from a previous purchase, update the data but not the email
    else
    {
      $sqlu= "UPDATE info SET quan1=$q1,quan2=$q2,quan3=$q3,quan4=$q4,quan5=$q5,quan6=$q6,payment=$pay WHERE email='$mail'; ";
      mysqli_query($connection,$sqlu);
      echo ('Updated!');
    }
    ?>
    <!--Printing the cost-->
    <html>
    <body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
      <p>Your order costs <?php echo($pay)?></p>
      <p><?php echo ("Info saved!")?></p>
      <form>
        <input style="background-color:orange;border:solid black;color:black;margin:auto;cursor:pointer;padding: 20px" type="button" value="Return to home page" onclick="window.location.href='main.php'">
      </form>
    </body>
    </html>
    <?php
    //Closing the connection with the database
    mysqli_close($connection);
  }
//If  one of the quantites changes from the default 0 to a "" (space) then the following errors occure
elseif ($true!=7)
  {
    if ($q1=="")
    {
      ?>
      <html>
      <body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
        <p><?php echo ("You have not entered a value for item:In Search of Lost Time");?></p>
      </body>
      </html>
      <?php
    }

    if ($q2=="")
    {
      ?>
      <html>
      <body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
        <p><?php echo ("You have not entered a value for item:Don Quixote");?></p>
      </body>
      </html>
      <?php
    }

    if ($q3=="")
    {
      ?>
      <html>
      <body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
        <p><?php echo ("You have not entered a value for item:Ulysses");?></p>
      </body>
      </html>
      <?php
    }

    if ($q4=="")
    {
      ?>
      <html>
      <body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
        <p><?php echo ("You have not entered a value for item:The Great Gatsby");?></p>
      </body>
      </html>
      <?php
    }

    if ($q5=="")
    {
      ?>
      <html>
      <body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
        <p><?php echo ("You have not entered a value for item:Moby Dick");?></p>
      </body>
      </html>
      <?php
    }

    if ($q6=="")
    {
      ?>
      <html>
      <body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
        <p><?php echo ("You have not entered a value for item:Hamlet");?></p>
      </body>
      </html>
      <?php
    }

    if ($mail=="")
    {
      ?>
      <html>
      <body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
        <p><?php echo ("You have not entered your email");?></p>
      </body>
      </html>
      <?php
    }

    //Button to make the user go back and fix it
    ?>
    <html>
    <body>
      <form>
        <input type="button" style="background-color:orange;border:solid black;color:black;margin:auto;cursor:pointer;padding: 20px" value="Press to go back and fix it" onclick="history.back()">
      </form>
    </body>
    </html>
    <?php

}

?>
