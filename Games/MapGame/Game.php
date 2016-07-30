<?php
	require_once "../../header.php";
	add_to_head("<link rel='stylesheet' href='css/style.css' type='text/css' media='screen' />");
?>
        <script>
            var countLocations = 0;
			var markersRightLocations = new Array();//Stores the right locations of 5th random generated towns in Bulgaria
            var markersByUser = new Array();//Stores the chosen by the user locations of 5th random generated towns in Bulgaria
            var locations = new Array();//Stores the names of the random generated towns in Bulgaria
			locations = [" ", " ", " ", " ", " "];
            var lines = new Array();//Stores the lines between the right locations and the ones, chosen by the user
			var level = 1;//level of the game 1/2
        </script>
        
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"> </script>
		<script src = "js/bulgariaMap.js"></script>
		<script src = "js/functions.js"></script>
		<?php
			 if(!isset($_GET["level"]))
			 {
				header("LOCATION: index.php");
			 }
			 if($_GET["level"] != 1 && $_GET["level"]!=2)
			 {
				header("LOCATION: index.php");
			 }
		?>
	<div id="contentGame">
		
			<h1>Опознай България!</h1>
		<div id="GameWrapper">
		    <ul id="bar">
		        <li>1:<span class="towns"></span></li>
		        <li>2:<span class="towns"></span></li>
		        <li>3:<span class="towns"></span></li>
		        <li>4:<span class="towns"></span></li>
		        <li>5:<span class="towns"></span></li>
		    </ul>
			<div id="googleMap" style="width:500px;height:380px;"></div>
			<section id="rightSection">
		                <div id="restartLinks">
						<button onclick="location.reload()" class="button">Нова игра</button>
						<?php 
							if($_GET['level'] == 1)
							{
								echo '<a href="Game.php?level=2"><button class="button">Премини към ниво за начинаещи
						
								</button></a>';
							}
							else
							{
								echo '<a href="Game.php?level=1"><button class="button">Премини към ниво за напреднали
						
								</button></a>';
							}
						?>
					</div>
				<div>
		        <div id="timer" class="timer">
				</div>
				<div id="location"></div>
				</div>
		                <div id="resultBox">
		                    <table id="distance">
								<thead>
									<tr>
										<th>Град</th>
										<th>Разстояние от целта</th>
									</tr>
								</thead>
								<tfoot>
		                        </tfoot>
		                    </table>
		                    <div id="score"></div>
		                </div>
						<p><label>***Забележка: Ако не няма отбелязани координати за такива по подразбиране се приемат (0,0)!</label></p>
			</section>
		</div>
	</div>
	<script>CountDown(10);</script>
</body>
</html>