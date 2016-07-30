
        <div style="display:none">
            <style type="text/css">
*{
    font-family:Georgia,Verdana;
}
@font-face {
    font-family: 'ice age font'; 
    src: url('Games/squirrel/ICE_AGE.ttf'); 
}
#mess1{
    font-size:4em;
    display:inline-block;
    vertical-align:middle;
    text-align:center;
    color:red;
}
#mess{
    vertical-align:middle;
    text-align:center;
}
#angry{
    display: none;
    width:28%;
    height:34%;
    margin-left: 72%;
    margin-top:-20%;
    background-image:url('Games/squirrel/ice_age/angrykaterica.png')
}
#squirrel{
    width:28%;
    height:34%;
    margin-left: 72%;
    margin-top:-22%;
    /*margin-top:-195px;*/
    background-image:url('Games/squirrel/ice_age/katerica2.png');
}
#keyboard{
    /*margin-top:-10%;*/
    margin-left: -28%;
    width:70%;
    height:45%;
    display: inline-block;
}
div.letterHolder{ 
    clear: left;
}
#letterA{
    margin-left:2.5%;
}
#letterZ{
    margin-left:5%;
}
#add{
    width: 17%;
    margin-left:5%;
    background-image: url("Games/squirrel/ice_age/button.png");
    border: 5px solid green;
}

.keyletter{

    font-size:5em;
   /* vertical-align:center;*/
    text-align:center;
    /*margin:center;*/
    width:8.5%;
    height:30%;
    display:inline-block;
    color:black;
    font-weight:bold;
    text-shadow:4px 4px 4px white;
    margin:0.3%;
    cursor:pointer;
    font-family:ice age font;
    background-image: url("Games/squirrel/ice_age/button.png");
    opacity:1;
    border-radius: 20%;

}
/*.keyletter:hover{
    color:red;
    box-shadow:4px 4px 4px white;
}*/
.nutHolder{ 
    overflow: auto; 
    clear: left;
    margin-top: -7%;
    margin-left: 7%;
    display:block;
}
#nutContainer{

}
.nut{
    position:relative;
    bottom: 0;
    width:22%;
    height:44%;
    display:inline-block;
    margin:1%;
    background-image:url('Games/squirrel/ice_age/julud.png')
}
/*#pic1{
    background-image:url('ice_age/julud23.png')
}
#pic2{
    background-image:url('ice_age/julud23.png')
}
#pic3{
    background-image:url('ice_age/julud23.png')
}
#pic4{
    background-image:url('ice_age/julud23.png')
}*/
#nuts{
    margin-left: 70%;
    display:inline-block;
    width:30%;
    height:30%;
}
#insert {
    margin:auto;
    position:relative;
    text-align: center;
    margin-top: 0px;
}
#insertLetter{
    text-align: center;
    font-size: 3.5em;
    font-weight: bold;
    margin-top: -58px;
    margin-left: 1%;
}
#delButton {
    width:22%;
    height:8%;
    text-align: center;
    display:inline-block;
    margin-top: -9%;
    margin-left: 77%;
}
#menu-squirrel {

    width:12%;
    height:5%;
    text-align: center;
    display:inline-block;
    margin-left: 2%;
    color: black;
    text-decoration: none;
}
.nameGame {
    margin:auto;
    position:relative;
    text-align: center;
    border-radius:90%;
    height:15%;
    width:48%;
    vertical-align:middle;
    display:inline-block;
    font-family:ice age font;
    font-size:5em;
    color:white;
    text-shadow:5px 5px 5px red;
}
#EASY {
    
    width:12%;
    height:8%;
    text-align: center;
    margin-left:14%;
    margin-top: -7%;
    display:inline-block;
    cursor: pointer;
}
span{

    font-weight:bold;
    text-shadow:5px 5px 5px red;
    font-size:4em;
    font-family:ice age font;
}

