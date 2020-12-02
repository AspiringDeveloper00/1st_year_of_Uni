<?php

//Variables declaration
$search="";
//Pass variables values to php through the html form
$search=$_POST["search"];

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

//Get data from data base
$sql= "SELECT * FROM info WHERE email='$search';";
$result = mysqli_query($connection, $sql);
$resultcheck=mysqli_num_rows($result);

//If the email exists then show last purchase
if ($resultcheck > 0)
{
  while ($row=mysqli_fetch_assoc($result))
  {
    ?>
    <html>
    <body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
      <table style="margin-left:auto;margin-right:auto;">
        <tr>
          <td>
            <p style="text-align:left;font-size:20px;"><?php "<br>";
              echo "In Search of Lost Time:",$row['quan1'] ."<br>";
              echo "Don Quixote:",$row['quan2'] ."<br>";
              echo "Ulysses:",$row['quan3'] ."<br>";
              echo "The Great Gatsby:",$row['quan4'] ."<br>";
              echo "Moby Dick:",$row['quan5'] ."<br>";
              echo "Hamlet:",$row['quan6'] ."<br>";
              echo "Total cost:",$row['payment'] ."<br>";
              ?>
              <form>
                <input style="background-color:orange;border:solid black;color:black;margin:auto;cursor:pointer;padding: 20px" type="button" value="Return to home page" onclick="window.location.href='main.php'">
              </form>
            </p>
          </td>
        </tr>
      </table>
    </body>
    </html>
    <?php
  }
}
//If the email does not exist then show error and show a button to make him buy something
else
{
  ?>
  <html>
  <body style="background-color:#FFE5B4;text-align:center;font-family: times;font-size:20px;">
    <p><?php echo ("You haven't purchased anything with this e-mail")."<br>";
             echo ("If you want to purchase something click here");
       ?>
    </p>
    <form>
      <input style="background-color:orange;border:solid black;color:black;margin:auto;cursor:pointer;padding: 20px" type="button" value="Book Collection" onclick="window.location.href='BookCollection.php'"/>
    </form>
  </body>
  </html>
  <?php
}

?>
