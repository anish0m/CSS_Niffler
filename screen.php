<?php
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

$sql= "SELECT Level FROM Progress WHERE UserID = '1' AND Topic='Grid'";
$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result))
{
    echo "Max Level : ";
    echo $row['Level'];
    $lvl = $row['Level'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CSS Nifffler</title>
</head>

<body>

    <section id="view">
        <div id="container">
            <div id="overlay">
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>

                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>

                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>

                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>

                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>
                <div class="grass"></div>

            </div>


            <div id="coins">
                <div id="coin">
                    <div id="coinBG"></div>
                </div>
            </div>

            <div id="nifflers">
                <div id="niffler">
                    <div id="nifflerBG">

                    </div>
                </div>
            </div>


        </div>
    </section>

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

<br><br><br>

 <script>
var maxLvl = <?php echo json_encode($lvl)?>;
for(i=maxLvl-1;i<=3;i++)
{
    console.log("hello"+"'"+"level"+i+"'");
    const lvlName='"'+"level"+i+'"';

    console.log("Mew"+lvlName);
    // document.getElementById(lvlName).style.display="none";
}
    </script>


</body>

</html>