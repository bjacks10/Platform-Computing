<?php include 'abroadHeader.php'; ?>
<h1>Rome, Italy</h1>
 <main id = "main">
     <div>
         <p id = "info"> Welcome to Rome! Located in the south of Italy, Rome is one of the oldest centers of 
             politics, culture, and development. If you're a history buff, an art enthusiast, a myth geek, or a 
             foodie, Rome has so many places and acitivties for you to choose from.
             cover
        </p>
    <h2>Food</h2>
        <figure> 
             <img class = scaled src = "images/carbonara.jpg" alt = "carbonara">
             <figcaption>Carbonara</figcaption>
        </figure>   
    <div>
        <p id = "food">Italian food is famous throughout the world, but the fresh grown ingredients sold in the 
            local market guarantees a delciious meal whether you buy it from a restuarant or cook it yourself. 
            As anyone knows, pasta is a staple for many Italian dishes. We reccomend <b>carbonara</b>, which is spaghetti or 
            rigatoni, guanciale or pancetta, egg yolk or whole egg, pecorino romano cheese and parmigiano-reggiano, and 
            black pepper. if you don't feel like pasta, try some authentic Italian <b>pizza</b>. Like New York style or deep dish
            pizza, Italian pizza can come in a variety of flavors. If you are not a big fan of pizza but sitll want to 
            try some true Italian pizza, we recommend margherita pizza. This kind of pizza uses locally grown tomatos 
            and freshly made cheese to make this a simple yet delicious meal. If you're looking for a snack, try <b>suppli</b>.
            rice croquettes filled with different ingredients such as melted mozzarella, toamato sauce, ground beef, or sausage. 
            For dessert, try <b>gelato</b>, a frozen treat is similar to ice cream that is bursting with flavor.
        </p>  
    </div>  
    <h2>Things to do</h2>
        <figure>
            <img class = scaled src = "images/coliseum.jpg" alt = "Coliseum">
            <figcaption>Coliseum</figcaption>
        </figure>
        <p id = "attractions"> Rome has dozens of historic, artistic, and cultural attractions. However,
            there are some places that you must visit before your trip in Rome ends. FIrst, you should go to 
            the Colosseum, a cultural and architectural phenomenon for decades. Next, visit the Vatican.
            In the Vatican, you can book a tour of the <b>Vatican museum</b> including the <b>Sistine Chapel</b>, explore 
      <b>St. Peter's Basilica</b>, and wander around <b>St. Peter's Square</b>. This small country within a country has been 
            the center for Catholicism for centuries, making it focal point of Catholic art, history, and culture. You 
            should also make time for the<b> Roman Forum</b>, which hodls the ruins of the center of ancient Roman 
            public and political life. Explore various temples, squares, and arches to get an idea of what ancient 
            Roman life was like.
        </p>
    <h2>Conversion</h2>
        <p id = "conversion">Convert your US dollars into Euros to find out how much money you should bring:</p>
        
        <script>
            var getConversion = function() {
                var request = new XMLHttpRequest();
                request.open("GET",
                "http://www.apilayer.net/api/live?access_key=691ec07d96383778ff94ccad6b8b6736&format=1",true )
        
                request.onload = function() {
                    var data = JSON.parse(this.response);
                    var rate = data.quotes.USDEUR;
                    var old_amount = document.getElementById("amount").value;
                    var new_amount = old_amount * rate;
                    document.getElementById("converted").innerHTML = new_amount + " Euros";
                };
                request.send();
            }
        </script>
        <p>Conversion<br>
        <p><input type = "number" id = "amount"/> US Dollars = <p id = "converted"></p>
        <button id = "submit" onclick = "getConversion()">Convert</button>

