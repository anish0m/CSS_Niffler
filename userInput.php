<?php


if(isset($_GET['submit2']))
{
    $rowStart = $_GET['r_start'];
    $rowEnd = $_GET['r_end'];

    if($rowStart == "1" && $rowEnd == "5")
    echo "Correct Answer, Unlock next Level";
}

if(isset($_GET['submit2']))
{
    $rowStart = $_GET['r_start'];
    $rowEnd = $_GET['r_end'];

    if($rowStart == "2" && $rowEnd == "4")
    echo "Correct Answer, Unlock next Level";
}

if(isset($_GET['submit2']))
{
    $rowStart = $_GET['r_start'];
    $rowEnd = $_GET['r_end'];

    if($rowStart == "3" && $rowEnd == "4")
    echo "Correct Answer, Unlock next Level";
}

?>