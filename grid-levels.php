<?php
include_once('screen.php');
?>

<?php
function gridLevel1()
{
    echo '<section id="level">
        <div id="codingArea">
      
                <label>.coins{</label><br>
                <label>grid-column-start : 2;</label><br>
                <label>grid-column-end : 5;</label><br>
                <label> grid-row-start:
                    <input type="text" name="r_start" id="r_start">
                </label><br>
                <label>
                    grid-row-end : <input type="text" name="r_end" id="r_end"></label><br>

                <label>}</label><br>
               
                <button id="nextLevel1" style="display: none">Next</button>
        </div>
    </section>';
}

function gridLevel2()
{
    echo '<section id="level">
        <div id="codingArea">
           
                <label>.coins{</label><br>
                <label>grid-column-start : 3;</label><br>
                <label>grid-column-end : 5;</label><br>
                <label> grid-row-start:
                    <input type="text" name="r_start" id="r_start">
                </label><br>
                <label>
                    grid-row-end : <input type="text" name="r_end" id="r_end"></label><br>

                <label>}</label><br>
                
                <button id="nextLevel2" style="display: none">Next</button>
        </div>
    </section>';
}

function gridLevel3()
{
    echo '<section id="level">
        <div id="codingArea">
                <label>.coins{</label><br>
                <label>grid-column-start : 4;</label><br>
                <label>grid-column-end : 3;</label><br>
                <label> grid-row-start:
                    <input type="text" name="r_start" id="r_start">
                </label><br>
                <label>
                    grid-row-end : <input type="text" name="r_end" id="r_end"></label><br>

                <label>}</label><br>

                <button id="nextLevel3" style="display: none">Next</button>

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
