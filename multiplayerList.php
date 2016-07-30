<?php 
require_once "header.php";
require_once "controller.php";

$secKey = fCryptography::randomString(32);
            
/*try {

    $game = new Game();
    //$game->setName($game);
    $game->setSecKey($secKey);
    $game->store();

} catch (fExpectedException $e) {
    echo $e->printMessage();
}*/

//$playerTwo = Functions::getLoggedPersonByEmail($email);
//var_dump($playerTwo);


/*try{
    $playerTwo = new User(array('email'=> $email));

} catch (fExpectedException $e) {
    echo $e->printMessage();
}*/
$words = array("Paris", "London", "Bangkok", "Singapore", "New York", "Kuala","Lumpur","Hong Kong","Dubai", "Istanbul ","Rome","Shanghai","Los Angeles", "Las Vegas", "Miami", "Toronto", "Barcelona", "Dublin", "Amsterdam", "Moscow", "Cairo", "Prague", "Vienna", "Madrid", "San Francisco", "Vancouver", "Budapest", "Rio de Janeiro", "Berlin", "Tokyo", "Mexico City", "Buenos Aires", "Seoul", "Athens", "Jerusalem", "Seattle", "Delhi", "Sydney", "Mumbai", "Munich", "Venice", "Florence", "Beijing", "Cape", "Town", "Montreal", "Atlanta", "Boston", "Philadelphia", "Chicago", "San Diego", "Stockholm", "Warsaw", "Dallas", "Milan", "Oslo", "Libson", "Punta", "Cana", "Johannesburg", "Antalya", "Mecca", "Macau", "Pattaya", "Guangzhou", "Kiev", "Shenzhen", "Bucharest", "Taipei", "Orlando", "Brussels", "Chennai", "Marrakesh","Phuket", "Edirne", "Bali", "Copenhagen", "Sao", "Paulo", "Agra", "Varna", "Riyadh", "Jakarta", "Auckland", "Honolulu", "Edinburgh", "Wellington", "New Orleans", "Petra","Melbourne", "Luxor","Manila", "Houston","Phnom","Penh", "Lima","Santiago"); 
$randNum = rand(0, count($words)-1);

$word = $words[$randNum];

try{

    $player1 = fSession::get('current_user_id');

    $gamePlay = new Gameplay();
    $gamePlay -> setGameSecKey($secKey);
    $gamePlay -> setIdPlayerOne(fSession::get('current_user_id'));
    //$gamePlay -> setIdPlayerTwo($playerTwo->getId());
    $gamePlay -> setIsActive(1);
    $gamePlay -> setActiveOne(1);
    $gamePlay -> setModified(new fTimestamp());
    $gamePlay -> setWord($word);
    $gamePlay -> store();

    $gamePlayId = $gamePlay->getId();

} catch (fExpectedException $e) {
    echo $e->printMessage();
}
//set information for new user in database
?>
<div id='select_multiplayer' style="margin:auto; position:relative; width:1000px; height:400px; background-image:url('Games/squirrel/ice_age/wallpaper12.png');">
    <div class='start_window' id="multiplayer_list">
    <style type="text/css">
        @font-face {
            font-family: 'ice age font'; 
            src: url('Games/squirrel/ICE_AGE.ttf'); 
        }
    </style>
        <h1 id="nameGameStart" class='nameGame' style="margin: auto; position: relative; text-align: center; border-radius: 90%; height: 15%; vertical-align: middle; display: inline-block; font-family: ice age font; font-size: 6em; color: white; text-shadow: 5px 5px 5px red; width: 70%;">HUNGRY SQUIRREL</h1>
                <label style="margin: auto; position: relative; text-align: center; border-radius: 90%; height: 15%; vertical-align: middle; display: inline-block; font-family: ice age font; font-size: 5em; color: white; text-shadow: 5px 5px 5px red; width: 70%;">CHOOSE PLAYER 2:</label>
            <div>
                <select id="player2" style="width: 500px; font-size: 2em; margin-top: 50px;">
                    <?php
                    require_once "controller.php";
                    $users = fRecordSet::buildFromSQL('User', 'SELECT users.* FROM users WHERE is_active=1'); 
                    $option = "";
                    foreach ($users as $user) {
                        if ($user->getId() != $player1) {
                        $option .= "<option value='" . $user->getId() .  "'>" . $user->getUserName() . "</option>";

                        }
                    }

                    echo $option;

                    ?>
                </select>
            </div>
        <div class='category_divs' style="width: 300px; display: inline-block;">
            <div id='back_to_menu' style="cursor: pointer;border-radius: 30%;width: 72%;height: 8%;text-align: center;margin: auto;background-image: url('Games/squirrel/ice_age/button.png');font-family: ice age font;font-size: 3em;margin-bottom: 2%;border: 7px solid white;text-shadow: 5px 5px 5px red;margin-top: 20%;" class='buttons category_buttons'><a href="squirrel.php" style="text-decoration: none;" >BACK</a></div>
        </div>
        <div class='category_divs' style="width: 300px; display: inline-block;">
            <div id='start_button_multiplayer_list' style="cursor: pointer;border-radius: 30%;width: 72%;height: 8%;text-align: center;margin: auto;background-image: url('Games/squirrel/ice_age/button.png');font-family: ice age font;font-size: 3em;margin-bottom: 2%;border: 7px solid white;text-shadow: 5px 5px 5px red;margin-top: 20%;" class='buttons category_buttons'>START</div>
        </div>

    </div>
</div>
<script type="text/javascript">

$(document).ready(function () {
    $('#start_button_multiplayer_list').on('click', function(){
        var player2 = $( "#player2 option:selected" ).text();
        var player2val = $( "#player2" ).val();
        $.ajax({
            type: 'post',
            url: '/GitHub/GamesWebSite/Games/Hungry-Scuirrel/index.php',
            data: {
                player2:player2val,
                gamePlayId:"<?php echo $gamePlayId; ?>",
                player1:"<?php echo $player1; ?>",
                word:"<?php echo $word; ?>"
            },
            dataType: 'html'
        }).done(function(data){
            //alert(data);
            $('#select_multiplayer').empty();
            $('#select_multiplayer').append(data);

            $('#player2').append(player2);

        });
    });

    $('#back_to_menu').on('click', function(){

    });
});

</script>