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

function coinPosition(rowStart,columnStart,rowEnd,columnEnd)
{
    console.log(lvl);
    console.log(columnStart,columnEnd, rowStart, rowEnd);
    coin.style.gridColumnStart=columnStart;
    coin.style.gridColumnEnd=columnEnd;
    coin.style.gridRowStart=rowStart;
    coin.style.gridRowEnd=rowEnd;

}+"'"

function check(rowStart,rowEnd,btnName,next)
{
    if(document.getElementById('r_start').value== rowStart && document.getElementById('r_end').value==rowEnd)
    {
        console.log("Hello" + btnName);
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
    coinPosition(1,3,1,4);

    document.getElementById('codingArea').onmouseover=function(){
        check(1,5,'nextLevel1','level2');
    }
}
else if(lvl==2)
{
    nifflerPosition(2,2,4,5);
    coinPosition(1,2,1,5);

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

