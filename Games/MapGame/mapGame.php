<?php 
require_once '../header.php';
?>
<script>
	$("aside").addClass("hidden");
</script>
	<div id="content">
	<p>
	Играта "..." ще провери вашето ниво на познание на административните единици в България. Целта на играта е да познаете координатите на 5 
	града в България, като за всеки град разполагате с 10 секунди за да дадете отговор. Точките се формират на базата 500 - разликата в 
	километрите от реалните координати на градовете. Играта е разделена на 2 нива - в по-лесното ниво градовете са само областни, а в по-трудното ниво
	на случаен принцип се избират 5 града от всички градове в България.
	</p>
	<div>
	<h2>
		Изберете ниво:
	</h2>
	<a href="Game.php?level=2"><button class="button">За Начинаещи</button></a>
	<a href="Game.php?level=1"><button class="button">За Напреднали</button></a>
	</div>
	</div>
</body>
</html>