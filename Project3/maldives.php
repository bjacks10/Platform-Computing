<?php include 'tropHeader.php'; ?>
<h1 id = "maldives">Maldives</h1>
 <main id = "main">
     <div>
         <p id = "info"> Welcome to the Maldives! Maldives is a small, independent island located in South
             Asia. Home to some of the most stunning underwater life, this island's stunning lagoon and 26 
             coral reefs provide a breathtaking view wherever you look. Whether you re traveling alone, with
             a partner, with friends, or with your family, you will always find relaxation and fun in the Maldives.
        </p>
    <h2>Food</h2>
        <figure> 
             <img class = scaled src = "images/gulha.jpg" alt = "gulha">
             <figcaption>Gulha</figcaption>
        </figure>   
    <div>
        <p id = "food">While most resorts and hotels offer a wide range of international cuisine, the local Maldives cusine
            cannot be rivaled. For breakfast, try mas huni and roshi-- mashed tuna fish mixed with
            grated coconut, onions, chlli, lime jice, and a griddled, wheat flour pancake. During the day, many
            local Maldives cafes, called "short eats", offer deletable traditional dishes such as gulha- fish balls
            that are rolled by hand using valhoamas, coconut, onions, chilli, ginger, lime juice, and floru and 
            coconut dough; rihaakuru- a tuna paste that is often mixed with cooked rice, chilli, and onions; 
            garudhiya- a fish soup that is usually served over rice. Seeing as the Madlives is an island nation,
            most of the local cuisine consists of fish, but if you're tired of so much tuna, you can subsitute
            your fish for chicken. On the other hand, if you're looking for something more sweet than savory, try
            huni folhi- a shallow fried roshi filled with a coconut, honey, and water paste. Whether you feel like
            something sweet or something savory, the Maldives offers something to satisfy and delight your tastebuds.
        </p>  
    </div>  
    <h2>Things to do</h2>
        <figure>
            <img class = scaled src = "images/maldivesSnorkeling.jpg" alt = "snorkeling in Maldives">
            <figcaption>Snorkeling in the Maldives</figcaption>
        </figure>
        <p id = "attractions"> The Maldives offers a wide range of activities that guarantees fun for everyone!
            Rent a canoe or catamaran and explore the dazzling lagoon and sealife around the island. Scuba dive,
            free dive, or snorkle to see amazing marine life. If you want a more thrilling activity, try renting
            a jet ski, wakeboarding or water skiing, or a parasailing across the blue sea. If you want to leave
            the beaches for a little while, take a tour through the capital, exploring the craftsman shops,
            visiting the  National Museum of the Maldives, or watching a cultural performance that local Maldivians
            put on.</p>
    <h2>Conversion</h2>
        <p id = "conversion">Convert your US dollars into Maldivian Rufiyaa to find out how much money you should bring:</p>
        
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
                    document.getElementById("converted").innerHTML = new_amount + " Maldivian Rufiyaa";
                };
                request.send();
            }
        </script>
        <p>Conversion<br>
        <p><input type = "number" id = "amount"/> US Dollars = <p id = "converted"></p>
        <button id = "submit" onclick = "getConversion()">Convert</button>

