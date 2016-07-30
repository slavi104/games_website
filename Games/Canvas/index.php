	<?php 
	require_once '../../header.php';
	add_to_head('<link rel="stylesheet" type="text/css" href="style.css"/>');
	?>
	<div id="contentGame">
		<div id="wrapper">
			<canvas id="canvas" height="500px" width="900px">
				
			</canvas>
			<div id="animationBox"></div>
		</div>
		<div>
			<h1>Правила:</h1>
			<ol>
				<li>Лодката не може да се движи без човек/животно в нея</li>
				<li>Мечо Пух пази морковите от Заека (морковите не могат да остават без надзора на Мечо Пух в присъствие на Заека)</li>
				<li>Заека пази каците с мед от Мечо Пух(медът не може да остава без надзора на Заека в присъствието на Мечо Пух)</li>
				<li>В лодката могат да пътуват 1 или 2 (като 1ния задължително е живо същество)</li>
				<li>Кристофър Робин е надзирател на Бъксон (Звяра) - не трябва да го оставя без надзор в присъствието на другите педмети и животни</li>
				<li>Бъксон (Звяра) не може да се движи сам в лодката!</li>
			</ol>
		</div>
	
	<script type="text/javascript" src="person.js"></script>
	<script type="text/javascript" src="field.js"></script>
	<script type="text/javascript" src="functions.js"></script>
</div>