<?php
/*foreach ($_POST as $key => $value) {
     echo $value;
 } */
?>

<link rel="stylesheet" type="text/css" href="/GitHub/GamesWebSite/Games/Hungry-Scuirrel/main.css">
<script language="javascript" type="text/javascript" src="/GitHub/GamesWebSite/Games/Hungry-Scuirrel/jquery-1.10.2.js"></script>
<script language="javascript" type="text/javascript" src="/GitHub/GamesWebSite/Games/Hungry-Scuirrel/jquery-ui.js"></script>
<script language="javascript" type="text/javascript" src="/GitHub/GamesWebSite/Games/Hungry-Scuirrel/jquery-ui1.js"></script>
<script language="javascript" type="text/javascript" src="/GitHub/GamesWebSite/Games/Hungry-Scuirrel/main.js"></script>
<script type="text/javascript">
    
</script>
<div id='background' style="background: url('Games/squirrel/ice_age/wallpaper12.png'); border: none; width: 1000px;">
    <a href="BG/index.html"><div id='helpButton'><span></span></div></a>
    <div id='HARD'><span></span></div>
    <div id='EASY'><span></span></div>
     <h1 id='nameGame'>HUNGRY SQUIRREL </h1>

    
    <div id='delButton'><span>DELETE</span></div>
    <form id='insert' autocomplete='off' maxlength="1">
        <input id="gamePlayId" type="hidden" value="<?php echo $_POST['gamePlayId'];?>">
        <input id="player1" type="hidden" value="<?php echo $_POST['player1'];?>">
        <input id="player2val" type="hidden" value="<?php echo $_POST['player2'];?>">
        <input id="multiplayer2" type="hidden" value="<?php echo $_POST['multiplayer2'];?>">
        <input id="word" type="hidden" value="<?php echo $_POST['word'];?>">
        <input id='insertLetter' type="text" name="letter" class="display" maxlength="1" autocomplete="off"
/>
        
        <div id='result'>
            <table id='table_headers'>
                <tr id='fieldWord'></tr>
            </table>
        </div>
    </form>
    <div id='guessedLetters'></div>
    <div class='nutHolder' style="border:3px solid red; border-radius:20%;" id='nuts'>
        <h3 id="player2" style="margin-left:20px; font-family: 'ice age font'; font-size:40px; margin-top:0px; margin-bottom:-20px"></h3>
        <h3 style="margin-left:20px; font-family: 'ice age font'; font-size:40px; margin-top:19px;">THINK...</h3>

        <!-- <div class='nut' id='pic1'></div>
        <div class='nut' id='pic2'></div>
        <div class='nut' id='pic3'></div>
        <div class='nut' id='pic4'></div>
        <div class='nut' id='pic5'></div>
        <div class='nut' id='pic6'></div>
        <div class='nut' id='pic7'></div>
        <div class='nut' id='pic8'></div> -->
    </div>
    <div class='letterHolder' id='keyboard'>
        <div onclick="addLetter('Q');changeColor(this)" class='keyletter' id='letterQ'>Q</div>
        <div onclick="addLetter('W');changeColor(this)" class='keyletter' id='letterW'>W</div>
        <div onclick="addLetter('E');changeColor(this)" class='keyletter' id='letterE'>E</div>
        <div onclick="addLetter('R');changeColor(this)" class='keyletter' id='letterR'>R</div>
        <div onclick="addLetter('T');changeColor(this)" class='keyletter' id='letterT'>T</div>
        <div onclick="addLetter('Y');changeColor(this)" class='keyletter' id='letterY'>Y</div>
        <div onclick="addLetter('U');changeColor(this)" class='keyletter' id='letterU'>U</div>
        <div onclick="addLetter('I');changeColor(this)" class='keyletter' id='letterI'>I</div>
        <div onclick="addLetter('O');changeColor(this)" class='keyletter' id='letterO'>O</div>
        <div onclick="addLetter('P');changeColor(this)" class='keyletter' id='letterP'>P</div>
        <div onclick="addLetter('A');changeColor(this)" class='keyletter' id='letterA'>A</div>
        <div onclick="addLetter('S');changeColor(this)" class='keyletter' id='letter5'>S</div>
        <div onclick="addLetter('D');changeColor(this)" class='keyletter' id='letterD'>D</div>
        <div onclick="addLetter('F');changeColor(this)" class='keyletter' id='letterF'>F</div>
        <div onclick="addLetter('G');changeColor(this)" class='keyletter' id='letterG'>G</div>
        <div onclick="addLetter('H');changeColor(this)" class='keyletter' id='letterH'>H</div>
        <div onclick="addLetter('J');changeColor(this)" class='keyletter' id='letterJ'>J</div>
        <div onclick="addLetter('K');changeColor(this)" class='keyletter' id='letterK'>K</div>
        <div onclick="addLetter('L');changeColor(this)" class='keyletter' id='letterL'>L</div>
        <div onclick="addLetter('Z');changeColor(this)" class='keyletter' id='letterZ'>Z</div>
        <div onclick="addLetter('X');changeColor(this)" class='keyletter' id='letterX'>X</div>
        <div onclick="addLetter('C');changeColor(this)" class='keyletter' id='letterC'>C</div>
        <div onclick="addLetter('V');changeColor(this)" class='keyletter' id='letterV'>V</div>
        <div onclick="addLetter('B');changeColor(this)" class='keyletter' id='letterB'>B</div>
        <div onclick="addLetter('N');changeColor(this)" class='keyletter' id='letterN'>N</div>
        <div onclick="addLetter('M');changeColor(this)" class='keyletter' id='letterM'>M</div>
        <div class='keyletter' id='add'>OK</div>
        
    </div>

    <div id='squirrel'></div>
    <div id="loading_div"><span style="font-size: 5em; margin-top: 120px;">LOADING...</span></div>
</div>
<a href="index.html">
<div id="loser">
    <h1 id='mess'></h1>
</div></a>
<a href="index.html">
<div id="winner"></div></a>






