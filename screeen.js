const niffler=document.getElementById("niffler");
const coin = document.getElementById("coin");


function nifflerPosition(rowStart,columnStart,rowEnd,columnEnd)
{
    console.log(lvl);
    console.log(columnStart,columnEnd, rowStart, rowEnd);
    niffler.style.gridColumnStart=columnStart;
    niffler.style.gridColumnEnd=columnEnd;
    niffler.style.gridRowStart=rowStart;
    niffler.style.gridRowEnd=rowEnd;

}+"'"

function coinPosition(rowStart,rowEnd,columnStart,columnEnd)
{
    console.log(lvl);
    console.log(columnStart,columnEnd, rowStart, rowEnd);
    coin.style.gridRowStart=rowStart;
    coin.style.gridRowEnd=rowEnd;

    if(arguments.length==4)
    {coin.style.gridColumnStart=columnStart;
    coin.style.gridColumnEnd=columnEnd;}

    console.log("Kire");

  

}+"'"

function check(rowStart,rowEnd,btnName,next)
{
    const start=document.getElementById('r_start').value;
    const end = document.getElementById('r_end').value;
    console.log("pi?");

    coinPosition(start,end);
    
    if(start== rowStart && end==rowEnd)
    {
        document.getElementById(btnName).style.display="block";
        document.getElementById(next).style.display="inline-block";

    }
    else
    console.log("wrong");
}


var lvl= document.getElementById('currentLevel').getAttribute('lvl');
console.log("Level =" + lvl);

if(lvl==1)
{
    nifflerPosition(1,3,5,4);
    coinPosition(1,1,3,4);

    document.getElementById('codingArea').onmouseover=function(){
        check(1,5,'nextLevel1','level2');
    }
}
else if(lvl==2)
{
    nifflerPosition(2,2,4,5);
    coinPosition(1,1,2,5);

    document.getElementById('codingArea').onmouseover=function(){
        check(2,4,'nextLevel2','level3');
    }

  
}
if(lvl==3)
{
    nifflerPosition(3,1,4,2);

    document.getElementById('codingArea').onmouseover=function(){
        check(3,4,'nextLevel3');
    }
}

