<?php
include_once('screen.php');
function gridLevel1()
{
    echo '<section id="level1">
        <div>
            <form action="userInput.php" method="get" name="inputtake">
                <label>.coins{</label><br>
                <label>grid-column-start : 2;</label><br>
                <label>grid-column-end : 5;</label><br>
                <label> grid-row-start:
                    <input type="text" name="r_start1">
                </label><br>
                <label>
                    grid-row-end : <input type="text" name="r_end1"></label><br>

                <label>}</label><br>
                <input type="submit" name="submit1">
            </form>
        </div>
    </section>';
}

function gridLevel2()
{
    echo '<section id="level1">
        <div>
            <form action="userInput.php" method="get" name="inputtake">
                <label>.coins{</label><br>
                <label>grid-column-start : 3;</label><br>
                <label>grid-column-end : 5;</label><br>
                <label> grid-row-start:
                    <input type="text" name="r_start2">
                </label><br>
                <label>
                    grid-row-end : <input type="text" name="r_end2"></label><br>

                <label>}</label><br>
                <input type="submit" name="submit2">
            </form>
        </div>
    </section>';
}

function gridLevel3()
{
    echo '<section id="level1">
        <div>
            <form action="userInput.php" method="get" name="inputtake">
                <label>.coins{</label><br>
                <label>grid-column-start : 4;</label><br>
                <label>grid-column-end : 3;</label><br>
                <label> grid-row-start:
                    <input type="text" name="r_start3">
                </label><br>
                <label>
                    grid-row-end : <input type="text" name="r_end3"></label><br>

                <label>}</label><br>
                <input type="submit" name="submit3">
            </form>
        </div>
    </section>';
}

if(isset($_GET['level1']))
{
    gridLevel1();
      echo '<script id="currentLevel" src="screeen.js" lvl="1"></script>';
}

elseif(isset($_GET['level2']))
{
    gridLevel2();
    echo '<script id="currentLevel" src="screeen.js" lvl="2"></script>';
}
elseif(isset($_GET['level3']))
{
    gridLevel3();
    echo '<script id="currentLevel" src="screeen.js" lvl="3"></script>';
}

?>
