var depositSavings = function(){
    console.log("inside deposit savings");
    var td = document.getElementById("savingsBalance");
    var savings = td.innerHTML;
    console.log("savings is " +savings);
    savings = parseInt(savings,10);
    savings = savings + 100;
    td.innerHTML = savings;
    if(savings == 0)
    {
        var caption = document.getElementById("bankAccountTitle");
        caption.innerHTML = "ALERT: Savings Empty!";
    }
    else
    {
    var caption = document.getElementById("bankAccountTitle");
        caption.innerHTML = "Bank Account";
    }
}

var depositChecking = function(){
    console.log("inside deposit checking");
    var td = document.getElementById("checkingBalance");
    var checking = td.innerHTML;
    console.log("checking is " +checking);
    checking = parseInt(checking,10);
    checking = checking + 100;
    td.innerHTML = checking;
}

var emptySavings = function(){
    console.log("inside empty savings");
    var td = document.getElementById("savingsBalance");
    var savings = td.innerHTML;
    console.log("savings is: " + savings);
    savings = parseInt(savings,10);
    savings = 0;
    td.innerHTML = savings;
    if(savings == 0)
    {
        var caption = document.getElementById("bankAccountTitle");
        caption.innerHTML = "ALERT: Savings Empty!";
    }
   


}