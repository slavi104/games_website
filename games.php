<?php
require_once 'header.php';

?>
<div id = "content">
	<div class="hover-description">
		<a href="Games/MapGame/index.php">
			<div class = "game">
				<div class = "screenshot">
					<img class = "screenshot" src = "images/mapGame.jpg"/>
					<h3 class="name-h3">Градовете в България</h3>
					<p class="description-paragraph" style="display:none;"> Целта на играта е да познаете координатите на 5 града в България, като за всеки град 
						разполагате с 10 секунди за да дадете отговор.</p>
				</div>
			</div>
		</a>
	</div>
	<div class="hover-description">
		<a href="squirrel.php">
			<div class = "game">
				<div class = "screenshot">
					<img class = "screenshot" src = "images/hungrySquirrel.png"/>
					<h3 class="name-h3" style="width:278px;">Познай думата - Hungry Squirrel</h3>
					<p class="description-paragraph" style="display:none;">Целта е да познаеш думата с възможно най-малко ходове. Играта разполага с мултиплеър за игра с вашите приятели и сингълплеър. </p>
				</div>
			</div>
		</a>
	</div>
	<div class="hover-description">
		<a href="Games/Canvas/index.php">
			<div class = "game">
				<div class = "screenshot">
					<img class = "screenshot" width="290px" height="180px" src = "images/canvas.png"/>
					<h3 class="name-h3-row2" style="width:278px;">Премини на другия бряг</h3>
					<p class="description-paragraph" style="display:none;">Премини на другия бряг е логическа игра, в която целта е да прехвърлите животните и преметите от единия бряг на реката до другия бряг с помощта на сал.</p>
				</div>
			</div>
		</a>
	</div>
</div>
<script type="text/javascript">
$( document ).ready(function() {
	$( ".hover-description" ).mouseover(function() {

	  var descr = $(this).children().children().children().find('p').html();
	  var name = $(this).children().children().children().find('h3').html();
	  $(this).children().children().children().find('h3').html(descr);
	  $(this).children().children().children().find('p').html(name);


	});
	$( ".hover-description" ).mouseout(function() {

	  var descr2 = $(this).children().children().children().find('p').html();
	  var name2 = $(this).children().children().children().find('h3').html();
	  $(this).children().children().children().find('h3').html(descr2);
	  $(this).children().children().children().find('p').html(name2);

	});
});
</script>
<?php
require_once 'footer.php';
?>