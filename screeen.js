const niffler=document.getElementById("niffler");
console.log("why");

function nifflerPosition(rowStart,columnStart,rowEnd,columnEnd)
{
    console.log(lvl);
    console.log(columnStart,columnEnd, rowStart, rowEnd);
    niffler.style.gridColumnStart=columnStart;
    niffler.style.gridColumnEnd=columnEnd;
    niffler.style.gridRowStart=rowStart;
    niffler.style.gridRowEnd=rowEnd;

}+"'"


// nifflerPosition(1,2,4,5);

var lvl= document.getElementById('currentLevel').getAttribute('lvl');
console.log("Level =" + lvl);

if(lvl==1)
{
    nifflerPosition(2,2,4,5);
}
else if(lvl==2)
{
    nifflerPosition(1,3,3,4);
}
if(lvl==3)
{
    nifflerPosition(2,4,4,3);
}
