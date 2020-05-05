<?php include 'winterHeader.php'; ?>
<h1>Iceland</h1>
 <main id = "main">
     <div>
         <p id = "info"> Welcome to Iceland! Located in the North Atlantic Ocean, Iceland is an independent country that 
             gained the title "the land of ice and fire" because 10% of the island is covered in glaciers and numerous 
             volcanos remain active there. Iceland's unique geography  guarantees a beautiful landscape picture no matter 
             where you point the camera.
             cover
        </p>
    <h2>Food</h2>
        <figure> 
             <img class = scaled src = "images/ponnukokur.jpg" alt = "ponnukokur">
             <figcaption>Ponnukokur</figcaption>
        </figure>   
    <div>
        <p id = "food">Seeing how Iceland is surrounded by water, it comes as no surprise that many traditional Icelandic
            dishes are made with seafood. Harðfiskur, dried fish jerky, is a delicious snack you can find anywhere in
            Iceland. Many locals usually eat it with Icelandic butter. If you're at a restaurant and want a more substantial
            meal, try plokkfiskur. This dish consists of boiled cod or haddock filets, potatoes, flour, onion, milk,and seasoning. 
            We also reccomend humar- Icelandic lobster that is known for its tender meat. Humar can be served grielled, baked,
            fried, or topped on pizza.If you get tired of fish, Kjötsupa, lamb soup, is a delicious meal that doesn't have a fishy
            taste. Especially good in the cold winter time, this soup is made from lamb meat and a variety of Icelandic herbs and 
            vegetables. For dessert, local favorites include Snúður, bread filled with cannamon and covered in chocolate or sugar glaze;
            pönnukökur, crepe-like pancakes served with a generous amount of sugar and folded up with harm and whipped cream 
            inside; and rúgbrauðsís, a rye bread ice cream.
        </p>  
    </div>  
    <h2>Things to do</h2>
        <figure>
            <img class = scaled src = "images/diamondBeach.jpg" alt = "Diamond Beach">
            <figcaption>Diamond Beach</figcaption>
        </figure>
        <p id = "attractions"> Take a day trip to Snæfellsnes Peninsula! Snæfellsjökull, or "Iceland in Miniature", where 
            you can see a wide variety of gorgeous natural features. Explore the mountain range that runs through the 
            peninsula and the magnificent volcanos that reside in this range. Continue on to Snæfellsjökull National 
            Park, home to the black sand beach of Djúpalónssandur, the two lava caves Sönghellir and  Vatnshellir, and
            the glacier Snæfellsjökull itself. On the south coast of Iceland, walk down Diamond Beach whose shore and lagoon is always
            full of icebergs and watch the seals play between the glaciers. Explore the nearby ice caves in Vatnajökull,
            the largest glacier in Europe. Spend time with the locals by spending a night, however long that may be, out in 
            Reykjavík. And of course, be on the lookout for the Northern Lights whenever it is dark outside because
            that is a sight that will stay with you forever.
        </p>
    <h2>Conversion</h2>
        <p id = "conversion">Convert your US dollars into Icelandic Króna to find out how much money you should bring:</p>
        
        <script>
            var getConversion = function() {
                var request = new XMLHttpRequest();
                request.open("GET",
                "http://www.apilayer.net/api/live?access_key=691ec07d96383778ff94ccad6b8b6736&format=1",true )
        
                request.onload = function() {
                    var data = JSON.parse(this.response);
                    var rate = data.quotes.USDISK;
                    var old_amount = document.getElementById("amount").value;
                    var new_amount = old_amount * rate;
                    document.getElementById("converted").innerHTML = new_amount + " Icelandic Króna";
                };
                request.send();
            }
        </script>
        <p>Conversion<br>
        <p><input type = "number" id = "amount"/> US Dollars = <p id = "converted"></p>
        <button id = "submit" onclick = "getConversion()">Convert</button>

