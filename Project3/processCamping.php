<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $campingChoice = $_POST["camping_destination"];
    if($campingChoice == "Yellowstone National Park")
    {
        $foodfile = "info/yellowstonefood.txt";
        $currentfood = file_get_contents($foodfile);
        $attractfile = "info/yellowstoneattract.txt";
        $currentattract = file_get_contents($attractfile);

    }
    else if ($campingChoice == "Acadia National Park")
    {
        $foodfile = "info/acadiafood.txt";
        $currentfood = file_get_contents($foodfile);
        $attractfile = "info/acadiaattract.txt";
        $currentattract = file_get_contents($attractfile);
    }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type = "text/css" rel = "stylesheet" href= "styles.css" media="screen">
    <title>Camping Page: Travel Website</title>
  </head>
  <body>
 <!---->
 <div id="skipnav">
   <a href ="#main">Skip to main content</a>
 </div>
 <div id="border">
    <div  id="campingbanner">
 <h1 id="subpage">Camping Vacation Destinations</h1>
 
<!--<div class="info">
    <p>Which type of vacation should I take?</p>
    <p>What type of activities should I plan?</p>
    <p>What type of travel suits me?</p>
    <p>All of your questions will be answered...</p>
 </div>-->
 <nav>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="tropical.html">Tropical</a></li>
    <li><a href="winter.html">Winter</a></li>
    <li><a href="abroad.html">Abroad</a></li>
    <li><a href="camping.html">Camping</a></li>
    <li><a href="cruise.html">Cruise</a></li>
  </ul>
</nav>
</div>
 <main id="main">
 <h2 id="conv">How much money would you like to convert for Yellowstone National Park or Acadia National Park?</h2>
 <p id="convert">Conversion<br>
            <input type = "number" id = "amount"/> US Dollars</p>

        <script>
            var getConversion = function() {
                var request = new XMLHttpRequest();
                request.open("GET",
                "http://www.apilayer.net/api/live?access_key=691ec07d96383778ff94ccad6b8b6736&format=1",true )

                request.onload = function() {
                    var data = JSON.parse(this.response);
                    var rate = data.quotes.USDUSD;
                    var old_amount = document.getElementById("amount").value;
                    var new_amount = old_amount * rate;
                    document.getElementById("converted").innerHTML = new_amount + " US Dollars";
                };
                request.send();
            }
        </script>
    <p id= "converted"></p>
    <button id="submit" onclick = "getConversion()">Convert</button>
 <table>
        <caption>Camping</caption>
        <tr>
            <td>Camping Destination Choice</td>
            <td><?php echo $campingChoice?></td>
        </tr>
        <tr>
            <td>Food Recommendations</td>
            <td><?php echo $currentfood?></td>
        </tr>
        <tr>
            <td>Local Attractions</td>
            <td><?php echo $currentattract?></td>
        </tr>

    </table>
    </body>
</html>
<?php
}

?>