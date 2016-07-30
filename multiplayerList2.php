<?php 
require_once "header.php";
require_once "controller.php";

//$secKey = fCryptography::randomString(32);
            
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

/*try{

    $player1 = fSession::get('current_user_id');

    $gamePlay = new Gameplay();
    $gamePlay -> setGameSecKey($secKey);
    $gamePlay -> setIdPlayerOne(fSession::get('current_user_id'));
    //$gamePlay -> setIdPlayerTwo($playerTwo->getId());
    $gamePlay -> setIsActive(1);
    $gamePlay -> store();

    $gamePlayId = $gamePlay->getId();

} catch (fExpectedException $e) {
    echo $e->printMessage();
}*/
//set information for new user in database

$id = fSession::get('current_user_id');

$gameplays = fRecordSet::buildFromSQL('Gameplay', 'SELECT gameplays.* 
    FROM gameplays 
    WHERE is_active=1 
    AND id_player_two='.$id);



if ($gameplays->count()>0) {

    

    $player1 = $gameplays[0]->getIdPlayerOne();
    $gamePlayId = $gameplays[0]->getId();
    $word = $gameplays[0]->getWord();
    $gameplays[0]->setActiveTwo(1);
    $gameplays[0]->store();

    try {
        $playerTwo = new User($player1);
        $player2Name = $playerTwo->getUserName();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    
}
?>
<div id='select_multiplayer' style="margin:auto; position:relative; width:1000px; height:400px; background-image:url('Games/squirrel/ice_age/wallpaper12.png');">
    <div class='start_window' id="multiplayer_list">
    <style type="text/css">
        @font-face {
            font-family: 'ice age font'; 
            src: url('Games/squirrel/ICE_AGE.ttf'); 
        }
    </style>
        <h1 id="nameGameStart" class='nameGame' style="margin-left: 0%;font-size: 8em;width: 100%;margin-bottom: 5%;margin: auto;position: relative;text-align: center;border-radius: 90%;height: 15%;width: 71%;vertical-align: middle;display: inline-block;font-family: ice age font;font-size: 5em;color: white;text-shadow: 5px 5px 5px red;">HUNGRY SQUIRREL</h1>
                
            <div>
                <label style="margin: auto;position: relative;text-align: center;border-radius: 90%;height: 15%;vertical-align: middle;display: inline-block;font-family: ice age font;font-size: 3em;color: white;text-shadow: 5px 5px 5px red;width: 70%;">Start multiplayer game with:<?php echo $player2Name; ?></label>
            </div>
        <div class='category_divs'>
            <div id='back_to_menu' style="cursor: pointer;border-radius: 30%;width: 17%;height: 8%;text-align: center;background-image: url('Games/squirrel/ice_age/button.png');font-family: ice age font;font-size: 3em;margin-bottom: 2%;border: 7px solid white;text-shadow: 5px 5px 5px red;margin-top: 4%;margin-left: 23%;" class='buttons category_buttons'>BACK</div>
        </div>
        <div class='category_divs'>
            <div id='start_button_multiplayer_list' style="cursor: pointer;border-radius: 30%;width: 20%;height: 8%;text-align: center;margin: auto;background-image: url('Games/squirrel/ice_age/button.png');font-family: ice age font;font-size: 3em;margin-bottom: 2%;border: 7px solid white;text-shadow: 5px 5px 5px red;margin-top: -10%;margin-left: 54%;" class='buttons category_buttons'>START</div>
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
                player2:"<?php echo fSession::get('current_user_id');?>",
                gamePlayId:"<?php echo $gamePlayId; ?>",
                player1:"<?php echo $player1; ?>",
                word:"<?php echo $word; ?>",
                multiplayer2:1
            },
            dataType: 'html'
        }).done(function(data){
            //alert(data);
            $('#select_multiplayer').empty();
            $('#select_multiplayer').append(data);

            $('#player2').append("<?php echo $player2Name;?>");

        });
    });
});

</script>