#HARD {
    margin-left:14%;
    width:12%;
    height:5%;
    text-align:center;
    display: inline-block;
   /* margin-top: -40px;*/
}
#result{
    margin-top:3%;
}
#table_headers {
    width:58%;
    height:18%;
    margin-left: 10%;
    margin-top: -2%;
    
}
#position{
    font-size:4em;
    font-weight:bold;
    font-family:ice age font;
    color:white;
    text-shadow:5px 5px 5px black;
    width:4%;
    
}
.position{
    border:2px solid red;
    border-radius: 20%;
    width:4%;
    background-image: url("Games/squirrel/ice_age/button.png");
}
/*#positionZ{
    border:0px solid red;
    border-radius: 20%;
    width:4%;
    background-image: none;
}*/
#fieldWord {
   
}
.display{
    border:2px solid black;
    height:12%;
}
#guessedLetters{
    height:10%;
    width:55%;
    margin-left: 12%;
    margin-top: -8%;
    clear: left;
    text-align:center;
    color:red;
    text-shadow:4px 4px 4px white;
    
}
#lett{
    font-size:4em;
    font-weight:bold;
    font-family:ice age font;
    display:inline-block;
    margin-left:1%;
}
#background {
    display:none;
    margin:auto;
    position:relative;
    width: 1274px;
    height: 718px;
    background-image: url('Games/squirrel/ice_age/wallpaper.png');
   /* border: 5px solid red;*/
    /*border-radius: 2%;*/
}
#winner{
    display: none;
    margin:auto;
    /*border:5px solid red;*/
    /*border-radius: 2%;*/
    position:relative;
    width:1280px;
    height:720px;
    background-image:url('Games/squirrel/ice_age/scrat.jpg');
}
#loser{
    display: none;
    /*border:5px solid red;*/
    /*border-radius: 2%;*/
    margin:auto;
    position:relative;
    width:1280px;
    height:720px;
    background-image:url('Games/squirrel/ice_age/bebelitza3.jpg');
}
.start_window{
    /*border:5px solid red;*/
    /*border-radius: 2%;*/
    margin:auto;
    position:relative;
    width:1000px;
    height:720px;
    background-image:url('Games/squirrel/ice_age/wallpaper12.png');
}
.buttons{
    cursor:pointer;
    border-radius: 30%;
    width: 25%;
    height: 12%;
    text-align: center;
    margin: auto;
    background-image: url('Games/squirrel/ice_age/button.png');
    font-family: ice age font;
    font-size: 5em;
    margin-bottom: 2%;
    border: 7px solid white;
    text-shadow: 5px 5px 5px red;
}
#nameGameStart{
    margin-left: 0%;
    font-size: 8em;
    width: 100%;
    margin-bottom: 5%;
}
#categories{
    display: none;
}
#categories_name{
    font-size: 5em;
    width: 100%;
}
.category_divs{
    display:inline-block;
    width:45%;
}
.category_buttons{
    width: 70%;
    margin-left: 25%;
    margin-bottom: 10%;
    margin-top: 5%;
}
#help_window{
    display: none;
}
#help_text{
    width: 80%;
    margin-left: 10%;
    font-size: 2em;
    color: black;
    margin-bottom: 20%;
}
#back_to_menu{
    margin-left: 37%;
}
#start_button_help{
    margin-left: 10%;
}
#start_button_multi{
    width:50%;
}
#start_button{
    width:50%;
}
#options_window{
    display: none;
}
#level{
    font-size: 5em;
    width: 100%;
    margin-bottom: -3%;
}
#language{
    font-size: 5em;
    width: 100%;
    margin-bottom: -3%;
    margin-top: -5%;
}
#back_to_menu_winner{
    width: 85%;
    margin-left: 10%;
    color: black;
}
.play_again{
    margin-top: 95%;
    margin-left: 40%;
}
#play_again_loser{
    margin-top: 65%;
    margin-left: 25%;
}
#back_to_menu_loser{
    width: 85%;
    color: black;
}
#back_to_menu_categories{
    margin-top: -2%;
    width: 40%;
    margin-left: 30%;
    font-size: 4em;
    height: 10%;
    color: black;
}
.empty_position{
    background-image: none;
    border: none;
}
#help_button{
    width:50%;
}
#options_button{
    width:50%;
}
</style>

        </div>
        <div id='background'>
            <div id='HARD'><span></span></div>
            <h1 class='nameGame'>HUNGRY SQUIRREL </h1>
            <div id='menu-squirrel'><span></span></div>
            <!-- <div id='EASY'><span>BACK</span></div> -->

            
            <a href="index.php"><div id='delButton'><span style="color: #000;margin-left: 8%;margin-right: 61%;">MENU</span></div></a>
            <form id='insert' autocomplete='off' maxlength="1">
                <input style="height: 63px; margin-top: 0px;" id='insertLetter' type="text" name="letter" class="display" maxlength="1" autocomplete="off"/>
                
                <div id='result'>
                    <table id='table_headers'>
                        <tr id='fieldWord'><!-- <td class='position' id = 'positionZ'><span id='numbers'>!</span></td> --></tr>
                    </table>
                </div>
            </form>
            <!-- <div id='nutContainer'> -->
                <div class='nutHolder' id='nuts'>
                    <div class='nut' id='pic1'></div>
                    <div class='nut' id='pic2'></div>
                    <div class='nut' id='pic3'></div>
                    <div class='nut' id='pic4'></div>
                    <div class='nut' id='pic5'></div>
                    <div class='nut' id='pic6'></div>
                    <div class='nut' id='pic7'></div>
                    <div class='nut' id='pic8'></div>
                </div>
            <!-- </div> -->
            <div id='guessedLetters'><div class="lett" id ="lett">!</div></div>
            <b><div class='letterHolder' id='keyboard'>
                <div onclick="addLetter('Q');changeColor(this)" value='Q' class='keyletter' id='letterQ'>Q</div>
                <div onclick="addLetter('W');changeColor(this)" value='W' class='keyletter' id='letterW'>W</div>
                <div onclick="addLetter('E');changeColor(this)" value='E' class='keyletter' id='letterE'>E</div>
                <div onclick="addLetter('R');changeColor(this)" value='R' class='keyletter' id='letterR'>R</div>
                <div onclick="addLetter('T');changeColor(this)" value='T' class='keyletter' id='letterT'>T</div>
                <div onclick="addLetter('Y');changeColor(this)" value='Y' class='keyletter' id='letterY'>Y</div>
                <div onclick="addLetter('U');changeColor(this)" value='U' class='keyletter' id='letterU'>U</div>
                <div onclick="addLetter('I');changeColor(this)" value='I' class='keyletter' id='letterI'>I</div>
                <div onclick="addLetter('O');changeColor(this)" value='O' class='keyletter' id='letterO'>O</div>
                <div onclick="addLetter('P');changeColor(this)" value='P' class='keyletter' id='letterP'>P</div>
                <div onclick="addLetter('A');changeColor(this)" value='A' class='keyletter' id='letterA'>A</div>
                <div onclick="addLetter('S');changeColor(this)" value='S' class='keyletter' id='letterS'>S</div>
                <div onclick="addLetter('D');changeColor(this)" value='D' class='keyletter' id='letterD'>D</div>
                <div onclick="addLetter('F');changeColor(this)" value='F' class='keyletter' id='letterF'>F</div>
                <div onclick="addLetter('G');changeColor(this)" value='G' class='keyletter' id='letterG'>G</div>
                <div onclick="addLetter('H');changeColor(this)" value='H' class='keyletter' id='letterH'>H</div>
                <div onclick="addLetter('J');changeColor(this)" value='J' class='keyletter' id='letterJ'>J</div>
                <div onclick="addLetter('K');changeColor(this)" value='K' class='keyletter' id='letterK'>K</div>
                <div onclick="addLetter('L');changeColor(this)" value='L' class='keyletter' id='letterL'>L</div>
                <div onclick="addLetter('Z');changeColor(this)" value='Z' class='keyletter' id='letterZ'>Z</div>
                <div onclick="addLetter('X');changeColor(this)" value='X' class='keyletter' id='letterX'>X</div>
                <div onclick="addLetter('C');changeColor(this)" value='C' class='keyletter' id='letterC'>C</div>
                <div onclick="addLetter('V');changeColor(this)" value='V' class='keyletter' id='letterV'>V</div>
                <div onclick="addLetter('B');changeColor(this)" value='B' class='keyletter' id='letterB'>B</div>
                <div onclick="addLetter('N');changeColor(this)" value='N' class='keyletter' id='letterN'>N</div>
                <div onclick="addLetter('M');changeColor(this)" value='M' class='keyletter' id='letterM'>M</div>
                <div class='keyletter' id='add'>OK</div>
                
            </div></b>

            <div id='squirrel'></div><div id='angry'></div>
        </div>
        <a href="index.php">
        <div id="loser">
            <h1 id='mess'></h1>
            <div class='category_divs'>
                <a href="index.php" style="text-decoration:none;">
                <div id='back_to_menu_loser' class='buttons category_buttons'>BACK TO MENU</div>
                </a>
            </div>
            <div class='category_divs'>
                <div id='play_again_loser' class='buttons category_buttons play_again'>PLAY AGAIN</div>
            </div>
        </div></a>
        
        <div id="winner">
            <div class='category_divs'>
                <a href="index.php" style="text-decoration:none;">
                <div id='back_to_menu_winner' class='buttons category_buttons'>BACK TO MENU</div>
                </a>
            </div>
            <div class='category_divs'>
                <div id='play_again_winner' class='buttons category_buttons play_again'>PLAY AGAIN</div>
            </div>
        </div>
        <div id="general_window" class="start_window">
            <h1 id="nameGameStart" class='nameGame'>HUNGRY SQUIRREL</h1>
            <div id='start_button' class='buttons'>SINGLEPLAYER</div>
            <div id='start_button_multi' class='buttons'><a href="multiplayerList.php" style="font-family: ice age font;
