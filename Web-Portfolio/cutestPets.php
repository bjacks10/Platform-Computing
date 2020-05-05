<?php
session_start();
if($_SESSION["loggedIn"]==true){ ?>
<?php include 'header.php'; ?>
<main id="main">
<p><a href = "addPet.php">Add Pet</a></p>
<p><a href = "viewAllPets.php">View All Pets</a></p>
</main>
</body>
</html>
<?php 
} else {
    header("Location: login.php");
}

