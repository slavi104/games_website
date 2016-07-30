<?php
	require_once "controller.php";
	if (isset($_POST["points"])) {
		$newPoints = (int)$_POST["points"];
		$allPoints = 0;
		try
	    {   
	        $user = new User(array("id" => fSession::get('current_user_id')));
	        $allPoints = (int)$user->getScore() + $newPoints;
		    $user->setScore($allPoints);
		    $user->store();
		    echo '1';
	        
	    } catch (fExpectedException $e) 
	    {
	        echo '0';
	    }
	}
?>