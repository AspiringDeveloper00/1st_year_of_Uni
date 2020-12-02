<!DOCTYPE html>
<html>
<head>
  <title>The original Bookstore:Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="slideshow.css" />
  <link rel="stylesheet" type="text/css" href="navigationbar.css" />
</head>
<body>

  <!--Navigation bar-->
  <div class="topnav">
    <a href="About.html">About</a>
    <a href="contact.php">Contact Us</a>
    <a href="BookCollection.php">Book Collection</a>
    <a class="active" href="main.php">Home</a>
    <a href="main.html" style=float:left;><img src="images/mainlogo.jpg"alt="Logo"></a>
    <p>The original BookStore</p>
  </div>
  <!--End of navigation bar-->
  <p style="font-size:25px;margin-left:41%;">Choose to buy some of our books...</p>
  <!--Slideshow-->
  <table style="margin-left: 43%">
  <tr>
    <td>
      <br><br>
      <div class="box">
        <div class="mySlides">
          <div class="numbertext">1 / 6</div>
          <img src="images/In Search of Lost Time by Marcel Proust.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 6</div>
          <img src="images/Don Quixote by Miguel de Cervantes.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 6</div>
          <img src="images/Ulysses by James Joyce.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">4 / 6</div>
          <img src="images/The Great Gatsby by F. Scott Fitzgerald.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">5 / 6</div>
          <img src="images/Moby Dick by Herman Melville.jpg" style="width:100%">
        </div>

        <div class="mySlides">
          <div class="numbertext">6 / 6</div>
          <img src="images/Hamlet by William Shakespeare.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="caption">
          <p id="caption"></p>
        </div>

        <div class="row">
          <div class="column">
            <img class="demo cursor" src="images/In Search of Lost Time by Marcel Proust.jpg" style="width:100%" onclick="currentSlide(1)" alt="In Search of Lost Time">
          </div>
          <div class="column">
            <img class="demo cursor" src="images/Don Quixote by Miguel de Cervantes.jpg" style="width:100%" onclick="currentSlide(2)" alt="Don Quixote">
          </div>
          <div class="column">
            <img class="demo cursor" src="images/Ulysses by James Joyce.jpg" style="width:100%" onclick="currentSlide(3)" alt="Ulysses">
          </div>
          <div class="column">
            <img class="demo cursor" src="images/The Great Gatsby by F. Scott Fitzgerald.jpg" style="width:100%" onclick="currentSlide(4)" alt="The Great Gatsby">
          </div>
          <div class="column">
            <img class="demo cursor" src="images/Moby Dick by Herman Melville.jpg" style="width:100%" onclick="currentSlide(5)" alt="Moby Dick">
          </div>
          <div class="column">
            <img class="demo cursor" src="images/Hamlet by William Shakespeare.jpg" style="width:100%" onclick="currentSlide(6)" alt="Hamlet">
          </div>
        </div>
      </div>
    </td>
  </tr>
  </table>
  <script src="slideshow.js"></script>
  <!--End of slideshow-->
  <!--Last purchase search-->
  <p style="font-size:25px;margin-left:43%;margin-top:180px;">or search previous purchases</p>
  <form style="font-size:25px;margin-left:44%;" method="post" action="search.php">
    <input type="email" name="search" id="search" placeholder="Insert your email!">
    <input style="background-color: black;border: none;color: white;" type="submit" name="subsearch" value="Search">
  </form>
  <!--End of last purchase search-->
</body>
</html>
