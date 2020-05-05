//Author: Beebe Jackson
//global variable
//accessible to all functions
//this is the unfinished board

//make sol = to the api so its a new puzzle everytime
var sol =
    [[0, 7, 0, 2, 3, 8, 0, 0, 0],
    [0, 0, 0, 7, 4, 0, 8, 0, 9],
    [0, 6, 8, 1, 0, 9, 0, 0, 2],
    [0, 3, 5, 4, 0, 0, 0, 0, 8],
    [6, 0, 7, 8, 0, 2, 5, 0, 1],
    [8, 0, 0, 0, 0, 5, 7, 6, 0],
    [2, 0, 0, 6, 0, 3, 1, 9, 0],
    [7, 0, 9, 0, 2, 1, 0, 0, 0],
    [0, 0, 0, 9, 7, 4, 0, 8, 0]];
//empty board
var empty =
    [[0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0]];

//this function prints the board
var printEmpty = function ()
{
    table = document.getElementById("table");
    for(var i =0; i<table.rows.length;i++)
    {
        for(var j= 0;j<table.rows[i].cells.length;j++)
        {
                table.rows[i].cells[j].innerHTML = empty[i][j];
        }
    }
};

var printBoard = function () 
{
    table = document.getElementById("table");
    for(var i =0; i<table.rows.length;i++)
    {
        for(var j= 0;j<table.rows[i].cells.length;j++)
        {
            if(sol[i][j] != 0)
            {
                table.rows[i].cells[j].innerHTML = sol[i][j];
            }
        }
    }
    //print board
};

var solve = function() {
    //for each grid cell
    for(var row =0; row<9;row++)
    {
        for(var col= 0;col<9;col++)
        {
            //if grid cell is empty
            if(sol[row][col] == 0)
            {
                //we try possible numbers
                //for numbers 1-9
                for(var num=1;num<10;num++)
                {
                    //if number satisfies Sudoku requirements
                    if(!checkColumn(col,num) && !checkRow(row,num) && !check3by3(row,col,num))
                    {
                        //set grid cell to number
                        sol[row][col] = num;
                        //if(recursive call returns true
                        if(solve() == true)
                        {
                            return true; //we continue
                        }
                        else
                        //set grid cell back to 0 //try next number
                        sol[row][col] = 0;
                    }
                }
                return false; //this is returned if no number works so we backtrack
            }
        }
    }
    printBoard();
    return true; //sudoku solve
};

var checkColumn = function(col, num)
{
    for(var i =0; i<9;i++)
    {
        if(sol[i][col] == num)
        {
            return true;
        }
        
    }
    return false;
};

var checkRow = function(row,num)
{
    for(var i=0; i<9;i++)
    {
        if(sol[row][i] == num)
        {
            return true;
        }  
    }
    return false;
};

var check3by3 = function(row,col,num)
{
    var r = row - (row%3);
    var c = col - (col%3);
    for(var i =r;i<r+3;i++)
    {
        for(var j =c;j<c+3;j++)
        {
            if(sol[i][j] == num)
            {
                return true;
            }
        }
    }
    return false;
};

var newPuzzle = function()
{
    var request = new XMLHttpRequest();
    request.open("GET", "https://sugoku.herokuapp.com/board?difficulty=easy",true);
    request.onload = function()
    {
        var data = JSON.parse(this.response);
        var board = data.board;
        sol = board;
        printEmpty();
        printBoard();
    };
    request.send();
};

