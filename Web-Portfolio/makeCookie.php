<?php 
if(isset($_POST['favShow']) && !empty($_POST['favShow']))
{
    echo "adding cookie";
    $cookieName = "favShow";
    $cookieValue = $_POST['favShow'];
    setcookie($cookieName, $cookieValue);

}else{
    echo "please select a show";
}
header("Location: showAd.php");