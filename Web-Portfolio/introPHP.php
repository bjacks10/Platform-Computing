<?php include 'header.php';?>

<?php
echo 'hello world';
echo '<br> hello world <br>';
$name_var = "Beebe";
echo 'hello ' . $name_var . "<br>";
echo "hello $name_var <br>";
echo 'hello $name_var <br>';
/*comments*/
//comments
#comments
$array = array(1,2,3,4,5);
for($n=0;$n<count($array);$n++)
{
    echo $array[$n] . ",";
}
echo "<br>";
foreach($array as $val)
{
    echo $val . "<br>";
}

$fav_foods = array("Sam"=>"pizza","Chris"=>"cereal","Connor"=>"burgers","Kelly"=>"Sushi");
foreach($fav_foods as $val)
{
    echo $val . "<br>";
}
foreach($fav_foods as $key=> $val)
{
echo "$key 's favorite food is $val <br>";
}
foreach($_SERVER as $key=>$val)
{
    echo "key is $key and val is $val <br>";
}
echo "<br>";
foreach($_GET as $key=>$val)
{
    echo "key is $key and val is $val <br>";
}
