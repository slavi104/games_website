<?php

require_once "controller.php";

//$result = NULL;

if(isset($_POST["id"])) {
	$id = $_POST['id'];

	if ($id != NULL) {
		$gameplays = fRecordSet::buildFromSQL('Gameplay', 'SELECT gameplays.* 
			FROM gameplays 
			WHERE is_active=1 
			AND id_player_two='.$id);

		foreach ($gameplays as $gameplay) {
			$timestamp1 = $gameplays[0]->getModified();
    		$timestamp2 = new fTimestamp();

    		/*var_dump($timestamp1->getTimestamp());
    		var_dump($timestamp2->getTimestamp());*/

    		//var_dump($timestamp2->getFuzzyDifference($timestamp1, TRUE)); 

    		$tmpArr = explode(" ", $timestamp2->getFuzzyDifference($timestamp1, TRUE));

    		if ((int)$tmpArr[0] > 1 && $tmpArr[1] == "minutes") {
    			$gameplay->setIsActive(0);
    			$gameplay->store();
    		}

    		 $id_player_one = $gameplay->getIdPlayerOne();
    		 try {
    		 	$user = new User($id_player_one);
    		 } catch (Exception $e) {
    		 	
    		 }

		}
		

    	

		if ($gameplays->count()>0) {
			echo  '<div ><a style="text-decoration: none; font-weight: 900; color: rgb(255, 255, 255);" id="game_invitation" href="multiplayerList2.php">NEW GAME REQUEST  FROM ' . $user->getUserName() . '</a></div>';
		} else {
			
		}
		# code...
	}

	
}
?>
