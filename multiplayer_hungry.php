<!-- <html>
    
    <head>
        <title>Scuirrel</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <script language="javascript" type="text/javascript" src="jquery-1.10.2.js"></script>
        <script language="javascript" type="text/javascript" src="jquery-ui.js"></script>
        <script language="javascript" type="text/javascript" src="jquery-ui1.js"></script>
        <script language="javascript" type="text/javascript" src="main.js"></script>

    </head>
    
    <body>

<?php
//require_once "controller.php"; //// ZADULJITELNO!!!!!!!!
//require_once "main.php"
?>

<h2>Multiplayer Game:</h2>
<form method="POST">
	Player Mail:<input type="text" id="email" name="email">
	Game:<input type="text" id="game" name="game">
	<input type="submit" id="new_multiplayer" value="Start" href="/index.php">
</form> -->


<?php

	
	/*if ($_POST) {
		$email = trim($_POST['email']);
		$game = trim($_POST['game']);
		fUTF8::clean($email);
		fUTF8::clean($game);
		//echo fUTF8::clean($name);
		//var_dump($game);

		$secKey = fCryptography::randomString(32);
			
			try {
		    $game = new Game();
		    //$game->setName($game);
		    $game->setSecKey($secKey);
		    $game->store();

			} catch (fExpectedException $e) {
			    echo $e->printMessage();
			}

			$playerTwo = Functions::getLoggedPersonByEmail($email);
			//var_dump($playerTwo);
			

			try{
				$playerTwo = new User(array('email'=> $email));

			} catch (fExpectedException $e) {
			    echo $e->printMessage();
			}

			try{
				$gamePlay = new Gameplay();
				$gamePlay -> setGameSecKey($secKey);
				$gamePlay -> setIdPlayerOne(fSession::get('current_user_id'));
				$gamePlay -> setIdPlayerTwo($playerTwo->getId());
				$gamePlay -> setIsActive(1);
				$gamePlay -> store();

			} catch (fExpectedException $e) {
			    echo $e->printMessage();
			}
			//set information for new user in database
		
	}*/


?>
<!-- </body>
</html> -->