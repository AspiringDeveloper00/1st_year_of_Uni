<!DOCTYPE html>
<html>
<head>
  <title>The original Bookstore:Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="navigationbar.css" />
  <link rel="stylesheet" type="text/css" href="contact.css" />
</head>
<body>

  <!--Navigation bar-->
  <div class="topnav">
    <a href="About.html">About</a>
    <a href="contact.php">Contact Us</a>
    <a href="BookCollection.php">Book Collection</a>
    <a class="active" href="main.php">Home</a>
    <a href="main.php" style=float:left;><img src="images/mainlogo.jpg"alt="Logo"></a>
    <p>The original BookStore</p>
  </div>
  <!--End of navigation bar-->


  <!--Contact form-->
  <h2>Contact us for any information,</h2>
  <h2>it's our pleasure to help our customers!</h2>
  <form name="myForm" method="post" action="sendcontactinfo.php" onsubmit="validate()">
    <table style="width:550px;border:0;" cellpadding="8" cellspacing="0">
      <tr>
        <td>
          <label for="Name">Name*:</label>
        </td>
        <td>
          <input name="Name" id="Name" type="text" maxlength="20" style="width:250px;" placeholder="Fill in your name" />
        </td>
        <td>
          <label for="Surname">Surname*:</label>
        </td>
        <td>
          <input name="Surname" id="Surname" type="text" maxlength="25" style="width:250px;" placeholder="Fill in your surname" />
      </tr>
      <tr>
        <td>
          <label for="PhoneNumber">Phone number:</label>
        </td>
        <td>
          <input name="PhoneNumber" id="PhoneNumber" type="text" maxlength="13" style="width:250px;" placeholder="+301234543210"/>
        </td>
        <td>
          <label for="Email">Email address*:</label>
        </td>
        <td>
          <input name="Email" id="Email" type="text" maxlength="90" style="width:250px;"  placeholder="example@domain.com"/>
        </td>
      </tr>
      <tr>
        <td>
          <label for="Comments">Comments*:</label>
        </td>
        <td>
          <textarea name="Comments" id="Comments" rows="7" cols="40" style="width:350px;" placeholder="Ask us any question or make a comment!" maxlength="512"></textarea>
        </td>
      </tr>
      <tr>
        <td>
          <p>* - Required fields</p>
        </td>
        <td>
          <input name="submit" type="submit" value="Submit" />
        </td>
      </tr>
    </table>
  </form>
  <!--End of contact form-->
  <script src="contact.js"></script>
</body>
</html>