text-decoration: none;">MULTIPLAYER</a></div>
            <div id='help_button' class='buttons'>HELP</div>
            <div id='options_button' class='buttons'>OPTIONS</div>
        </div>
        <div class="start_window" id='categories'>
            <h1 id="nameGameStart" class='nameGame'>HUNGRY SQUIRREL</h1>
            <h1 id="categories_name" class='nameGame'>CHOOSE WORD CATEGORY:</h1>
            <div class='category_divs'>
                <div id='countries' class='buttons category_buttons'>COUNTRIES</div>
                <div id='cities' class='buttons category_buttons'>CITIES</div>
            </div>
            <div class='category_divs'>
                <div id='names' class='buttons category_buttons'>NAMES</div>
                <div id='random' class='buttons category_buttons'>RANDOM</div>
            </div>
                <div id='back_to_menu_categories' class='buttons category_buttons'>BACK TO MENU</div>
        </div>
        <div class='start_window' id="help_window">
            <h1 id="nameGameStart" class='nameGame'>HUNGRY SQUIRREL</h1>
            <div id="help_text" class='nameGame'><i>'Hungry squirrel' is a game about the squirrel from the 'Ice Age' movie which collects some nuts for the winter. There are different categories of words that you should guess to help him. The game picks a word. When you choose the right letter, you save his food supplies. Be careful not to make mistakes, because for each of them a nut will blow up. You will surely upset your squirrel. In case you have ran out of nuts, you have lost. And we all know what are the consequences when the squirrel loses his nut. So, let's prevent the world from another Ice Age!</i></div>
            <div class='category_divs'>
                <div id='back_to_menu' class='buttons category_buttons'>BACK</div>
            </div>
            <div class='category_divs'>
                <div id='start_button_help' class='buttons category_buttons'>START</div>
            </div>
        </div>
        <div id="options_window" class="start_window">
            <h1 id="nameGameStart" class='nameGame'>HUNGRY SQUIRREL</h1>
            <h1 id="level" class='nameGame'>CHOOSE LEVEL:</h1>
            <div class='category_divs'>
                <div id='hard_button' class='buttons category_buttons'>HARD</div>
            </div>
            <div class='category_divs'>
                <div id='easy_button' class='buttons category_buttons'>EASY</div>
            </div>
            <h1 id="language" class='nameGame'>CHOOSE LANGUAGE:</h1>
            <div class='category_divs'>
                <a href="index.php" style="text-decoration:none;">
                    <div id='english' class='buttons category_buttons'>ENGLISH</div>
                </a>
            </div>
             <div class='category_divs'>
                <a href="bg/index.php" style="text-decoration:none;">
                    <div id='bulgarian' class='buttons category_buttons'>BULGARIAN</div>
                </a>
            </div>
        </div>

        
        <script language="javascript" type="text/javascript">
