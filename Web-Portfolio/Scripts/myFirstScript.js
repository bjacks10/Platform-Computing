//global so have access in any of the functions
var array = [1,2,3,4,5];


var print3Ways = function(){
    //alert("please work");
    document.write("<h2>useful for creating content in an html document</h2>");
    var i = 1;
    var h = "hello";
    /* useful for seeing what is stored in these variables*/
    console.log("Useful for debugging: " +h+i);
    printBackandHomeLinks();
}

var printBackandHomeLinks = function(){
    document.write('<a href="jsFundamentals.html">Back<a/><br>');
    document.write('<a href="index.html">Home<a/><br>');
}

var sumArray = function(){
    var sum = 0;
    for(var j=0;j<array.length;j++)
    {
        sum = array[j] + sum;
    }
    return sum;
}

var maxArray = function(){
    var max = array[0];
    for(var i = 0;i<array.length;i++)
    {
        if(max <array[i])
        max = array[i];
    }
    return max;
}

var minArray = function(){
    var min = array[0];
    for(var i =0;i<array.length;i++)
    {
        if(min > array[i])
        min = array[i];
    }
    return min;
}

var funWithArrays = function(){
    document.write("Array holds the values: ");
    for(var i = 0;i<array.length;i++)
    {
        document.write(array[i] + ",");
    }
    document.write("<br>The sum is: " +sumArray());
    document.write("<br>The max is: " +maxArray());
    document.write("<br>The min is: " +minArray() +"<br>");
    printBackandHomeLinks();
}