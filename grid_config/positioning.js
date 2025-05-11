const niffler=document.getElementById("niffler");
const coin = document.getElementById("coin");
var score=0;
var _count=5;

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


}+"'"

function check1(rowStart,rowEnd,btnName,next)
{
    const start=document.getElementById('r_start').value;
    const end = document.getElementById('r_end').value;

    coinPosition(start,end);
    if(start== rowStart && end==rowEnd)
    {

        document.getElementById(btnName).style.display="block";
        document.getElementById(next).style.display="inline-block";
        score= score +_count;
        console.log(score+" number 1");
        document.getElementById(next).addEventListener("click",function(){
            window.location.href="updateTable.php";
        });

        document.getElementById(btnName).onclick=function(){
         window.location.href="updateTable.php";}
  

    }
    else
    {
        console.log("wrong");
        _count--;
    }
}

function check2(columnStart,columnEnd, rowStart,rowEnd,btnName,next)
{
    const c_start=document.getElementById('c_start').value;
    const c_end = document.getElementById('c_end').value;
    const r_start=document.getElementById('r_start').value;
    const r_end = document.getElementById('r_end').value;

    coinPosition(r_start,r_end,c_start,c_end);
    if(r_start== rowStart && r_end==rowEnd)
    {

        document.getElementById(next).style.display="inline-block";

        document.getElementById(btnName).onclick=function(){
         window.location.href="updateTable.php";}
  

    }
    else
    {
        console.log("wrong");
        _count--;
    }
}

function call(a,b,c,d,e,f)
{

    console.log("whyy");

    if(arguments.length==4)
    check1(a,b,c,d);
    else
    check2(a,b,c,d,e,f);
}

var lvl= document.getElementById('currentLevel').getAttribute('lvl');
console.log("Level =" + lvl);

if(lvl==1)
{
    document.getElementById("c_level").innerHTML="1";
    nifflerPosition(1,3,5,4);
    coinPosition(1,1,3,4);

    document.getElementById('codingArea').onmouseover=function(){
        call(1,5,'nextLevel1','level2');
    }
}
else if(lvl==2)
{
    document.getElementById("c_level").innerHTML="2";

    nifflerPosition(2,2,4,5);
    coinPosition(1,1,2,5);

    document.getElementById('codingArea').onmouseover=function(){
        call(2,4,'nextLevel2','level3');
    }

  
}
if(lvl==3)
{
    document.getElementById("c_level").innerHTML="3";

    nifflerPosition(3,2,3,5);

    document.getElementById('codingArea').onmouseover=function(){
        call(-2,2,3,-3,'nextLevel3');
    }
}



