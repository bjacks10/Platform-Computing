<?php include 'header.php';?>

<form method = post action="makeCookie.php">
<p>
<select name="favShow">
    <option value="0">Choose a sitcom to be stored in persistent cookie</option>
    <option>The Office</option>
    <option>Friends</option>
    <option>Seinfeld</option>
    <option>Stranger Things</option>
</select>
<button type="submit">Select</button>
</form>

<p><a href="anotherPage.php">Check if cookie is set</a></p>