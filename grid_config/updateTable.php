<?php
include("../login-registration/config.php");
include('levels.php');
// echo "
// <script>
// var nextlevel= document.document.getElementById('nxtlvl').value;
// var currectscore=document.document.getElementById('scr').value;
// </script>
// ";

// $b ="<script>document.write(nextlevel);</script>";
// $a="<script>document.write(currentscore);</script>";




$uid=$_SESSION['uid'];

if(isset($_POST['nextBtn']))
{$a=$_POST['score'];
$b=$_POST['nextLevel'];}

echo "This is a ".$a."    yes";
echo $b;
?>
<html>
<script>
var currentLevel=document.getElementById('currentLevel').getAttribute('lvl');

<?php

$phpCurrLvl = "<script>document.write(currentLevel);</script>";

?>
    </script>
</html>


<?php

// $updateScore= "UPDATE Progress SET Score=$a WHERE UserID=$uid AND Topic='Grid'";
// $query = $conn->query($updateScore);
// if(!$query)
// echo "error updating score";

// $sql= "UPDATE Progress SET Level=$b WHERE UserID=$uid AND Topic='Grid'";


// $dom = new DOMDocument();
// $dom->load("levels.php");

// $node=$dom->getElementById('c_level');
// // $phpCurrLvl=$node->ownerDocument->saveHtml($node);

// // echo "PhP Current level : ".$phpCurrLvl;

$sql= "UPDATE Progress SET Level=Level+1 WHERE UserID=$uid AND Topic='Grid' AND Level<3";
$result = $conn->query($sql);
if(!$result)
echo "error updating";
else
echo "successfully updated";

$sql= "SELECT Level FROM Progress WHERE UserID = $uid AND Topic='Grid'";
$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result))
{
    
    echo "Max Level : ";
    echo $row['Level'];
    $lvl = $row['Level'];
}

error_reporting(E_ALL ^ E_WARNING); 

header("Location: grid-levels.php?level".$lvl."=Level".$lvl);

// header("Location: grid-levels.php?level".$phpCurrLvl."=Level".$phpCurrLvl);


?>