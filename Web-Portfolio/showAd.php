<?php include 'header.php';?>
<?php
if(!isset($_COOKIE['favShow'])){
    echo '<p> Persisent favShow cookie not found</p>';

} else {
    echo '<p>This guy likes ' . $_COOKIE['favShow'] . ', show him a ton of ' . $_COOKIE['favShow'] . ' ads</p>';


}
?>