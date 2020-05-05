<?php include 'abroadHeader.php'; ?>
<h1>Cairo, Egypt</h1>
 <main id = "main">
     <div>
         <p id = "info"> Welcome to Cairo, Egypt! Located in the north east of Africa, Cairo is the center of Egyptian 
             civilization and is home to many modern day marvels. Rich with history and architectural wonders,
             Cairo offers many activities to fulfill your cultural wishes. 
             cover
        </p>
    <h2>Food</h2>
        <figure> 
             <img class = scaled src = "images/koshari.jpg" alt = "koshari">
             <figcaption>Koshari</figcaption>
        </figure>   
    <div>
        <p id = "food">If you want to eat like a local, you must set one breakfast aside for ful. Ful is made
            out of fava beans cooked in oil and salt, and it is usually eaten with eggs, cheese, pita bread, and/or 
            other popular foods such as ta'meya, also known as falafel. Koshari is also one of the most traditional Egyptian 
            dishes. Koshari is a dish made of macaroni, lentils, cheakpeas topped with caramel onions, thick red sauce, and 
            a condiment such as garlic, chili or viengar. If you're rushing from one site to another, pick up a shawarma 
            from a street cart that will guarantee you satisfaction. Shawarma is made with either chicken or beed marinated in 
            Middle Eastern spices and cooked all day on spit. Once the meat has been cooked through, the meat is wrapped 
            and served with tahini or tomaya. If you need to satisfy your sweet tooth, try roz bel laban. Roz bel laban
            translates to "rice wiith milk". So it should come as no surprise that this dessert is very similar to rice pudding. 
            The rice is cooked in milk, (sometimes cream), sugar, and is sometimes topped with pistachio pieces.
        </p>  
    </div>  
    <h2>Things to do</h2>
        <figure>
            <img class = scaled src = "images/pyramids.jpg" alt = "Pyramids of Giza">
            <figcaption>Pyramids of Giza</figcaption>
        </figure>
        <p id = "attractions"> The number one thing you must do while in Cairo is plan a day trip to the 
                Pyramids of Giza. While here, explore the Pyramid of Cheops, the Solar Boat Museum, the 
                Pyramid of Chephren, the Pyramid of Mycerinus, and the Great Sphinx. If you're an archeology
                enthusiast, make sure you visit the Egyptian Museum, which holds many timeless artifacts and has 
                a special section dedicated to King Tutankhamun. Walk through Old Cairo, a series of winding lanes 
                where old churches line the sidewalks. While you're there stop by the Coptic Museum. Here, you will
                learn a lot about Egypt's early Christian period and observe early Coptic art. If you're looking  
                to shop, visit Khan el-Khalili, a famous Egypitan bazzar and souq. Here you can acquire traditional
                products such as papyrus pictures, antiques, metal lampsahdes, and woven textiles.
        </p>
    <h2>Conversion</h2>
        <p id = "conversion">Convert your US dollars into Egyptian pounds to find out how much money you should bring:</p>
        
        <script>
            var getConversion = function() {
                var request = new XMLHttpRequest();
                request.open("GET",
                "http://www.apilayer.net/api/live?access_key=691ec07d96383778ff94ccad6b8b6736&format=1",true )
        
                request.onload = function() {
                    var data = JSON.parse(this.response);
                    var rate = data.quotes.USDEGP;
                    var old_amount = document.getElementById("amount").value;
                    var new_amount = old_amount * rate;
                    document.getElementById("converted").innerHTML = new_amount + " Egyptian Pounds";
                };
                request.send();
            }
        </script>
        <p>Conversion<br>
        <p><input type = "number" id = "amount"/> US Dollars = <p id = "converted"></p>
        <button id = "submit" onclick = "getConversion()">Convert</button>

