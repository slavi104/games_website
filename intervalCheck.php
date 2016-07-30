<?php

require_once "controller.php";

//$result = NULL;

if(isset($_POST["gamePlayId"])) {
	$id = $_POST['gamePlayId'];
	$multiplayer2 = $_POST['multiplayer2'];

	try {
		$gameplay = new Gameplay($id);
		$letter = $gameplay->getLetter();
		$activePlayer = $gameplay->getActivePlayer();
	} catch (Exception $e) {
		
	}

	if ($gameplay->getActiveOne() == 0 || $gameplay->getActiveTwo() == 0) {
		echo "LOADING...";
	} else {
		if ($multiplayer2 == 1) {
			if ($activePlayer == 1) {
				echo $letter."_!";
			} else {
				echo $letter;
			}
		} else {
			if ($activePlayer == 1) {
				echo $letter;
			} else {
				echo $letter."_!";
			}
		}
	}

	

	

	/*if ($id != NULL) {
		$gameplays = fRecordSet::buildFromSQL('Gameplay', 'SELECT gameplays.* 
			FROM gameplays 
			WHERE is_active=1 
			AND id_player_two='.$id);

		if ($gameplays->count()>0) {
			echo  '<li><a href="multiplayerList2.php">NEW GAME REQUEST</a></li>';
		} else {
			
		}
		# code...
	}
*/
	
}
?>