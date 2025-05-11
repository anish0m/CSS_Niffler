<?php
include("../login-registration/config.php");

 session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cssniffler";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$uid=$_SESSION['uid'];

$sql= "SELECT Level FROM Progress WHERE UserID = $uid AND Topic='Grid'";
$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result))
{
    echo $row['Level'];
    $lvl = $row['Level'];
}




$sqlScore="SELECT Score FROM progress WHERE UserID= $uid AND Topic='Grid'";
$result=$conn->query($sqlScore);
while($row = mysqli_fetch_array($result))
{
    $score=$row['Score'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../grid.css">

    
       <link rel="stylesheet" href="../login-registration/css/bootstrap.min.css"> 
       <!-- <link rel="stylesheet" href="../login-registration/css/style.css"> -->
    <title>CSS Niffler</title>
</head>

<body>

<div class="currentInfo">
<div class="dropdown">
    <span>Levels</span>
    <div class="dropdown-content">
        <form method="get" action="grid-levels.php">
        <input type="submit" value="Level1" name="level1" class="levelNo" id="level1">
        <input type="submit" value="Level2" name="level2" class="levelNo" id="level2">
        <input type="submit" value="Level3" name="level3" class="levelNo" id="level3">
        </form>
    </div>
</div>



</div>

 <script>
    
var maxLvl = <?php echo json_encode($lvl)?>;

for(i=1;i<=maxLvl;i++)
{

    console.log("hoy??");
    next="level"+i;
    document.getElementById(next).style.display="inline-block";
}



// <div id='nxtlvl' style=" position: absolute; display:none;"><?php echo json_encode($lvl)?></div>
// <div id='scr' style="position: absolute; display:none;"><?php echo $score; ?></div>
    </script>
</body>

</html>