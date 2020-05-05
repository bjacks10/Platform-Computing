<?php include 'tropHeader.php'; ?>
<h1 id = "fiji">Fiji</h1>
 <main id = "main">
     <div>
         <p id = "info"> Welcome to Fiji! Located in the South Pacific Ocean, this independent country is comprised
            of 300 volcanic islands, but only about 100 of thse islands are inhabited. Viti Levu, which makes up more 
            than half of Fiji's land area, has a mountain range that spans the island from north to south, and the four 
            main rivers run through this mountain area. Coastal plains lie in the west, northwest, and southest and 
            are the focal points for Fiji's agriculture and settlements. This island as well as most of the other islands,
            is surrounded by beuaitufl coral reefs that are home to some of the most stunning underwater life on Earth.
        </p>
    <h2>Food</h2>
        <figure> 
             <img class = scaled src = "images/kokoda.jpg" alt = "kokoda">
             <figcaption>Kokoda</figcaption>
        </figure>   
    <div>
        <p id = "food">Becuase of its locaiton and geography, fish and vegetables are the main ingredients in Fijian
            dishes. If this sounds rather bland to you, prepare to be delighted when you taste these local dishes and 
            discover the unique ways Fijians cook their mouthwatering meals. We recommend lovo, meat or fish cooked 
            over a lovo pit and wrapped in banana leaves and layered with vegetables. While this meal can take several
            hours to prepare, the smoky flavor will leave you craving for more. Kokoda,fresh fish soaked in lemon or lime
            juice and mixed with onions, chillies, capsiucum, tomatoes, and coconut milk, is a refreshing dish usually
            served in a coconut shell. Fish suruwa is a delcious fish curry that includes spcies and ingredients such as
            coconut milk. cumin, and cinnamon If you feel like something sweet after all of the fish and vegetables, try
            coconut cassava or vakasoso. Coconut cassava is fluffy yet crisp cake made out of grated cassava, cocnut milk, condensed milk,
            and a layer of custard. Vakasoso is a traditional dessert of two plaintain banans, a cinammon stick, coconut milk,
            brown sugar, cardamom pods. and a caramel sauce. Despite the limited variety fo ingredients Fijians have to work with, 
            every single one of their dishes will leave your mouth watering and your taste buds craving for more.
        </p>  
    </div>  
    <h2>Things to do</h2>
        <figure>
            <img class = scaled src = "images/scubaFiji.jpg" alt = "scuba diving in Fiji">
            <figcaption>Scuba diving in Fiji</figcaption>
        </figure>
        <p id = "attractions"> Visit Coral Coast, a beautiful stretch of costline between the villages of Sigatoka
            and Suva on the southern shores of the main island Viti Levu. Go on the Sigatoka River Safari where you 
            will enjoy a scenic cruise along the Sigatoka River whiel learning about Fiji's hisotry. You will stop at 
            a village, which changes each safari, and talk with the local villagers, visit the village Chief's bure, take 
            a tour of the village, and participate in a kava ceremony. While you're in the area, visit the vibrant markets
            in the Sigatoka Valley to try a variety of local dishes and tasty snacks. Visit the island of Kadavu to enjoy the 
            lovely underwater life there. Snorkel or scuba dive in the Great Astrolabe Reef where you can swim with dozens of 
            sea creatures like great manta rays and explore stunning underwater structures like the Alacrity Rocks. If you'd rather keep your feet on
            solid land, hike through Kadava's scenic forests toward Kavala Bay's waterfall, or you can talk with your resort 
            to find a guide who will lead you down a lesser known yet still stunning hiking path.
        </p>
    <h2>Conversion</h2>
        <p id = "conversion">Convert your US dollars into Fijian Dollars to find out how much money you should bring:</p>
        
        <script>
            var getConversion = function() {
                var request = new XMLHttpRequest();
                request.open("GET",
                "http://www.apilayer.net/api/live?access_key=691ec07d96383778ff94ccad6b8b6736&format=1",true )
        
                request.onload = function() {
                    var data = JSON.parse(this.response);
                    var rate = data.quotes.USDFJD;
                    var old_amount = document.getElementById("amount").value;
                    var new_amount = old_amount * rate;
                    document.getElementById("converted").innerHTML = new_amount + " Fijian Dollars";
                };
                request.send();
            }
        </script>
        <p>Conversion<br>
        <p><input type = "number" id = "amount"/> US Dollars = <p id = "converted"></p>
        <button id = "submit" onclick = "getConversion()">Convert</button>

