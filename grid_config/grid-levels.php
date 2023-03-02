<?php
include("../login-registration/config.php");
include('levels.php');
include("../header.php");

//  include_once('../main.php');

?>
<html>
<head>
<link rel="stylesheet" href="../main.css"/>
<link rel="stylesheet" href="../grid.css"/>
<style>
._form{
    display: none;
}

</style>
</head>

<body>
<div class="fullBody">
    
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
    <div id="c_level"></div>





<?php
function gridLevel1()
{
    // $uid=$_SESSION['uid'];
    
    echo '<section id="level">

        <div id="codingArea">

    <div class="information">
        <p>Make sure all Nifflers get coins using your grid knowledge!</p>
        <p>Put valid numbers in the box to distribute the coins to all the nifflers. Here are some guides for your help:</p>
        <p><span class="keyword">grid-column-start</span>: Specifies starting position of a column</p>
        <p><span class="keyword">grid-column-end</span>: Specifies end position of a column</p>
        <p><span class="keyword">grid-row-start</span>: Specifies starting position of a row</p>
        <p><span class="keyword">grid-row-end</span>: Specifies end position of a row</p>
    </div>

        <div class="box">
            <div class="line">
                <p class="a">1</p>
                <p class="a">2</p>
                <p class="a">3</p>
                <p class="a">4</p>
                <p class="a">5</p>
                <p class="a">6</p>
                <p class="a">7</p>
            </div>

            <div class="inputArea">
            <p class="a"><label>.coins{</label></p>
            <p class="a"><label>grid-column-start : 2;</label></p>
            <p class="a"><label>grid-column-end : 5;</label></p>
            <p class="a"><label> grid-row-start:
                    <input type="text" name="r_start" id="r_start">
                </label></p>
            <p class="a"><label>
                    grid-row-end : <input type="text" name="r_end" id="r_end"></label></p>

            <p class="a"><label>}</label></p>
               
                <button id="nextLevel1" style="display: none">Next</button>


                <div class="_form">
                <form action="updateTable.php" method="post" id="goToNext" >
                
                    <input type="hidden" name="score" value="a" id="hiddennxt">
                    <input type="hidden" name="nextLevel" value="1" id="hiddenscr">
                    <input type="submit" value="Next" id="nextBtn" name="nextBtn">
                </form>
                </div>


            </div>

            </div>
</div>
</section>
</div>
        
  ';
}

function gridLevel2()
{
    echo '<section id="level">
        <div id="codingArea">
           
        <div class="information">
            <p>Let us try again!</p>
            <p>What numbers should we use in <abbr title="Specifies starting position of a row"><span class="keyword">grid-row-start</span></abbr> and <abbr title="Specifies end position of a row"><span class="keyword">grid-row-end</span></abbr> to distribute the coins to all the Nifflers?</p>
            <p>Keep in mind not to overflow it!</p>

        </div>

        <div class="box">
        <div class="line">
            <p class="a">1</p>
            <p class="a">2</p>
            <p class="a">3</p>
            <p class="a">4</p>
            <p class="a">5</p>
            <p class="a">6</p>
            <p class="a">7</p>
        </div>

        <div class="inputArea">
        <p class="a"><label>.coins{</label></p>
            <p class="a"><label>grid-column-start : 3;</label></p>
            <p class="a"><label>grid-column-end : 5;</label></p>
            <p class="a"><label> grid-row-start:
                    <input type="text" name="r_start" id="r_start">
                </label></p>
                <p class="a"><label>
                    grid-row-end : <input type="text" name="r_end" id="r_end"></label></p>

                    <p class="a"><label>}</label></p>
                
                <button id="nextLevel2" style="display: none">Next</button>

                <div class="_form">
                <form action="updateTable.php" method="post" id="goToNext" >
                
                    <input type="hidden" name="score" value="a" id="hiddennxt">
                    <input type="hidden" name="nextLevel" value="1" id="hiddenscr">
                    <input type="submit" value="Next" id="nextBtn" name="nextBtn">
                </form>

                </div>
                </div>
                </div>
</div>
</section>
</div>
              
  ';
}

function gridLevel3()
{
    echo '<section id="level">
        <div id="codingArea">

        <div class="information">
            <p>Oh these Nifflers are being stubborn! They want to get the coins from...backwards?</p>
            <p>Ok, let us just use negative numbers.</p> 
            <p>If you want to count grid lines from the right instead of the left, you can use negative values. For example, you can set it to -1 to specify the first grid line from the right.</p>

            <p>Hmm...the nifflers demand you to put negative values <abbr title="Specifies starting position of a column"><span class="keyword">grid-column-start</span></abbr> and <abbr title="Specifies end position of a row"><span class="keyword">grid-row-end</span></abbr>.</p>

            <p>Remember, they will not accept it even if you send the coins to them using other values</p>

        </div>

        <div class="box">
        <div class="line">
            <p class="a">1</p>
            <p class="a">2</p>
            <p class="a">3</p>
            <p class="a">4</p>
            <p class="a">5</p>
            <p class="a">6</p>
            <p class="a">7</p>
        </div>

        <div class="inputArea">
        <p class="a"><label>.coins{</label></p>
            <p class="a"><label>grid-column-start :
            <input type="text" name="c_start" id="c_start">
            </label></p>
            <p class="a"><label>grid-column-end :
            <input type="text" name="c_end" id="c_end">
            </label></p>
            <p class="a"><label> grid-row-start:
                    <input type="text" name="r_start" id="r_start">
                </label></p>
                <p class="a"><label>
                    grid-row-end : <input type="text" name="r_end" id="r_end"></label></p>

                    <p class="a"><label>}</label></p>

                <button id="nextLevel3" style="display: none">Next</button>



                <div class="_form">
                <form action="updateTable.php" method="post" id="goToNext" >
                
                    <input type="hidden" name="score" value="a" id="hiddennxt">
                    <input type="hidden" name="nextLevel" value="1" id="hiddenscr">
                    <input type="submit" value="Next" id="nextBtn" name="nextBtn">
                </form>
                </div>

                </div>
                </div>
</div>
</section>
</div>
               
   ';
}

?>


<?php
if(isset($_GET['level1']))
{
    gridLevel1();
      echo '<script id="currentLevel" src="positioning.js" lvl="1">
      </script>';

}

elseif(isset($_GET['level2']))
{
    gridLevel2();
    echo '<script id="currentLevel" src="positioning.js" lvl="2">
    </script>';
}
elseif(isset($_GET['level3']))
{
    gridLevel3();
    echo '<script id="currentLevel" src="positioning.js" lvl="3">
    </script>';
}


?>
<?php
echo '
</body></html>';
?>
