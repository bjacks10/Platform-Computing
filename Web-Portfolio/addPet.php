<?php include 'header.php';?>
<form method="post" enctype="multipart/form-data" action="processPet.php">
<h3>Add Pet Details</h3>
<p>Name<br>
<input type="text" name="pet_name"/>
</p>
<p>Pet Type<br>
<select name ="pet_type">
    <option> Choose Type</option>
    <option>Dog</option>
    <option>Cat</option>
    <option>Guinea Pig</option>
</select>
</p>
<p>Upload Image<br>
<input type="file" name="fileToUpload">
</p>
<input type="submit">
</form>
</body>
</html>