var isOn = true;
var isOnHardOrEasy = true;
var chosen_letters = [];
var level = 2;
var wordLetter;
var i = 0;
var letterCounter = 0;
var newCounter = 0;
var picCounter = 0;
var insertedLetter;
var onAdd = false;

/*function onLoad(){
      document.addEventListener("deviceready", onDeviceReady, true);
}*/

function exitFromApp(){
    if (navigator.app) {
        navigator.app.exitApp();
            //alert('1');
    }
    else if (navigator.device) {
        navigator.device.exitApp();
            //alert('2');
    }
 }

$(function(){
    $.extend($.fn.disableTextSelect = function() {
        return this.each(function(){
            $(this).mousedown(function(){return false;});
        });
    });
    $('body').disableTextSelect();//No text selection on elements with a class of 'noSelect'
});

function addLetter(key) {
    if (isOn) {
        isOn = true;
        insertedLetter = $("input[name=letter]").val().toUpperCase();
        $('#insertLetter').val(key);
    }
}

function submitForm() {
    document.forms[0].submit();
}

function emptyLetter() {
    document.forms[0].letter.value = "";
}
                
function changeColor(divObj){
    if(isOn){
        divObj.style.color="yellow";
    }
    $('#add').css('border','5px solid green');
    //isOn = false;
    //alert(obj);
}


