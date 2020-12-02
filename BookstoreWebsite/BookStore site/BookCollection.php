<!DOCTYPE html>
<html>
<head>
  <title>The original Bookstore:Book Collection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="navigationbar.css" />
  <link rel="stylesheet" type="text/css" href="BookCollection.css" />
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

  <!--Start of product form-table -->
  <form name="orderform" method="post" action="orderfinal.php">
    <table>
      <input type="email" name="pref" size="40" placeholder="Write your email before you buy!">
      <!--Item listing format-->
      <tr>
        <td style="width:70px;">
          <a href="https://www.goodreads.com/book/show/12749.Swann_s_Way?from_search=true"><img style="" src="images/In Search of Lost Time by Marcel Proust.jpg"></a>
        </td>
        <td>
          <p style="text-align: left;">The novel recounts the experiences of the Narrator (who is never definitively named) while he is growing up, learning about art, participating in society, and falling in love. -- For more info head to <a href="https://en.wikipedia.org/wiki/In_Search_of_Lost_Time">Wikipedia</a> and for the critiques press on the book icon.</p>
        </td>
        <td>
          <div style="float:left;">
            <p>Title:In Search of Lost Time</p>
            <p>Writer:Marcel Proust</p>
            <p>Price:55$</p>
            <input name="quan1" type="number" id="quan1" value="0" min="0" max="999">
          </div>
        </td>
      </tr>
      <!--End of item listing format-->
      <!--Item listing format-->
      <tr>
        <td style="width:70px;">
          <a href="https://www.goodreads.com/book/show/3836.Don_Quixote?ac=1&from_search=true"><img src="images/Don Quixote by Miguel de Cervantes.jpg"></a>
        </td>
        <td>
          <p style="text-align: left;">In the course of their travels, the protagonists meet innkeepers, prostitutes, goat-herders, soldiers, priests, escaped convicts and scorned lovers. The aforementioned characters sometimes tell tales that incorporate events from the real world, like the conquest of the Kingdom of Maynila[citation needed] or battles in the Eighty Years' War. -- For more info head to <a href="https://en.wikipedia.org/wiki/Don_Quixote">Wikipedia</a> and for the critiques press on the book icon.</p>
        </td>
        <td>
          <div style="float:left;">
            <p>Title:Don Quixote</p>
            <p>Writer:Miguel de Cervantes</p>
            <p>Price:70$</p>
            <input name="quan2" type="number" id="quan2" value="0" min="0" max="999">
          </div>
        </td>
      </tr>
      <!--End of item listing format-->
      <!--Item listing format-->
      <tr>
        <td style="width:70px;">
          <a href="https://www.goodreads.com/book/show/338798.Ulysses?ac=1&from_search=true"><img src="images/Ulysses by James Joyce.jpg"></a>
        </td>
        <td>
          <p style="text-align: left;">All the action of Ulysses takes place in and immediately around Dublin on a single day. The three central characters, Stephen Dedalus (the hero of Joyce’s earlier Portrait of the Artist as a Young Man); Leopold Bloom, a Jewish advertising canvasser; and his wife, Molly—are intended to be modern counterparts of Telemachus, Ulysses (Odysseus), and Penelope, respectively, and the events of the novel loosely parallel the major events in Odysseus’s journey home after the Trojan War. -- For more info head to <a href="https://en.wikipedia.org/wiki/Ulysses_(novel)">Wikipedia</a> and for the critiques press on the book icon.</p>
        </td>
        <td>
          <div style="float:left;">
            <p>Title:Ulysses</p>
            <p>Writer:James Joyce</p>
            <p>Price:65$</p>
            <input name="quan3" type="number" id="quan3" value="0" min="0" max="999">
          </div>
        </td>
      </tr>
      <!--End of item listing format-->
      <!--Item listing format-->
      <tr>
        <td style="width:70px;">
          <a href="https://www.goodreads.com/book/show/4671.The_Great_Gatsby?ac=1&from_search=true"><img src="images/The Great Gatsby by F. Scott Fitzgerald.jpg"></a>
        </td>
        <td>
          <p style="text-align: left;">Nick Carraway, a young man from Minnesota, moves to New York in the summer of 1922 to learn about the bond business. He rents a house in the West Egg district of Long Island, a wealthy but unfashionable area populated by the new rich, a group who have made their fortunes too recently to have established social connections and who are prone to garish displays of wealth. Nick’s next-door neighbor in West Egg is a mysterious man named Jay Gatsby, who lives in a gigantic Gothic mansion and throws extravagant parties every Saturday night. -- For more info head to <a href="https://en.wikipedia.org/wiki/The_Great_Gatsby">Wikipedia</a> and for the critiques press on the book icon.</p>
        </td>
        <td>
          <div style="float:left;">
            <p>Title:The Great Gatsby</p>
            <p>Writer:F. Scott Fitzgerald</p>
            <p>Price:55$</p>
            <input name="quan4" type="number" id="quan4" value="0" min="0" max="999">
          </div>
        </td>
      </tr>
      <!--End of item listing format-->
      <!--Item listing format-->
      <tr>
        <td style="width:70px;">
          <a href="https://www.goodreads.com/book/show/153747.Moby_Dick_or_The_Whale?ac=1&from_search=true"><img src="images/Moby Dick by Herman Melville.jpg"></a>
        </td>
        <td>
          <p style="text-align: left;">Our intrepid narrator, a former schoolteacher famously "called" Ishmael—is that actually his name?— signs up as sailor on a whaling voyage to cure a bout of depression/being a misanthropic dirtbag. On his way to find a ship in Nantucket, he meets Queequeg, a heavily tattooed South Sea Island harpooneer just returned from his latest whaling trip. Ishmael and Queequeg become best buds and roommates almost immediately. Together, they sign up for a voyage on the Pequod, which is just about to start on a three-year expedition to hunt sperm whales. -- For more info head to <a href="https://en.wikipedia.org/wiki/Moby-Dick">Wikipedia</a> and for the critiques press on the book icon.</p>
        </td>
        <td>
          <div style="float:left;">
            <p>Title:Moby Dick</p>
            <p>Writer:Herman Melville</p>
            <p>Price:72$</p>
            <input name="quan5" type="number" id="quan5" value="0" min="0" max="999">
          </div>
        </td>
      </tr>
      <!--End of item listing format-->
      <!--Item listing format-->
      <tr>
        <td style="width:70px;">
          <a href="https://www.goodreads.com/book/show/1420.Hamlet?ac=1&from_search=true"><img src="images/Hamlet by William Shakespeare.jpg"></a>
        </td>
        <td>
          <p style="text-align: left;">Prince Hamlet is depressed. Having been summoned home to Denmark from school in Germany to attend his father's funeral, he is shocked to find his mother Gertrude already remarried. The Queen has wed Hamlet's Uncle Claudius, the dead king's brother. To Hamlet, the marriage is "foul incest." Worse still, Claudius has had himself crowned King despite the fact that Hamlet was his father's heir to the throne. Hamlet suspects foul play. -- For more info head to <a href="https://www.cliffsnotes.com/literature/h/hamlet/play-summary">Cliffsnotes</a> and for the critiques press on the book icon.</p>
        </td>
        <td>
          <div style="float:left;">
            <p>Title:Hamlet</p>
            <p>Writer:William Shakespeare</p>
            <p>Price:48$</p>
            <input name="quan6" type="number" id="quan6" value="0" min="0" max="999">
          </div>
        </td>
      </tr>
      <!--End of item listing format-->
    </table>
    <!--Send order-->
    <div style="text-align:center;"><input class="sub" type="submit" name="submit1" value="Submit your order!"></div>
  </form>
  <!--End of product form-table-->
</body>
</html>
