<?php
require_once 'controller.php';

$letter = $_POST['insertedLetter'];
$player1 = $_POST['player1'];
$player2 = $_POST['player2'];
$gamePlayId = $_POST['gamePlayId'];
echo $player2;
if ($_POST['mistake'] == '1') {
	$activePlayer = 2;
} else {
	$activePlayer = 1;
}

try {
	$gamePlay = new Gameplay($gamePlayId);

    

    /*var_dump($timestamp1->getFuzzyDifference($timestamp2), TRUE);

    var_dump($timestamp1);
    var_dump($timestamp2);*/

	$gamePlay -> setIdPlayerOne($player1);
    $gamePlay -> setIdPlayerTwo($player2);
    $gamePlay -> setLetter($letter);
    $gamePlay -> setActivePlayer($_POST['mistake']);
    $gamePlay -> setIsActive(1);
    $gamePlay -> setModified(new fTimestamp());
    $gamePlay -> store();
} catch (Exception $e) {
	var_dump($e->getMessage());
}
//echo fSession::get('current_user_id');
/*foreach ($_POST as $key => $value) {
	echo $value;
}*/

/*switch($function_name){
    case $function_name:
        var_dump($letter);
        break;
    case $function_name:
        //var_dump($function_name);
        break;
}*/
?>