<?php include 'header.php';?>
<?php 
/*foreach($_POST as $key=>$val)
{
    echo "key is $key and value is $val <br>";
}
foreach($_FILES as $array)
{
    foreach($array as $key=>$val)
    {
        echo "key is $key and value is $val<br>";
    }
}
echo "<br><h3>pet name is " . $_POST["pet_name"] . "</h3>";*/
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "inside processPet.php";
    $name = $_POST["pet_name"];
    $type = $_POST["pet_type"];
    //move file 
    $target_dir = "images/";
    $target_file = $target_dir .  basename($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

    $file = "data/pets.txt";
    if(!is_file($file))
    {
        file_put_contents($file, "");
    }
    $current = file_get_contents($file);
    $current .= "$name,$type,$target_file\n";
    file_put_contents($file,$current);

?>
<!--html goes here-->
<main id="main">
    <table>
        <caption>Pet Info</caption>
        <tr>
            <td>Name</td>
            <td><?php echo $name?></td>
        </tr>
        <tr>
            <td>Pet Type</td>
            <td><?php echo $type?></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><img src="<?php echo $target_file ?>"></td>
        </tr>

    </table>
</body>
</html>
<?php
}

?>