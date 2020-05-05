<?php include 'winterHeader.php'; ?>
<h1>Arlberg</h1>
 <main id = "main">
     <div>
         <p id = "info"> Welcome to Arlberg, Austria! Here where the first ski schoool was opened in the 1920s, skiing
             and other winter activities are in ready supply. Arlberg has and astonishing 400 inches of snowfall each year 
             and 210 miles of trails to take advantage of. You can ski down these trails to centuries-old villages,
             mountain huts turned restuarants, and seven different villages each with something unique to offer their
             visitors.
        </p>
    <h2>Food</h2>
        <figure> 
             <img class = scaled src = "images/kaesespaetzle.jpg" alt = "kaesespaetzle">
             <figcaption>kaesespaetzle- Austrian macaroni and cheese</figcaption>
        </figure>   
    <div>
        <p id = "food"> After a full day of activity in the cold weather, nothing will taste better than a 
            warm, hearty meal, which thankfully Arlberg is known for. A simple yet delicious meal is Käsespätzle- 
            egg noodles with tangy vorarlberg cheese. This dish will leave you feeling warm, satisfied, and ready to 
            face the cold trails again. If you're craving meat, try brettlijause, which is a board of cured meats, 
            cheses, and dark bread. If you want to eat like a true local, try knödel dumplings. Knödel dumplings
            are sweet apricot dumplings, leberknödel made from ground liver, and Tirolean dumplings. These tasty
            dumpkings come in many variations, but no matter what the soft dough and mouth watering taste will leave
            you craving for more. While all of these dishes have relatively few ingredients, the quality of these
            ingredients guarantee a delicious meal.
        </p>  
    </div>  
    <h2>Things to do</h2>
        <figure>
            <img class = scaled src = "images/skiing.jpg" alt = "Skiing down the Alps">
            <figcaption>Skiing down St. Anton mountain in the Alps</figcaption>
        </figure>
        <p id = "attractions"> With so much snow and trails already made, thousands of visitors flock to Arlberg to 
            ski and snow board down the Alps. You can spend days flying down these trails, twisting and turning at high speeds 
            down these steep slopes, and never be bored. Because everything is connected with these trails and the dozens
            of ski lifts, getting from one place to another is fun and affordable! If you are realtively new to skiing,
            don't worry because Austrian ski schools are acclaimed throughout the world. Here, there's no need to stay back in
            the hotel room while your fiends and family ski without you. On the other hand, if you actually do want to take 
            a break from skiing, you can ski into a nearby village and relax at a local bar or at a resort spa. You
            can also enjoy other winter-time activities such as sleigh rides, ice skating, and beautiful hikes
            through snow covered trails. 
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