$(document).ready(function () {
    var words=[];
    var randNum = 0;
    var gettedWord = '';
    var longWord = 0;
    $('#start_button').on('click',function(){
        $('.start_window').fadeOut();
        $('#categories').fadeIn();
        words=[];
        randNum = 0;
        gettedWord = '';
        longWord = 0;
        $('#mess1').remove();
    });
    $('#help_button').on('click',function(){
        $('.start_window').fadeOut();
        $('#help_window').fadeIn();
        gettedWord = '';
    });
    $('#start_button_help').on('click',function(){
        $('.start_window').fadeOut();
        $('#categories').fadeIn();
        words=[];
        randNum = 0;
        gettedWord = '';
        longWord = 0;
        $('#mess1').remove();
    });
    $('#exit_button').on('click',function(){
        exitFromApp();
    });
    $('#hard_button').on('click',function(){
        $('.start_window').fadeOut();
        $('#categories').fadeIn();
        level = 1;
        words=[];
        randNum = 0;
        gettedWord = '';
        longWord = 0;
        $('#mess1').remove();
    });
    $('#easy_button').on('click',function(){
        $('.start_window').fadeOut();
        $('#categories').fadeIn();
        level = 0;
        words=[];
        randNum = 0;
        gettedWord = '';
        longWord = 0;
        $('#mess1').remove();
    });
    $('#back_to_menu').on('click',function(){
        $('.start_window').fadeOut();
        $('#general_window').fadeIn();
        gettedWord = '';
    });
    $('#back_to_menu_categories').on('click',function(){
        $('.start_window').fadeOut();
        $('#general_window').fadeIn();
        gettedWord = '';
    });
    $('#back_to_menu_options').on('click',function(){
        $('.start_window').fadeOut();
        $('#general_window').fadeIn();
        gettedWord = '';
    });
    $('.play_again').on('click',function(){
        $('#winner').fadeOut();
        $('#loser').fadeOut();
        $('#categories').fadeIn();
        words=[];
        randNum = 0;
        gettedWord = '';
        longWord = 0;
        $('#mess1').remove();
    });
    $('#options_button').on('click',function(){
        $('.start_window').fadeOut();
        $('#options_window').fadeIn();
        gettedWord = '';
    });
    $('#EASY').on('click',function(){
        $('#background').fadeOut();
        $('#categories').fadeIn();
        words=[];
        randNum = 0;
        gettedWord = '';
        longWord = 0;
        $('#mess1').remove();
    });
    $('#cities').on('click',function(){
        i = 0;
        gettedWord = '';
        $('.start_window').fadeOut();
        $('#background').fadeIn();
        words = [ "Paris", "London", "Bangkok", "Singapore", "New York", "Kuala","Lumpur","Hong Kong","Dubai", "Istanbul ","Rome","Shanghai","Los Angeles", "Las Vegas", "Miami", "Toronto", "Barcelona", "Dublin", "Amsterdam", "Moscow", "Cairo", "Prague", "Vienna", "Madrid", "San Francisco", "Vancouver", "Budapest", "Rio de Janeiro", "Berlin", "Tokyo", "Mexico City", "Buenos Aires", "Seoul", "Athens", "Jerusalem", "Seattle", "Delhi", "Sydney", "Mumbai", "Munich", "Venice", "Florence", "Beijing", "Cape", "Town", "Montreal", "Atlanta", "Boston", "Philadelphia", "Chicago", "San Diego", "Stockholm", "Warsaw", "Dallas", "Milan", "Oslo", "Libson", "Punta", "Cana", "Johannesburg", "Antalya", "Mecca", "Macau", "Pattaya", "Guangzhou", "Kiev", "Shenzhen", "Bucharest", "Taipei", "Orlando", "Brussels", "Chennai", "Marrakesh","Phuket", "Edirne", "Bali", "Copenhagen", "Sao", "Paulo", "Agra", "Varna", "Riyadh", "Jakarta", "Auckland", "Honolulu", "Edinburgh", "Wellington", "New Orleans", "Petra","Melbourne", "Luxor","Manila", "Houston","Phnom","Penh", "Lima","Santiago"]; 
        if (level===1) {
            //$('#pic1').fadeOut(); 
            $('#pic1').fadeTo( "slow", 1 );  
            //$('#pic2').fadeOut();
            $('#pic2').fadeTo( "slow", 1 );    
            //$('#pic3').fadeOut();
            $('#pic3').fadeTo( "slow", 1 );    
            //$('#pic4').fadeOut();
            $('#pic4').fadeTo( "slow", 1 );
            picCounter = 4;
            //alert('heer');
        } else if(level===2){
            $('#pic1').fadeTo( "slow", 1 ); 
            $('#pic2').fadeTo( "slow", 1 );    
            $('#pic3').fadeTo( "slow", 1 );
            $('#pic4').fadeTo( "slow", 1 );
            $('#pic5').fadeTo( "slow", 1 );
            $('#pic6').fadeTo( "slow", 1 );
            $('#pic7').fadeTo( "slow", 1 );
            $('#pic8').fadeTo( "slow", 1 );
            picCounter = 0;
        };

        randNum = Math.floor((Math.random() * words.length) + 0);
        gettedWord = words[randNum].toUpperCase();
        longWord = gettedWord.length;
        letterCounter = 0;
        newCounter = 0;
        $('.position').remove();
        $('.position2').remove();
        $('.lett').remove();
        $('.keyletter').css('color', 'black');
        var newWord = false;
        for(var j = 0; j < longWord; ++j) {
            if (!newWord) {
                i++;
            } else {
                i = 1;
                newWord=false;
            };

            wordLetter = gettedWord.substring(j,j+1);
            if (wordLetter !== " ") {
                console.log('in');
                $('#fieldWord').append("<td class='position' id = 'position" + j + "'><span id='numbers'>"+ i +"</span></td>");
            } else {
                console.log('in1');
                newWord = true;
                letterCounter++;
                //newCounter++;
                $('#fieldWord').append("<td class='position empty_position'></td>");
            }
        }
    });
    $('#names').on('click',function(){
        i = 0;
        gettedWord = '';
        $('.start_window').fadeOut();
        $('#background').fadeIn();
        words = ["Michael Jackson", "Lady Gaga", "Justin Bieber", "Jennifer Aniston", "Eminem", "Johnny Depp", "Will Smith", "Katy Perry", "Beyonce", "Leonardo DiCaprio", "Ronaldo", "Marilyn Manson", "Lionel Messi", "Roger Federer", "Madonna", "Avril Lavigne", "Shakira", "Rihanna", "Angelina Jolie", "Brad Pitt", "Britney Spears", "Taylor Swift", "Robert Pattinson", "Adele", "Justin Timberlake", "Barack Obama", "Selena Gomez", "Cameron Diaz", "Bob Marley", "Miley Cyrus", "Akon", "Megan Fox", "Eddie Murphy", "Christina Aguilera", "Michael Jordan", "Pink", "Marilyn Monroe", "Steve Jobs", "Nicki Minaj", "Nicolas Cage", "Drake", "Carmen Electra", "Dr House", "Jason Statham", "Kristen Stewart", "Kesha", "Jack Nicholson", "Tom Cruise", "Hugh Grant", "Tom Hanks", "Kim Kardashian", "Nicole Kidman", "Daniel Radcliffe", "Whoopi Goldberg", "Jennifer Lopez", "Chris Brown", "David Beckham", "Gwen Stefani", "Michelle Obama", "Muhammad Ali", "Julia Roberts", "Lil Wayne", "Adam Sandler", "Steven Spielberg", "Ben Stiller", "Jay Z", "Bill Gates", "Jessica Alba", "David Duchovny", "Charlie Sheen", "Alicia Keys", "Halle Berry", "Scarlett Johansson", "Ashton Kutcher", "Sandra Bullock", "Jennifer Love Hewitt", "George Clooney", "Uma Thurman", "Paris Hilto", "Woody Allen", "Mike Tyson", "Robert De Niro", "Tyler Perry", "Barbra Streisand", "Alyssa Milano", "Reese Witherspoon", "Drew Barrymore", "Sarah Jessica Parker", "Catherine Zeta Jones", "Stephenie Meyer", "Demi Moore", "Cindy Crawford", "Katherine Heigl", "Tiger Woods", "Kelli Williams", "Kevin Costner", "James Cameron", "Michael Douglas", "Alec Baldwin"];
        if (level===1) {
            //$('#pic1').fadeOut(); 
            $('#pic1').fadeTo( "slow", 1 );  
            //$('#pic2').fadeOut();
            $('#pic2').fadeTo( "slow", 1 );    
            //$('#pic3').fadeOut();
            $('#pic3').fadeTo( "slow", 1 );    
            //$('#pic4').fadeOut();
            $('#pic4').fadeTo( "slow", 1 );
            picCounter = 4;

        } else if(level===2){
            $('#pic1').fadeTo( "slow", 1 ); 
            $('#pic2').fadeTo( "slow", 1 );    
            $('#pic3').fadeTo( "slow", 1 );
            $('#pic4').fadeTo( "slow", 1 );
            $('#pic5').fadeTo( "slow", 1 );
            $('#pic6').fadeTo( "slow", 1 );
            $('#pic7').fadeTo( "slow", 1 );
            $('#pic8').fadeTo( "slow", 1 );
            picCounter = 0;
        };
        randNum = Math.floor((Math.random() * words.length) + 0);
        gettedWord = words[randNum].toUpperCase();
        longWord = gettedWord.length;
        letterCounter = 0;
        newCounter = 0;
        $('.position').remove();
        $('.position2').remove();
        $('.lett').remove();
        $('.keyletter').css('color', 'black');
        var newWord = false;
        for(var j = 0; j < longWord; ++j) {
            if (!newWord) {
                i++;
            } else {
                i = 1;
                newWord=false;
            };

            wordLetter = gettedWord.substring(j,j+1);
            if (wordLetter !== " ") {
                console.log('in');
                $('#fieldWord').append("<td class='position' id = 'position" + j + "'><span id='numbers'>"+ i +"</span></td>");
            } else {
                console.log('in1');
                newWord = true;
                letterCounter++;
                //newCounter++;
                $('#fieldWord').append("<td class='position empty_position'></td>");
            }
        }
    });
    $('#countries').on('click',function(){
        i = 0;
        gettedWord = '';
        $('.start_window').fadeOut();
        $('#background').fadeIn();
        words = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "Congo Democratic Republic", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "East Timor", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea North", "Korea South", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "The Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Palau", "Palestinian State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "The Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"];
        
        if (level===1) {
            //$('#pic1').fadeOut(); 
            $('#pic1').fadeTo( "slow", 1 );  
            //$('#pic2').fadeOut();
            $('#pic2').fadeTo( "slow", 1 );    
            //$('#pic3').fadeOut();
            $('#pic3').fadeTo( "slow", 1 );    
            //$('#pic4').fadeOut();
            $('#pic4').fadeTo( "slow", 1 );
            picCounter = 4;
            picCounter = 4;

        } else if(level===2){
            $('#pic1').fadeTo( "slow", 1 ); 
            $('#pic2').fadeTo( "slow", 1 );    
            $('#pic3').fadeTo( "slow", 1 );
            $('#pic4').fadeTo( "slow", 1 );
            $('#pic5').fadeTo( "slow", 1 );
            $('#pic6').fadeTo( "slow", 1 );
            $('#pic7').fadeTo( "slow", 1 );
            $('#pic8').fadeTo( "slow", 1 );
            picCounter = 0;
        };

        randNum = Math.floor((Math.random() * words.length) + 0);
        gettedWord = words[randNum].toUpperCase();
        longWord = gettedWord.length;
        letterCounter = 0;
        newCounter = 0;
        $('.position').remove();
        $('.position2').remove();
        $('.lett').remove();
        $('.keyletter').css('color', 'black');
        var newWord = false;
        for(var j = 0; j < longWord; ++j) {
            if (!newWord) {
                i++;
            } else {
                i = 1;
                newWord=false;
            };

            wordLetter = gettedWord.substring(j,j+1);
            if (wordLetter !== " ") {
                $('#fieldWord').append("<td class='position' id = 'position" + j + "'><span id='numbers'>"+ i +"</span></td>");
            } else {
                console.log('in1');
                newWord = true;
                letterCounter++;
                //newCounter++;
                $('#fieldWord').append("<td class='position empty_position'></td>");
            }
        }
    });
    $('#random').on('click',function(){
        gettedWord = '';
        $('.start_window').fadeOut();
        $('#background').fadeIn();
        words = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "Congo Democratic Republic", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "East Timor", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea North", "Korea South", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "The Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Palau", "Palestinian State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "The Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe",'London','Berlin','Tokio','Sofia','Plovdiv','Madrid', 'Lisabon','Paris',"Michael Jackson", "Lady Gaga", "Justin Bieber", "Jennifer Aniston", "Eminem", "Johnny Depp", "Will Smith", "Katy Perry", "Beyonce", "Leonardo DiCaprio", "Ronaldo", "Marilyn Manson", "Lionel Messi", "Roger Federer", "Madonna", "Avril Lavigne", "Shakira", "Rihanna", "Angelina Jolie", "Brad Pitt", "Britney Spears", "Taylor Swift", "Robert Pattinson", "Adele", "Justin Timberlake", "Barack Obama", "Selena Gomez", "Cameron Diaz", "Bob Marley", "Miley Cyrus", "Akon", "Megan Fox", "Eddie Murphy", "Christina Aguilera", "Michael Jordan", "Pink", "Marilyn Monroe", "Steve Jobs", "Nicki Minaj", "Nicolas Cage", "Drake", "Carmen Electra", "Dr House", "Jason Statham", "Kristen Stewart", "Kesha", "Jack Nicholson", "Tom Cruise", "Hugh Grant", "Tom Hanks", "Kim Kardashian", "Nicole Kidman", "Daniel Radcliffe", "Whoopi Goldberg", "Jennifer Lopez", "Chris Brown", "David Beckham", "Gwen Stefani", "Michelle Obama", "Muhammad Ali", "Julia Roberts", "Lil Wayne", "Adam Sandler", "Steven Spielberg", "Ben Stiller", "Jay Z", "Bill Gates", "Jessica Alba", "David Duchovny", "Charlie Sheen", "Alicia Keys", "Halle Berry", "Scarlett Johansson", "Ashton Kutcher", "Sandra Bullock", "Jennifer Love Hewitt", "George Clooney", "Uma Thurman", "Paris Hilto", "Woody Allen", "Mike Tyson", "Robert De Niro", "Tyler Perry", "Barbra Streisand", "Alyssa Milano", "Reese Witherspoon", "Drew Barrymore", "Sarah Jessica Parker", "Catherine Zeta Jones", "Stephenie Meyer", "Demi Moore", "Cindy Crawford", "Katherine Heigl", "Tiger Woods", "Kelli Williams", "Kevin Costner", "James Cameron", "Michael Douglas", "Alec Baldwin"];
        if (level===1) {
            //$('#pic1').fadeOut(); 
            $('#pic1').fadeTo( "slow", 1 );  
            //$('#pic2').fadeOut();
            $('#pic2').fadeTo( "slow", 1 );    
            //$('#pic3').fadeOut();
            $('#pic3').fadeTo( "slow", 1 );    
            //$('#pic4').fadeOut();
            $('#pic4').fadeTo( "slow", 1 );
            picCounter = 4;
            
        } else if(level===2){
            $('#pic1').fadeTo( "slow", 1 ); 
            $('#pic2').fadeTo( "slow", 1 );    
            $('#pic3').fadeTo( "slow", 1 );
            $('#pic4').fadeTo( "slow", 1 );
            $('#pic5').fadeTo( "slow", 1 );
            $('#pic6').fadeTo( "slow", 1 );
            $('#pic7').fadeTo( "slow", 1 );
            $('#pic8').fadeTo( "slow", 1 );
            picCounter = 0;
        };

        randNum = Math.floor((Math.random() * words.length) + 0);
        gettedWord = words[randNum].toUpperCase();
        longWord = gettedWord.length;
        letterCounter = 0;
        newCounter = 0;
        $('.position').remove();
        $('.position2').remove();
        $('.lett').remove();
        $('.keyletter').css('color', 'black');
        var newWord = false;
        for(var j = 0; j < longWord; ++j) {
            if (!newWord) {
                i++;
            } else {
                i = 1;
                newWord=false;
            };

            wordLetter = gettedWord.substring(j,j+1);
            if (wordLetter !== " ") {
                console.log('in');
                $('#fieldWord').append("<td class='position' id = 'position" + j + "'><span id='numbers'>"+ i +"</span></td>");
            } else {
                console.log('in1');
                newWord = true;
                letterCounter++;
                //newCounter++;
                $('#fieldWord').append("<td class='position empty_position'></td>");
            }
        }
    });

    $('#add').click(function () {
        //console.log(gettedWord);
        $(this).css('border','5px solid red');

            isOn = true;
            isOnHardOrEasy = false;
            insertedLetter = $("input[name=letter]").val().toUpperCase();
            // alert(insertedLetter);
            if(insertedLetter===gettedWord){
                $('#background').fadeOut('fast');
                $('#winner').fadeIn();
            }
            
            
            
            $('#guessedLetters').append('<div class="lett" id ="lett" >'+ insertedLetter +'</div>');
            for (var i = 0; i < longWord; ++i) {
                wordLetter = gettedWord.substring(i, i + 1);
                //    alert(wordLetter);
                if (insertedLetter === wordLetter) {
                    //    alert('Imash bukva');
                    $('#position' + i + '').fadeOut();
                    $('#position' + i + '').replaceWith("<td class='position2' id ='position'>" + insertedLetter + "</td>"); 
                    ++letterCounter;
                    newCounter-=1;
                }
            }
            if (newCounter === letterCounter) {
                ++picCounter;
                $('#squirrel').fadeOut('fast');
                $('#angry').fadeIn(600);
                 //$('#angry').effect("bounce", {times: 8}, 600); 
                $('#angry').fadeOut('fast');
                $('#squirrel').delay(630).fadeIn('fast');
                if (picCounter == 8) {
                    $('#background').fadeOut('fast');
                    $('#loser').fadeIn();
                    $('#mess').append('<div id="mess1">'+ gettedWord +'</div>');
                    gettedWord='';
                }
                switch (picCounter)
                {
                case 1:
                  $('#pic1').fadeOut(); 
                  $('#pic1').fadeTo( "slow", 0 );
                  break;
                case 2:
                  $('#pic2').fadeOut();
                  $('#pic2').fadeTo( "slow", 0 );
                  break;
                case 3:
                  $('#pic3').fadeOut();
                  $('#pic3').fadeTo( "slow", 0 );
                  break;
                case 4:
                  $('#pic4').fadeOut();
                  $('#pic4').fadeTo( "slow", 0 );
                  break;
                case 5:
                  $('#pic5').fadeOut();
                  $('#pic5').fadeTo( "slow", 0 );
                  break;
                case 6:
                  $('#pic6').fadeOut(); 
                  $('#pic6').fadeTo( "slow", 0 );
                  break;
                case 7:
                  $('#pic7').fadeOut();
                  $('#pic7').fadeTo( "slow", 0 );
                  break;
                case 8:
                  $('#pic8').fadeOut();
                  $('#pic8').fadeTo( "slow", 0 );
                  break;
                
                }
                
            }
            if (letterCounter === longWord) {
               $('#background').fadeOut();
               $('#winner').fadeIn();
               gettedWord = '';
            }
            newCounter = letterCounter;
            $('#insert')[0].reset();
            //onAdd = false;

           /* $.ajax({
                type: 'post',
                url: 'Games/squirrel/squirrel-gameplay.php',
                data: {
                    key:insertedLetter,
                }
            }).done(function(data){
                alert(data);
            }); */
            return false;
        

    });
});
            </script>



